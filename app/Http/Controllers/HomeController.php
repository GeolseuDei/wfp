<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fpp;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fpp1 = fpp::all()->where('nama', 'fpp1');
        $fpp2 = fpp::all()->where('nama', 'fpp2');
        $fpp3 = fpp::all()->where('nama', 'Kasus Khusus');

        if($fpp1->count()>0 && $fpp2->count()>0 && $fpp3->count()>0){
            return view('home', compact('fpp1', 'fpp2', 'fpp3'));
        }if($fpp1->count()>0 && $fpp2->count()>0){
            return view('home', compact('fpp1', 'fpp2'));
        }if($fpp1->count()>0){
            return view('home', compact('fpp1'));
        } else {
            return view('home');
        }
    }
}
