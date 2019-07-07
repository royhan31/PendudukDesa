<?php

namespace App\Http\Controllers;

use App\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index()
    {
        $penduduks = Penduduk::where('deleted_at', false)->orderBy('id','DESC')->get();
        return view('pages.penduduk.index', compact('penduduks'));
    }


    public function create()
    {
        return view('pages.penduduk.tambah');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
          'nik' => 'min:16|max:16|unique:penduduks',
          'nama' => 'string|min:3',
          'tempat_lahir' => 'string|min:5',
          'pekerjaan' => 'string|min:5'
        ]);

        Penduduk::create([
          'nik' => $request->nik,
          'nama' => $request->nama,
          'jenis_kelamin' => $request->jenis_kelamin,
          'tempat_lahir' => $request->tempat_lahir,
          'tgl_lahir' => $request->tgl_lahir,
          'agama' => $request->agama,
          'pendidikan' => $request->pendidikan,
          'perkawinan' => $request->perkawinan,
          'pekerjaan'=> $request->pekerjaan,
          'rt' => $request->rt,
          'rw' => $request->rw,
          'kewarganegaraan' => $request->kewarganegaraan
        ]);

        return redirect()->route('penduduk')->with('success','Penduduk berhasil ditambahkan');
    }


    public function show(Penduduk $penduduk)
    {
        return view('pages.penduduk.tampil', compact('penduduk'));
    }


    public function edit(Penduduk $penduduk)
    {
      return view('pages.penduduk.edit', compact('penduduk'));
    }


    public function update(Request $request, Penduduk $penduduk)
    {
      //dd($request->all());
        if($request->nik = $penduduk->nik){
          $this->validate($request,[
            'nik' => 'min:16|max:16',
            'nama' => 'string|min:3',
            'tempat_lahir' => 'string|min:5',
            'pekerjaan' => 'string|min:5'
          ]);
          $penduduk->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'perkawinan' => $request->perkawinan,
            'pekerjaan'=> $request->pekerjaan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kewarganegaraan' => $request->kewarganegaraan,
            'status' => $request->status
          ]);
        }else {
          $this->validate($request,[
            'nik' => 'min:16|max:16|unique:penduduks',
            'nama' => 'string|min:3',
            'tempat_lahir' => 'string|min:5',
            'pekerjaan' => 'string|min:5'
          ]);
          $penduduk->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'perkawinan' => $request->perkawinan,
            'pekerjaan'=> $request->pekerjaan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kewarganegaraan' => $request->kewarganegaraan,
            'status' => $request->status
          ]);
        }

        return redirect()->route('penduduk')->with('success','Penduduk berhasil diubah');
    }


    public function destroy(Penduduk $penduduk)
    {
        $penduduk->update([
          'deleted_at' => true
          ] );
        return redirect()->route('penduduk')->with('success','Penduduk berhasil dihapus');
    }
}
