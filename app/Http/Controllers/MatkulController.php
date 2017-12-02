<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;
use App\jurusan;
use DB;
use Illuminate\Support\Facades\Auth;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user['status'] == 'admin')
        {
            $matkuls = Matkul::all();
            $jurusans = jurusan::all();
            return view('admin.input_matkul', compact('matkuls','jurusans'));
        }
        else
        {
            return view('noaccess');
        }
        
    }

    public function loadJurusanInput()
    {
        $user = Auth::user();
        if($user['status'] == 'admin')
        {
            $jurusans = jurusan::all();
            return view('admin.input_matkul', compact('jurusans'));
        }
        else
        {
            return view('noaccess');
        }
        
    }

    public function loadJurusanEdit()
    {
        $user = Auth::user();
        if($user['status'] == 'admin')
        {
            $matkuls = DB::table('matkuls')
            ->join('jurusans', 'matkuls.id_jurusan', '=', 'jurusans.id')
            ->select('matkuls.*', 'jurusans.nama as nama_jurusan')
            ->get();
            return view('admin.edit_matkul', compact('matkuls'));
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
        if($user['status'] == 'admin')
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
        $user = Auth::user();
        if($user['status'] == 'admin')
        {
            $matkuls = Matkul::find($id);
            $jurusans = jurusan::all();
            
            return view('admin.update_matkul',compact('jurusans','matkuls','id'));
        }
        else
        {
            return view('noaccess');
        }
        
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
        $user = Auth::user();
        if($user['status'] == 'admin')
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
        else
        {
            return view('noaccess');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        if($user['status'] == 'admin')
        {
            $matkuls = Matkul::find($id);
            $matkuls->delete();
            
            return redirect('/list_matkul');
        }
        else
        {
            return view('noaccess');
        }
        
    }
}
