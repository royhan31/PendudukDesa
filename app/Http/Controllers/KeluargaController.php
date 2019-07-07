<?php

namespace App\Http\Controllers;

use App\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Keluarga $keluarga)
    {
        //
    }


    public function edit(Keluarga $keluarga)
    {
        //
    }


    public function update(Request $request, Keluarga $keluarga)
    {
        //
    }

    
    public function destroy(Keluarga $keluarga)
    {
        //
    }
}
