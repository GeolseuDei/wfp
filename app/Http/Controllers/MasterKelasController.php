<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Matkul;
use App\Dosen;
use App\User;
use App\Jurusan;
use DB;

class MasterKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $kelas = DB::table('kelas')
        ->join('matkuls', 'kelas.matkul_id', '=', 'matkuls.id')
        ->join('dosens', 'kelas.dosen_id', '=', 'dosens.id')
        ->select('kelas.*', 'matkuls.nama as nama_matkul', 'dosens.nama as nama_dosen')
        ->get();

        return view('admin.master_kelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        $dosens = Dosen::all();
        $matkuls = Matkul::all();
        return view('admin.input_kelas', compact('jurusans','dosens', 'matkuls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelas = new Kelas([ 
          'hari' => $request->get('hari'),
          'jam_masuk' => $request->get('jammasuk'),
          'jam_keluar' => $request->get('jamkeluar'),
          'kp' => $request->get('kp'),
          'kapasitas' => $request->get('kapasitas'),
          'ruang' => $request->get('ruang'),
          'matkul_id' => $request->get('matkul'),
          'dosen_id' => $request->get('dosen'),
      ]);

        $kelas->save();

        return redirect('master_kelas');
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
        $kelas = Kelas::find($id);
        $matkuls = Matkul::find($kelas->matkul_id);
        $dosens = Dosen::find($kelas->dosen_id);

        $fullmatkuls = Matkul::all();
        $fulldosens = Dosen::all();
        
        return view('admin.edit_kelas', compact('fullmatkuls','fulldosens','dosens','matkuls','kelas'));
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
        $kelas = Kelas::find($id);
        $kelas->hari = $request->get('hari');
        $kelas->hari = $request->get('hari');
        $kelas->jam_masuk = $request->get('jammasuk');
        $kelas->jam_keluar = $request->get('jamkeluar');
        $kelas->kp = $request->get('kp');
        $kelas->kapasitas = $request->get('kapasitas');
        $kelas->ruang = $request->get('ruang');
        $kelas->matkul_id = $request->get('matkul');
        $kelas->dosen_id = $request->get('dosen');

        $kelas->save();

        return redirect('master_kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);

        $kelas->delete();
        
        return redirect('master_kelas');
    }
}
