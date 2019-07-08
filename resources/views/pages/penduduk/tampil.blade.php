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
                <li class="breadcrumb-item active">Tampil
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
  <div class="content-body">
    <div class="row">
		<div class="col-12">
			<div id="accordionWrap3" role="tablist" aria-multiselectable="true">
				<div class="card collapse-icon accordion-icon-rotate">
					<div id="heading31" class="card-header bg-success">
						<a class="card-title lead white">Data {{$penduduk->nama}}</a>
					</div>
					<div aria-labelledby="" class=""
					 aria-expanded="true">
						<div class="card-content">
							<div class="card-body">
								<table>
                  <thead>
                    <td width="50%"><h4>NIK </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{$penduduk->nik}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4>Nama</h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{$penduduk->nama}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4>Jenis Kelamin </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{$penduduk->jenis_kelamin}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4>Tempat Lahir </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{$penduduk->tempat_lahir}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4>Tanggal Lahir </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{date('d F Y', strtotime($penduduk->tgl_lahir))}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4>Agama </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{$penduduk->agama}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4> Pendidikan </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{$penduduk->pendidikan}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4> Status Perkawinan </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{$penduduk->perkawinan}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4> Pekerjaan </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{$penduduk->pekerjaan}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4> Alamat </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>RT {{$penduduk->rt}} / RW {{$penduduk->rw}}</h4></td>
                  </thead class="mb-3">
                  <thead>
                    <td width="50%"><h4> Kewarganegaraan </h4></td>
                    <td width="5%"><h4> : </h4></td>
                    <td><h4>{{$penduduk->kewarganegaraan}}</h4></td>
                  </thead class="mb-3">
                </table>
							</div>
              <div class="card-footer">
                <div class="text-right">
                  <button type="button" onclick="window.location='{{route("penduduk")}}'" class="btn btn-primary">Kembali</button>
                </div>
              </div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </div>

  </div>
</div>

@endsection
