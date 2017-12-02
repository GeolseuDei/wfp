<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\MatkulDiambil;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
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
            $matkul_diambils = DB::table('matkul_diambils')
            ->join('kelas', 'matkul_diambils.kelas_id', '=', 'kelas.id')
            ->join('matkuls', 'kelas.matkul_id', '=', 'matkuls.id')

            ->join('mahasiswas', 'matkul_diambils.mahasiswa_id', '=', 'mahasiswas.id')
            ->join('users', 'mahasiswas.user_id', '=', 'users.id')

            ->select('matkuls.*', 'kelas.*', 'matkul_diambils.status','matkul_diambils.id as idmatkuldiambil')
            ->where('mahasiswas.user_id','=', Auth::user()->id)
            ->get();

            return view('mahasiswa.history', compact('matkul_diambils'));
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
        $user = Auth::user();
        if($user['status'] == 'mahasiswa')
        {
            $matkul_diambils = MatkulDiambil::find($id);

            $matkul_diambils->delete();
            
            return redirect('history');
        }
        else
        {
            return view('noaccess');
        }
        
    }
}
