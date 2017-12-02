<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fpp;
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

    public function index()
    {
        $user = Auth::user();
        if($user['status'] == 'admin')
        {
            $fpp1 = fpp::all()->where('nama', 'fpp1');
            $fpp2 = fpp::all()->where('nama', 'fpp2');
            $fpp3 = fpp::all()->where('nama', 'fpp3');

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
