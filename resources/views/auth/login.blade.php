<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  @include('templates.admin.partials._head')
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-header row">
      </div>
      <div class="content-wrapper">
        <div class="content-body">
          <section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <!-- <img src="{{ asset('assets/admin/app-assets/images/logo/logo-dark.png')}}" alt="branding logo"> -->
                        <h2> Admin Login </h2>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" action="{{route('login')}}" method="POST" novalidate>
                          @csrf
                            <fieldset class="form-group position-relative has-icon-left">
                                <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{old('username')}}" required>
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    @include('templates.admin.partials._script')

  </body>
  <!-- END: Body-->
</html>
