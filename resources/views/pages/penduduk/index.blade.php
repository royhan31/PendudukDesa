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
                <li class="breadcrumb-item active">Penduduk
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
  @if(Session::has('success'))
  <div class="row">
    <div class="col">
      <div class="alert alert-icon-left alert-arrow-left alert-success alert-dismissible mb-2" role="alert">
				<span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>{{Session::get('success')}}</strong>
			</div>
    </div>
  </div>
  @endif

  <div class="content-header row mb-1">
    <div class="content-header-left col-md-6 col-12 mb-2">
    </div>
    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <button class="btn btn-info" type="button" onclick="window.location='{{route("penduduk.tambah")}}'">
          <i class="ft-plus icon-left"></i> Tambah</button>
      </div>
    </div>
  </div>
<div class="content-body">
<section id="dom">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Data Penduduk</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered material-table">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>NIK</th>
                                      <th>Nama</th>
                                      <th>Jenis Kelamin</th>
                                      <th>Umur</th>
                                      <th>Perkawinan</th>
                                      <th>Status</th>
                                      <th width="12%">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @php($no = 1)
                                @foreach($penduduks as $penduduk)
                                  <tr>
                                      <td>{{$no}}</td>
                                      <td>{{$penduduk->nik}}</td>
                                      <td>{{$penduduk->nama}}</td>
                                      <td>{{$penduduk->jenis_kelamin}}</td>
                                      <td>{{$penduduk->umur()}} th</td>
                                      <td>{{$penduduk->perkawinan}}</td>
                                      <td>@if($penduduk->status == 'Hidup')
                                        <span class="badge badge-success">Hidup</span>
                                        @elseif($penduduk->status == 'Meninggal')
                                        <span class="badge badge-danger">Meninggal</span>
                                        @else
                                        <span class="badge badge-warning">Pindah</span>
                                        @endif
                                      </td>
                                      <td>
                                        <a href="{{route('penduduk.tampil', $penduduk)}}"> <i class="la la-eye"></i> </a>
                                        <a href="{{route('penduduk.edit', $penduduk)}}"> <i class="la la-pencil"></i> </a>
                                        <a href="" data-toggle="modal" data-target="#hapus{{$penduduk->id}}"> <i class="la la-trash"></i> </a>
                                      </td>
                                  </tr>
                                  @php($no++)
                                  <!-- modal hapus -->

                              <div class="modal fade text-left" id="hapus{{$penduduk->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                   aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="myModalLabel1">Hapus Penduduk</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <h5>Apakah Anda akan menghapus penduduk dengan nama <strong>{{$penduduk->nama}}</strong></h5>
                                        </div>
                                        <div class="modal-footer">
                                          <form class="" action="{{route('penduduk.hapus', $penduduk)}}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
</div>
</div>
@endsection
