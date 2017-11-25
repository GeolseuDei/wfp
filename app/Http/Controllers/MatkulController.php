<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;
use App\jurusan;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkuls = Matkul::all();
        $jurusans = jurusan::all();
        return view('admin.input_matkul', compact('matkuls','jurusans'));
    }

    public function loadJurusanInput()
    {
        $jurusans = jurusan::all();
        return view('admin.input_matkul', compact('jurusans'));
    }

    public function loadJurusanEdit()
    {
        $matkuls = Matkul::all();
        return view('admin.edit_matkul', compact('matkuls'));
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
        $matkuls = new Matkul([ 
          'kode' => $request->get('kode_matkul'),
          'nama' => $request->get('nama_matkul'),
          'sks' => $request->get('sks'),
          'id_jurusan' => $request->get('jurusan'),
          'status' => $request->get('optradio'),
          'semester' => $request->get('semester'),
      ]);

        $matkuls->save();
        return redirect('/admin_page');
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
        $matkuls = Matkul::find($id);
        $jurusans = jurusan::all();
        return view('admin.update_matkul',compact('jurusans','matkuls','id'));
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
        $matkuls = Matkul::find($id);
        $matkuls->kode = $request->get('kode_matkul');
        $matkuls->nama = $request->get('nama_matkul');
        $matkuls->sks = $request->get('sks');
        $matkuls->id_jurusan = $request->get('jurusan');
        $matkuls->status = $request->get('optradio');
        $matkuls->semester = $request->get('semester');
        $matkuls->save();
        
        return redirect('/list_matkul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matkuls = Matkul::find($id);
        $matkuls->delete();
        
        return redirect('/list_matkul');
    }
}
