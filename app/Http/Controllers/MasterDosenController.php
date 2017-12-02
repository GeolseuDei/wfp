<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class MasterDosenController extends Controller
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
            $dosens = Dosen::all();
            return view('admin.master_dosen', compact('dosens'));
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
        $user = Auth::user();
        if($user['status'] == 'admin')
        {
            $dosens = Dosen::all();
            $users = User::all();
            return view('admin.input_dosen', compact('dosens', 'users'));
        }
        else
        {
            return view('noaccess');
        }
        
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
            $users = new User([ 
              'name' => $request->get('namadosen'),
              'email' => $request->get('email'),
              'username' => $request->get('username'),
              'password' => bcrypt($request->get('password')),
              'status' => 'dosen'
          ]);

            $dosens = new Dosen([ 
              'nik' => $request->get('nik'),
              'nama' => $request->get('namadosen'),
              'user_id' => $request->get('iddosenbaru'),
          ]);

            $users->save();
            $dosens->save();
            return redirect('master_dosen');
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
            $dosens = Dosen::find($id);
            $users = User::find($dosens->user_id);

            return view('admin.edit_dosen', compact('dosens','users','id'));
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
            $dosens = Dosen::find($id);
            $users = User::find($dosens->user_id);

            $dosens->nama = $request->get('namadosen');
            $users->email = $request->get('email');
            $users->password = bcrypt($request->get('password'));

            $users->save();
            $dosens->save();

            return redirect('master_dosen');
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
            $dosens = Dosen::find($id);
            $users = User::find($dosens->user_id);

            $dosens->delete();
            $users->delete();

            return redirect('master_dosen');
        }
        else
        {
            return view('noaccess');
        }
        
    }
}
