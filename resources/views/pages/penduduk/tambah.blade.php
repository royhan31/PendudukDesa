@extends('templates.admin.default')

@section('content')
<div class="content-header row">
  <div class="content-header-dark bg-img col-12">
      <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <h3 class="content-header-title white">Data Penduduk</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('penduduk')}}">Penduduk</a>
                </li>
                <li class="breadcrumb-item active">Edit
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-3 col-12">
        </div>
      </div>
    </div>
  </div>
<div class="content-wrapper">
  <div class="content-body"><!-- Basic form layout section start -->

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-content collpase show">
	       <div class="card-body">
          <form class="form" method="post" action="{{route('penduduk.simpan')}}">
            @csrf
            <div class="form-body">
              <h4 class="form-section"><i class="la la-user"></i>Tambah Penduduk</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="userinput1">NIK</label>
                    <input type="text" onkeypress="return hanyaAngka(event)" value="{{old('nik')}}" class="form-control @error('nik') border-danger is-invalid @enderror" placeholder="Masukan NIK" name="nik" autofocus>
                    @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>@if($message == 'validation.min.string')
                              NIK tidak valid
                              @else
                              NIK sudah terdaftar
                              @endif
                            </strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama') border-danger is-invalid @enderror" value="{{old('nama')}}" placeholder="Masukan Nama" name="nama" autofocus>
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>Nama Minimal 3 karakter</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="input-group">
                    <div class="d-inline-block custom-control custom-radio mr-1">
												<input type="radio" name="jenis_kelamin" class="custom-control-input" value="Laki-laki" id="Laki-laki" {{(old('jenis_kelamin') == 'Laki-laki') ? 'checked' : ''}}>
												<label class="custom-control-label" for="Laki-laki">Laki-laki</label>
											</div>
											<div class="d-inline-block custom-control custom-radio">
												<input type="radio" name="jenis_kelamin" class="custom-control-input" value="Perempuan" id="Perempuan" {{(old('jenis_kelamin') == 'Perempuan') ? 'checked' : ''}}>
												<label class="custom-control-label" for="Perempuan">Perempuan</label>
											</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempat_lahir') border-danger is-invalid @enderror" value="{{old('tempat_lahir')}}" placeholder="Masukan Tempat Lahir" name="tempat_lahir">
                    @error('tempat_lahir')
                        <span class="invalid-feedback" role="alert">
                            <strong>Tempat Lahir Terlalu Pendek</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" value="{{old('tgl_lahir')}}" class="form-control border-primary" name="tgl_lahir">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="form-control">
  											<option value="Islam" {{(old('agama') == 'Islam') ? 'selected' : ''}}>Islam</option>
  											<option value="Kristen" {{(old('agama') == 'Kristen') ? 'selected' : ''}}>Kristen</option>
  											<option value="Hindu" {{(old('agama') == 'Hindu') ? 'selected' : ''}}>Hindu</option>
  											<option value="Katolik" {{(old('agama') == 'Katolik') ? 'selected' : ''}}>Katolik</option>
  										</select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Pendidikan</label>
                    <select name="pendidikan" class="form-control">
  											<option value="SD" {{(old('pendidikan') == 'SD') ? 'selected' : ''}}>SD</option>
  											<option value="SMP" {{(old('pendidikan') == 'SMP') ? 'selected' : ''}}>SMP</option>
  											<option value="SMA" {{(old('pendidikan') == 'SMA') ? 'selected' : ''}}>SMA</option>
  											<option value="S1" {{(old('pendidikan') == 'S1') ? 'selected' : ''}}>S1</option>
                        <option value="S2" {{(old('pendidikan') == 'S2') ? 'selected' : ''}}>S2</option>
                        <option value="S3" {{(old('pendidikan') == 'S3') ? 'selected' : ''}}>S3</option>
  										</select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" class="form-control @error('pekerjaan') border-danger is-invalid @enderror" value="{{old('pekerjaan')}}" placeholder="Masukan Pekerjaan" name="pekerjaan">
                    @error('pekerjaan')
                        <span class="invalid-feedback" role="alert">
                            <strong>Pekerjaan Terlalu Pendek</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Status Perkawinan</label>
                    <div class="input-group">
                    <div class="d-inline-block custom-control custom-radio mr-1">
                        <input type="radio" name="perkawinan" class="custom-control-input" value="Menikah" id="Menikah" {{(old('perkawinan') == 'Menikah') ? 'checked' : ''}}>
                        <label class="custom-control-label" for="Menikah">Menikah</label>
                      </div>
                      <div class="d-inline-block custom-control custom-radio">
                        <input type="radio" name="perkawinan" class="custom-control-input" value="Belum Menikah" id="Belum" {{(old('perkawinan') == 'Belum Menikah') ? 'checked' : ''}}>
                        <label class="custom-control-label" for="Belum">Belum Menikah</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>RT</label>
                    <select name="rt" class="form-control">
  											<option value="01" {{(old('rt') == '01') ? 'selected' : ''}}>01</option>
  											<option value="02" {{(old('rt') == '02') ? 'selected' : ''}}>02</option>
  											<option value="03" {{(old('rt') == '03') ? 'selected' : ''}}>03</option>
  											<option value="04" {{(old('rt') == '04') ? 'selected' : ''}}>04</option>
                        <option value="05" {{(old('rt') == '05') ? 'selected' : ''}}>05</option>
  										</select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>RW</label>
                    <select name="rw" class="form-control">
                        <option value="01" {{(old('rw') == '01') ? 'selected' : ''}}>01</option>
                        <option value="02" {{(old('rw') == '02') ? 'selected' : ''}}>02</option>
                        <option value="03" {{(old('rw') == '03') ? 'selected' : ''}}>03</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Kewarganegaraan</label>
                    <div class="input-group">
                    <div class="d-inline-block custom-control custom-radio mr-1">
                        <input type="radio" name="kewarganegaraan" class="custom-control-input" value="WNI" id="WNI" {{(old('kewarganegaraan') == 'WNI') ? 'checked' : ''}}>
                        <label class="custom-control-label" for="WNI">WNI</label>
                      </div>
                      <div class="d-inline-block custom-control custom-radio">
                        <input type="radio" name="kewarganegaraan" class="custom-control-input" value="WNA" id="WNA" {{(old('kewarganegaraan') == 'WNA') ? 'checked' : ''}}>
                        <label class="custom-control-label" for="WNA">WNA</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="form-actions">
              <button type="button" onclick="window.location='{{route("penduduk")}}'" class="btn btn-warning mr-1">
                <i class="ft-x"></i> Kembali
              </button>
              <button type="submit" class="btn btn-primary">
                <i class="la la-check-square-o"></i> Simpan
              </button>
            </div>
          </form>
        </div>
            </div>
	        </div>
	    </div>
	</div>

    </div>
  </div>
@endsection
