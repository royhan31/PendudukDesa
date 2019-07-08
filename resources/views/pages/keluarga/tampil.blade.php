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
    <div class="content-body"><!-- Expansion Panels start -->
      <section id="material-expansion-panels">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h3 class="text-center"><strong>Kartu Kelurga</strong></h3>
                <h3 class="text-center"><strong>No . {{$keluarga->no_kk}}</strong></h3>

                <p class="card-text text-center"></p>
              </div>

              <div class="list-group list-group-flush" id="accordionTwo">
                @foreach($keluargas as $keluarga)
                <div class="expansion-panel list-group-item">
                  <a aria-controls="collapseFour" aria-expanded="false" class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#penduduk{{$keluarga->penduduk->id}}" id="headingFour{{$keluarga->penduduk->id}}">
                    {{$keluarga->penduduk->nama}}
                    <div class="expansion-panel-icon ml-3 text-black-secondary">
                      <i class="collapsed-show material-icons">keyboard_arrow_down</i>
                      <i class="collapsed-hide material-icons">keyboard_arrow_up</i>
                    </div>
                  </a>
                  <div aria-labelledby="headingFour{{$keluarga->penduduk->id}}" class="collapse" data-parent="#accordionTwo" id="penduduk{{$keluarga->penduduk->id}}">
                    <div class="expansion-panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        </section>
    </div>
  </div>
  @endsection
