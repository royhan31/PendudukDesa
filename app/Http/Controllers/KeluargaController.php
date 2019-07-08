<?php

namespace App\Http\Controllers;

use App\Keluarga;
use Illuminate\Http\Request;
use App\Penduduk;
use DB;
class KeluargaController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index()
    {
        $keluargas = Keluarga::where('deleted_at', false)->orderBy('id','DESC')->get();
        return view('pages.keluarga.index', compact('keluargas'));
    }


    public function create()
    {
      $penduduks = Penduduk::where('deleted_at', false)->orderBy('id','DESC')->get();
      return view('pages.keluarga.tambah', compact('penduduks'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
          'no_kk' => 'string|min:16|max:16'
        ]);
        $nik = substr($request->penduduk,0,16);
        $penduduk = Penduduk::where('nik', $nik)->first();
        $keluarga = Keluarga::where('id_penduduk', $penduduk->id)->first();
        //$cek = Keluarga::where('no_kk', $request->no_kk)->where('hubungan_kelurga', 'Kepala Kelurga')->first();
        $data = Keluarga::where('no_kk', $request->no_kk)->where('hubungan_kelurga', $request->status_hubungan)->first();

        if($penduduk == null){
          return redirect()->back()->withInput($request->only('no_kk','penduduk','status_hubungan'))
                                  ->with('error','Penduduk tidak ditemukan');
        }
        // elseif ($cek == null) {
        //   return redirect()->back()->withInput($request->only('no_kk','penduduk','status_hubungan'))
        //                           ->with('errorPenduduk','Kartu keluarga harus meliliki kepala kelurga');
        // }
        elseif ($keluarga != null) {
          return redirect()->back()->withInput($request->only('no_kk','penduduk','status_hubungan'))
                                  ->with('errorPenduduk','Penduduk telah terdaftar dalam kartu keluarga');
        }elseif ($data != null && $data->hubungan_kelurga == 'Kepala Keluarga') {
          return redirect()->back()->withInput($request->only('no_kk','penduduk','status_hubungan'))
                                  ->with('errorKepalaKelurga','Kartu keluarga hanya dapat memiliki 1 kepala keluarga');
        }elseif ($data != null && $data->hubungan_kelurga == 'Ibu Rumah Tangga') {
          return redirect()->back()->withInput($request->only('no_kk','penduduk','status_hubungan'))
                                  ->with('errorIbu','Kartu keluarga hanya dapat memiliki 1 ibu rumah tangga');
        }elseif ($penduduk->perkawinan == 'Belum Menikah' && $request->status_hubungan == 'Kepala Keluarga') {
          return redirect()->back()->withInput($request->only('no_kk','penduduk','status_hubungan'))
                                  ->with('errorPerkawinan','Penduduk belum menikah');
        }
        elseif ($penduduk->perkawinan == 'Belum Menikah' && $request->status_hubungan == 'Ibu Rumah Tangga') {
          return redirect()->back()->withInput($request->only('no_kk','penduduk','status_hubungan'))
                                  ->with('errorPerkawinan','Penduduk belum menikah');
        }
        else {
            Keluarga::create([
              'no_kk' => $request->no_kk,
              'id_penduduk' => $penduduk->id,
              'hubungan_kelurga' => $request->status_hubungan
            ]);
        }
        return redirect()->route('keluarga')->with('success','data berhasil ditambahkan');
    }


    public function show(Keluarga $keluarga)
    {
        //$keluargas = DB::table('keluargas')->select('*')->where('no_kk', $keluarga->no_kk)->get();
        $keluargas = Keluarga::where('no_kk', $keluarga->no_kk)->get();
        return view('pages.keluarga.tampil', compact('keluarga','keluargas'));
    }


    public function edit(Keluarga $keluarga)
    {
        $penduduks = Penduduk::all();
        $nik = $keluarga->penduduk->nik.' / '.$keluarga->penduduk->nama;
        return view('pages.keluarga.edit', compact('keluarga','penduduks','nik'));
    }


    public function update(Request $request, Keluarga $keluarga)
    {
        //
    }


    public function destroy(Keluarga $keluarga)
    {
        $keluarga->delete();
        return redirect()->route('keluarga')->with('success','data berhasil dihapus');
    }
}
