
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  @include('templates.admin.partials._head')
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns  product-detail-page fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- BEGIN: Header-->
    @include('templates.admin.partials._nav')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('templates.admin.partials._sidebar')
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
          @yield('content')
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    @include('templates.admin.partials._script')
  </body>
  <!-- END: Body-->
</html>
