    <div class="main-menu material-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="user-profile">
        <div class="user-info text-center pb-2"><img class="user-img img-fluid rounded-circle w-25 mt-2" src="{{ asset('assets/admin/app-assets/images/portrait/medium/avatar-m-1.png')}}" alt=""/>
          <div class="name-wrapper d-block dropdown mt-1"><span class="user-name">{{Auth::user()->name}}</span>
            <div class="text-light">Perangkat Desa</div>
          </div>
        </div>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" {{ (request()->is('beranda')) ? 'active' : 'nav-item'}}">
            <a href="{{route('home')}}">
            <i class="material-icons">video_label</i>
            <span class="menu-title" data-i18n="">Beranda</span>
          </a>
          </li>
          <!-- <li class="">
            <a href="">
            <i class="material-icons">home</i>
            <span class="menu-title" data-i18n="">Data Desa</span>
          </a>
          <ul class="menu-content">
              <li class="">
                <a class="menu-item" href="material-component-buttons.html">
                  <i class="material-icons">supervisor_account</i>
                  <span data-i18n="">Rt/Rw</span>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="">
            <a href="">
            <i class="material-icons">accessibility_new</i>
            <span class="menu-title" data-i18n="">Data Penduduk</span>
          </a>
          <ul class="menu-content">
              <li class="@if (request()->is('penduduk') || request()->is('penduduk/tambah') || request()->is('penduduk/edit/*') || request()->is('penduduk/tampil/*'))
                 active
                 @endif">
                <a class="menu-item" href="{{route('penduduk')}}">
                  <i class="material-icons">person</i>
                  <span data-i18n="">Penduduk</span>
                </a>
              </li>
              <li class="@if (request()->is('keluarga'))
                 active
                 @endif">
                <a class="menu-item" href="{{route('keluarga')}}">
                  <i class="material-icons">people</i>
                  <span data-i18n="">Kartu Keluarga</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
