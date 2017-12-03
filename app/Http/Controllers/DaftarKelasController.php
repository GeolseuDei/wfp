<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\MatkulDiambil;
use App\fpp;
use Illuminate\Support\Facades\Auth;

class DaftarKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user['status'] == 'mahasiswa')
        {
            $fpps = fpp::all()->where('status', 1);
            return view('mahasiswa.daftarkelas', compact('fpps'));
        }
        else
        {
            return view('noaccess');
        }
    }

    public function getNamaMK(Request $request)
    {
        $user = Auth::user();
        if($user['status'] == 'mahasiswa')
        {
            $kodemk = strtoupper($request->post('kodemk'));
            
            $mahasiswas = DB::table('mahasiswas')
            ->join('users', 'mahasiswas.user_id', '=', 'users.id')
            ->join('jurusans', 'mahasiswas.jurusan', '=', 'jurusans.id')
            ->select('mahasiswas.*', 'jurusans.nama as nama_jurusan')
            ->where('mahasiswas.user_id','=', Auth::user()->id)
            ->get();

            $jadwalmatkul = DB::table('matkuls')
            ->join('kelas', 'kelas.matkul_id', '=', 'matkuls.id')
            ->join('dosens', 'dosens.id', '=', 'kelas.dosen_id')
            ->select('matkuls.*', 'kelas.*', 'dosens.nama as nama_dosen')
            ->where([
                ['matkuls.id_jurusan','=', $mahasiswas[0]->jurusan],
                ['matkuls.status','=','1'],
                ['matkuls.kode','=', $kodemk],
            ])
            ->get();

            $namamk = $jadwalmatkul->where('kode', '=', $kodemk);

            $idmk = "";
            if($jadwalmatkul->count()>0){
                $idmk = $jadwalmatkul[0]->matkul_id;
            }

            $fpps = fpp::all()->where('status', 1);

            return view('mahasiswa.daftarkelas', compact('jadwalmatkul', 'namamk','idmk', 'fpps'));
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
        $user = Auth::user();
        if($user['status'] == 'mahasiswa')
        {
            $mahasiswas = DB::table('mahasiswas')
            ->join('users', 'mahasiswas.user_id', '=', 'users.id')
            ->select('mahasiswas.id as mhsid')
            ->where('mahasiswas.user_id','=', Auth::user()->id)
            ->get();

            $kp = strtoupper($request->get('kp'));
            $idmk = $request->get('idmk');

            $kelas = DB::table('kelas')
            ->join('matkuls', 'kelas.matkul_id', '=', 'matkuls.id')
            ->select('kelas.id as idkelas', 'kelas.kapasitas as kapasitas', 'kelas.jml_mhs as jml_mhs')
            ->where('kelas.kp','=', $kp)
            ->where('matkuls.id','=', $idmk)
            ->get();

            $fppName = DB::table('fpps')
            ->select('nama')
            ->where('status' 1)
            ->get();
            if($fppName == "Kasus Khusus")
            {
                $sisaKapasitas = $item->kapasitas - $item->jml_mhs;
                if($sisaKapasitas > 0)
                {
                    $matkuldiambil = new MatkulDiambil([
                        'status' => 1,
                        'kelas_id' => $kelas[0]->idkelas,
                        'mahasiswa_id' => $mahasiswas[0]->mhsid,
                    ]);
                }
                else
                {
                    $matkuldiambil = new MatkulDiambil([
                        'status' => 2,
                        'kelas_id' => $kelas[0]->idkelas,
                        'mahasiswa_id' => $mahasiswas[0]->mhsid,
                    ]);
                }
            }
            else
            {
                $matkuldiambil = new MatkulDiambil([
                    'status' => 0,
                    'kelas_id' => $kelas[0]->idkelas,
                    'mahasiswa_id' => $mahasiswas[0]->mhsid,
                ]);
            }
            

            $matkuldiambil->save();

            return redirect('history');
        }
        else
        {
            return view('noaccess');
        }
        
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
