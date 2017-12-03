<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\fpp;

class KasusKhususController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fpps = fpp::all()->where('nama', 'Kasus Khusus');
        
        return view('admin.kasus_khusus', compact('fpps'));
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
        // $this->validate($request, [
        // 'tgl_mulai' => 'required|max:20',
        // 'tgl_selesai' => 'required',
        // ]);
        if((strtotime($request->get('tgl_mulai'))) > (strtotime($request->get('tgl_selesai'))))
        {

            return Redirect::back()->withErrors(['Tanggal mulai tidak boleh lebih dari tanggal selesai']);

        } else {
            $fpps = new fpp([
              'nama' => 'Kasus Khusus',  
              'tgl_mulai' => $request->get('tgl_mulai'),
              'tgl_selesai' => $request->get('tgl_selesai'),
              'status' => '0',
              'semester' => '2018',
          ]);

            $fpps->save();
            return redirect('/admin_page');
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
        $fpps = fpp::find($id);
        // $this->validate($request, [
        // // 'tgl_mulai' => 'required|max:20',
        // // 'tgl_selesai' => 'required',
         //]);
        if((strtotime($request->get('tgl_mulai'))) > (strtotime($request->get('tgl_selesai'))))
        {

            return Redirect::back()->withErrors(['Tanggal mulai tidak boleh lebih dari tanggal selesai']);

        } else {
            $status = $request->get('optradio');
            if($status == 1) //Aktif, hapus status aktif pada fpp lainnya
            {
                fpp::where('status', 1)->update(['status' => 0]);
            }
        
            $fpps->tgl_mulai = $request->get('tgl_mulai');
            $fpps->tgl_selesai = $request->get('tgl_selesai');
            $fpps->status = $request->get('optradio');
            $fpps->save();
            
            return redirect('/admin_page');
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
        //
    }
}
