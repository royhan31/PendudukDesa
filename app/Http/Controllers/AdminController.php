<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use App\Keluarga;
use DB;

class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $penduduk = Penduduk::all();
      $keluarga = DB::table('keluargas')->select('keluargas.no_kk')->groupBy('keluargas.no_kk')->get();
      return view('pages.dashboard',compact('penduduk','keluarga'));
    }
}
