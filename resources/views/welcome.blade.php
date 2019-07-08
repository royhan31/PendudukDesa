
<!DOCTYPE html>
<html class="no-js">
@include('templates.landing._head')
<body>

  <!-- Preloader -->
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>
    </div><!--preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home">
                    <!-- <img src="images/logo.png" alt=""> -->
                    Desa Tegalsari
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>Profil</a>
                    </li>
                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Informasi</a>
                    </li>
                    <!-- <li><a href="#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Portfolio</a>
                    </li>
                    <li><a href="#team" data-section="#team" class="menu-smooth-scroll"><i class="fa fa-users fa-fw"></i>Team</a>
                    </li>
                    <li><a href="#testimonial" data-section="#testimonial" class="menu-smooth-scroll"><i class="fa fa-comments fa-fw"></i>Testimonial</a>
                    </li> -->
                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Kontak</a>
                    </li>
                  </ul>
                  <!-- <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                    <li>Home</li>
                    <li><a href="blog.html">All Blog</a>
                    </li>
                    <li><a href="blog-with-sidebar.html">Blog with Sidebar</a>
                    </li>
                    <li><a href="single.html">Single Blog</a>
                    </li>
                  </ul> -->

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-inner">
                  <div class="center-align home-content">
                    <h1 class="home-title"><span>Desa Tegalsari</span></h1>
                    <h2 class="home-subtitle">Data Penduduk Tegalsari</h2>
                    <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Kontak Kami <i class="mdi-content-send left"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
          <div class="container">
            <div class="row">
              <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
          </div>
          <!-- .container end -->
        </div>
      </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">

            <div class="col-sm-12 col-md-4">
              <div class="person-about">
                <h3 class="about-subtitle">Sejarah Desa</h3>
                <p>Hello, I’m a UI/UX Designer &amp; Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. <br />
                And scrambled it to make a type specimen book. It has survived not only five centuries</p>
                <a class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi-content-archive left"></i> Download Resume</a>
              </div>
            </div>
            <!-- about me description -->

            <div class="col-sm-6 col-md-4">
              <div class="person-img wow fadeIn">
                <img class="z-depth-1" src="images/person.png" alt="">
              </div>
            </div>
            <!-- about me image -->

            <div class="col-sm-6 col-md-4">
              <div class="person-info">
                <h3 class="about-subtitle">Info Personal</h3>
                <h5><span>Nama :</span> Wahyuningsih</h5>
                <h5><span>Age :</span> 25 Years</h5>
                <h5><span>Phone :</span> +0123456789</h5>
                <h5><span>Email :</span> email@domain.com</h5>
                <h5><span>Address :</span> Dhaka, Bangladesh</h5>
              </div>

              <div class="about-social">
                <ul>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                   </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- about me info -->

          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
      <section id="skill" class="root-sec white skill-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="clearfix skill-inner">
              <div class="col-sm-12 col-md-3">
                <div class="skill-left">
                  <h2 class="title">Data Penduduk</h2>
                  <p class="regular-text">Man behind the gun, any sophisticated weapons. Human remains that taking the role. We are experienced in utilizing all resources.</p>
                </div>
              </div>

              <!-- skills container -->
              <div class="col-sm-12 col-md-6 col-md-offset-1">
                <div class="skill-right">
                  <div id="skillSlider" class="clearfix skill-graph">

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">Photoshop</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="60%">
                            <div class="skill-visiable">
                              <span class="skill-title">JavaScript</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">60%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="85%">
                            <div class="skill-visiable">
                              <span class="skill-title">Illustrator</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">85%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->


                    <!-- single skill -->

                    <!-- /single skill-->

                    <!-- single skill -->
                  </div>
                </div>
              </div>
              <!-- /skills container -->
            </div>
          </div>
        </div>
      </div>
        <!-- .container end -->
      </section>
    </section>
    <!-- #resume Section end -->

    <!-- Portfolio Section start -->

    <!-- Team Section end -->


    <!-- Funfacts Section end -->
    <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-editor-insert-emoticon"></i>
                      <span class="num countNumb">150</span>
                    </div>
                    <div class="context">Happy clients</div>
                  </div>
                </div>
              </div>
            </div> <!-- ./single fun fact box -->
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-action-wallet-travel"></i>
                      <span class="num countNumb">230</span>
                    </div>
                    <div class="context">Project Completed</div>
                  </div>
                </div>
              </div>
            </div> <!-- ./single fun fact box -->
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-action-wallet-giftcard"></i>
                      <span class="num countNumb">79</span>
                    </div>
                    <div class="context">Award Won</div>
                  </div>
                </div>
              </div>
            </div> <!-- ./single fun fact box -->
          </div>
        </div>

      </div>  <!-- .container end -->
    </div>
    </section>
    <!-- #funfacts Section end -->

    <!-- Testimonial Section end -->


    <!-- Blog Section end -->
    <!-- <section id="blog" class="scroll-section root-sec grey lighten-5 padd-tb-120 blog-wrap">
      <div class="container">
        <div class="row">
          <div class="blog-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head blog-text">
                  <div class="col-sm-10">
                    <h2 class="title">Blog</h2>
                    <p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
                  </div>
                </div>
                <div class="clearfix card-element-wrapper" id="blog-posts">
                  <article class="col-sm-6 col-md-4 single-card-box single-post">
                    <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                      <div class="card-image">
                        <div class="card-img-wrap">
                          <div class="blog-post-thumb waves-effect waves-block waves-light">
                            <a href="single.html"><img class="activator" src="http://placehold.it/350x200" alt="">
                            </a>
                          </div>
                          <div class="post-body">
                            <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Awesome Post Title</h2></a>
                            <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix card-content">
                        <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">15</span></a>
                        <a href="single.html" class="brand-text right waves-effect">Read More</a>
                      </div>
                    </div>
                  </article> <!-- ./single blog post end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container -->
    </section>
    <!-- #blog Section end --> -->

    <!-- Contact Section end -->
    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head contact-text">
                  <div class="col-sm-12">
                    <h2 class="title">Kontak</h2>
                    <p class="regular-text"></p>
                    <!-- <ul class="clearfix contact-info">
                      <li><a href="">+880 1234 567890</a>
                      </li>
                      <li><a href="">support@website.net</a>
                      </li>
                      <li><a href="">www.website.net</a>
                      </li>
                    </ul> -->
                  </div>
                </div> <!-- contact text end -->

                <div class="clearfix contact-form">

                <!-- Map Start -->
                  <div class="col-sm-7">
                    <div class="map-wrapper">
                      <div id="map"></div>
                    </div>
                  </div> <!-- Map end -->

                <!-- Contact Form start -->

                  </div> <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <div class="right copyright">
                <p>Penduduk Desa &copy; Tegal Sari</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->


  <!-- JavaScripts -->
  @include('templates.landing._script')
</body>

</html>
