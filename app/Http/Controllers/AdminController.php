<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use App\Keluarga;

class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $penduduk = Penduduk::all();
      $keluarga = Keluarga::all();
      return view('pages.dashboard',compact('penduduk','keluarga'));
    }
}
