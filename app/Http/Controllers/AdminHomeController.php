<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fpp;
use App\MatkulDiambil;
use App\Kelas;
use DB;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function validasi()
    {
        //PRIORITAS 1 --ASDOS
        $matkulDiambils = DB::table('matkul_diambils')
        ->join('mahasiswas', 'matkul_diambils.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('kelas', 'matkul_diambils.kelas_id', '=', 'kelas.id')
        ->select('matkul_diambils.id as id_matkul_diambil', 'matkul_diambils.status', 'mahasiswas.asdos as asdos', 'kelas.kapasitas as kapasitas', 
            'kelas.jml_mhs as jml_mhs', 'kelas.id as id_kelas')
        ->where('mahasiswas.asdos', 1)
        ->where('matkul_diambils.status', 0)
        ->get();

        foreach($matkulDiambils as $item)
        {
            $sisaKapasitas = $item->kapasitas - $item->jml_mhs;
            if($sisaKapasitas > 0)
            {
                //Tambah jumlah mahasiswa yang masuk di kelas itu
                Kelas::where('id', $item->id_kelas)->update(['jml_mhs' => ($item->jml_mhs + 1)]);

                //Ganti status menjadi diterima
                MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 1]);
            }
            else
            {
                //Ganti status menjadi ditolak
                MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 2]);
            }
        }

        //PRIORITAS 2 --MHS PADA SEMESTERNYA
        $semester = DB::table('fpps')->select('fpps.semester as semester')->where('status', 1)->get();
        $gasalGenap = substr($semester, 0, 10); //GASAL - GENAP
        $tahun = substr($semester, 11); //2018

        $matkulDiambils = DB::table('matkul_diambils')
        ->join('mahasiswas', 'matkul_diambils.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('kelas', 'matkul_diambils.kelas_id', '=', 'kelas.id')
        ->join('matkuls', 'kelas.matkul_id', '=', 'matkuls.id')
        ->select('matkul_diambils.id as id_matkul_diambil', 'matkul_diambils.status', 'mahasiswas.angkatan as angkatan', 'matkuls.semester as semester', 
            'kelas.kapasitas as kapasitas', 'kelas.jml_mhs as jml_mhs', 'kelas.id as id_kelas')
        ->where('matkul_diambils.status', 0)
        ->get();

        foreach ($matkulDiambils as $item)
        {
            $sisaKapasitas = $item->kapasitas - $item->jml_mhs;
            $smt_mhs = 0;
            if($gasalGenap == 'GASAL')
            {
                $smt_mhs = (($tahun - $item->angkatan) * 2) - 1;
            }
            else if($gasalGenap == 'GENAP')
            {
                $smt_mhs = ($tahun - $item->angkatan) * 2;
            }

            if($smt_mhs == $item->semester)
            {
                if($sisaKapasitas > 0)
                {
                    //Tambah jumlah mahasiswa yang masuk di kelas itu
                    Kelas::where('id', $item->id_kelas)->update(['jml_mhs' => ($item->jml_mhs + 1)]);

                    //Ganti status menjadi diterima
                    MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 1]);
                }
                else
                {
                    //Ganti status menjadi ditolak
                    MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 2]);
                }
            }
        }

        //PRIORITAS 3 --MHS ANGKATAN TUA (>10)
        $matkulDiambils = DB::table('matkul_diambils')
        ->join('mahasiswas', 'matkul_diambils.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('kelas', 'matkul_diambils.kelas_id', '=', 'kelas.id')
        ->join('matkuls', 'kelas.matkul_id', '=', 'matkuls.id')
        ->select('matkul_diambils.id as id_matkul_diambil', 'matkul_diambils.status', 'mahasiswas.angkatan as angkatan', 'kelas.kapasitas as kapasitas', 
            'kelas.jml_mhs as jml_mhs', 'kelas.id as id_kelas')
        ->where('matkul_diambils.status', 0)
        ->get();

        foreach ($matkulDiambils as $item)
        {
            $sisaKapasitas = $item->kapasitas - $item->jml_mhs;
            if($gasalGenap == 'GASAL')
            {
                $smt_mhs = (($tahun - $item->angkatan) * 2) - 1;
            }
            else if($gasalGenap == 'GENAP')
            {
                $smt_mhs = ($tahun - $item->angkatan) * 2;
            }

            if($smt_mhs > 10)
            {
                if($sisaKapasitas > 0)
                {
                    //Tambah jumlah mahasiswa yang masuk di kelas itu
                    Kelas::where('id', $item->id_kelas)->update(['jml_mhs' => ($item->jml_mhs + 1)]);

                    //Ganti status menjadi diterima
                    MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 1]);
                }
                else
                {
                    //Ganti status menjadi ditolak
                    MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 2]);
                }
            }
        }

        //DAN LAINNYA
        $matkulDiambils = DB::table('matkul_diambils')
        ->join('mahasiswas', 'matkul_diambils.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('kelas', 'matkul_diambils.kelas_id', '=', 'kelas.id')
        ->select('matkul_diambils.id as id_matkul_diambil', 'matkul_diambils.status', 'kelas.kapasitas as kapasitas', 'kelas.jml_mhs as jml_mhs', 'kelas.id as id_kelas')
        ->where('matkul_diambils.status', 0)
        ->get();

        foreach ($matkulDiambils as $item)
        {
            $sisaKapasitas = $item->kapasitas - $item->jml_mhs;
            if($sisaKapasitas > 0)
            {
                //Tambah jumlah mahasiswa yang masuk di kelas itu
                Kelas::where('id', $item->id_kelas)->update(['jml_mhs' => ($item->jml_mhs + 1)]);

                //Ganti status menjadi diterima
                MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 1]);
            }
            else
            {
                //Ganti status menjadi ditolak
                MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 2]);
            }
        }

        return redirect('admin_page');
    }

    public function validasiKK()
    {
        $matkulDiambils = DB::table('matkul_diambils')
        ->join('mahasiswas', 'matkul_diambils.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('kelas', 'matkul_diambils.kelas_id', '=', 'kelas.id')
        ->select('matkul_diambils.id as id_matkul_diambil', 'matkul_diambils.status', 'kelas.kapasitas as kapasitas', 'kelas.jml_mhs as jml_mhs', 'kelas.id as id_kelas')
        ->where('matkul_diambils.status', 0)
        ->get();

        foreach ($matkulDiambils as $item)
        {
            $sisaKapasitas = $item->kapasitas - $item->jml_mhs;
            if($sisaKapasitas > 0)
            {
                //Tambah jumlah mahasiswa yang masuk di kelas itu
                Kelas::where('id', $item->id_kelas)->update(['jml_mhs' => ($item->jml_mhs + 1)]);

                //Ganti status menjadi diterima
                MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 1]);
            }
            else
            {
                //Ganti status menjadi ditolak
                MatkulDiambil::where('id', $item->id_matkul_diambil)->update(['status' => 2]);
            }
        }

        return redirect('admin_page');
    }

    public function index()
    {
        $user = Auth::user();
        if($user['status'] == 'admin')
        {
            $fpp1 = fpp::all()->where('nama', 'fpp1');
            $fpp2 = fpp::all()->where('nama', 'fpp2');
            $fpp3 = fpp::all()->where('nama', 'Kasus Khusus');

            $matkuls = DB::table('matkuls')
            ->join('kelas','matkuls.id','=','kelas.matkul_id')
            ->join('dosens','kelas.dosen_id','=','dosens.id')
            ->join('jurusans','matkuls.id_jurusan', '=', 'jurusans.id')
            ->select('*', 'dosens.nama as nama_dosen', 'matkuls.nama as nama_matkul', 'jurusans.nama as nama_jurusan')
            ->get();

            return view('admin.index', compact('matkuls','fpp1', 'fpp2', 'fpp3'));
        }
        else
        {
            return view('noaccess');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
