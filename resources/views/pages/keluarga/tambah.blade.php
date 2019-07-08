@extends('templates.admin.default')
@section('content')
<div class="content-header row">
  <div class="content-header-dark bg-img col-12">
      <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <h3 class="content-header-title white">Data Kartu Keluarga</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('keluarga')}}">Kartu Keluarga</a>
                </li>
                <li class="breadcrumb-item active">Tambah
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
            <form class="form" method="post" action="{{route('keluarga.simpan')}}">
              @csrf
              <div class="form-body">
                <h4 class="form-section"><i class="la la-user"></i>Tambah Kartu Keluarga</h4>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>No KK</label>
                      <input type="text" maxlength="16" onkeypress="return hanyaAngka(event)" class="form-control @error('no_kk') border-danger is-invalid @enderror" value="{{old('no_kk')}}" placeholder="Masukan No KK" name="no_kk" autofocus>
                      @error('no_kk')
                          <span class="invalid-feedback" role="alert">
                            <strong>@if($message == 'validation.min.string')
                              No KK tidak valid
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
                      <label for="userinput1">Cari Penduduk</label>
                      <input type="text" name="penduduk" value="{{old('penduduk')}}" list="penduduk"
                       class="form-control @if(Session::has('error')) border-danger is-invalid
                       @elseif(Session::has('errorPenduduk'))
                       border-danger is-invalid
                       @elseif(Session::has('errorPerkawinan')) border-danger is-invalid @endif" placeholder="Masukan penduduk" />
                      <datalist id="penduduk">
                        @foreach($penduduks as $penduduk)
                        <option value="{{$penduduk->nik}} / {{$penduduk->nama}}">
                        @endforeach
                      </datalist>
                      @if(Session::has('error'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{Session::get('error')}}</strong>
                          </span>
                      @endif
                      @if(Session::has('errorPenduduk'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{Session::get('errorPenduduk')}}</strong>
                          </span>
                      @endif
                      @if(Session::has('errorPerkawinan'))
                          <span class="invalid-feedback" role="alert">
                            <strong>{{Session::get('errorPerkawinan')}}</strong>
                          </span>
                      @endif

                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="form-group">
                      <label>Status hubungan dalam keluarga</label>
                      <div class="input-group">
                      <div class="d-inline-block custom-control custom-radio mr-1">
  												<input type="radio" name="status_hubungan" class="custom-control-input @if(Session::has('errorKepalaKelurga'))is-invalid @endif" value="Kepala Keluarga" id="kepala_keluarga" {{(old('status_hubungan') == 'Kepala Keluarga') ? 'checked' : ''}} required>
  												<label class="custom-control-label" for="kepala_keluarga">Kepala Keluarga</label>
  											</div>
  											<div class="d-inline-block custom-control custom-radio mr-1">
  												<input type="radio" name="status_hubungan" class="custom-control-input @if(Session::has('erroribu'))is-invalid @endif" value="Ibu Rumah Tangga" id="ibu" {{(old('status_hubungan') == 'Ibu Rumah Tangga') ? 'checked' : ''}} required>
  												<label class="custom-control-label" for="ibu">Ibu Rumah Tangga</label>
  											</div>
                        <div class="d-inline-block custom-control custom-radio">
                            <input type="radio" name="status_hubungan" class="custom-control-input" value="Anak" id="anak" {{(old('status_hubungan') == 'Anak') ? 'checked' : ''}} required>
                            <label class="custom-control-label" for="anak">Anak</label>
                          </div>
                      </div>
                    </div>
                  @if(Session::has('errorKepalaKelurga'))
                  <span style="color:red" role="alert">
                    <strong>{{Session::get('errorKepalaKelurga')}}</strong>
                  </span>
                  @endif
                  @if(Session::has('errorIbu'))
                  <span style="color:red" role="alert">
                    <strong>{{Session::get('errorIbu')}}</strong>
                  </span>
                  @endif
                  </div>
                </div>

              </div>

              <div class="form-actions">
                <button type="button" onclick="window.location='{{route("keluarga")}}'" class="btn btn-warning mr-1">
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
