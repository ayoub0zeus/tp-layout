<!DOCTYPE html>
<html lang="en">
<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--====== Title ======-->
  <title>@yield('title','layout') </title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg" />

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="assets/css/lineicons.css" />

  <!--====== Tiny Slider css ======-->
  <link rel="stylesheet" href="assets/css/tiny-slider.css" />

  <!--====== gLightBox css ======-->
  <link rel="stylesheet" href="assets/css/glightbox.min.css" />

  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <!--====== NAVBAR  START ======-->
  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
              <img src="assets/images/white-logo.svg" alt="Logo" />
            </a>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="page-scroll active" href="{{ route('home') }}">Home</a>
              </li>
              
                <li class="nav-item">
                  <a class="page-scroll" href="{{ route('service') }}">Services</a>
                </li>

                <li class="nav-item">
                  <a class="page-scroll" href="{{ route('price') }}">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="{{ route('more') }}">layout</a>
                </li>
              </ul>
            </div>

           
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>
  <!--====== NAVBAR T ENDS ======-->

  @yield('content')

  <!--  Footer Start -->
  <footer class="footer-area footer-eleven">
    <!-- Start Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-about">
                <div class="logo">
                  <a href="index.html">
                    <img src="assets/images/logo.svg" alt="#" class="img-fluid" />
                  </a>
                </div>
                <p>
                  Making the world a better place through constructing elegant
                  hierarchies.
                </p>
                <p class="copyright-text">
                  <span>© 2024 Ayro UI.</span>Designed and Developed by
                  <a href="javascript:void(0)" rel="nofollow"> Ayro UI </a>
                </p>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-link">
                <h5>Solutions</h5>
                <ul>
                  <li><a href="javascript:void(0)">Marketing</a></li>
                  <li><a href="javascript:void(0)">Analytics</a></li>
                  <li><a href="javascript:void(0)">Commerce</a></li>
                  <li><a href="javascript:void(0)">Insights</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-link">
                <h5>Support</h5>
                <ul>
                  <li><a href="javascript:void(0)">Pricing</a></li>
                  <li><a href="javascript:void(0)">Documentation</a></li>
                  <li><a href="javascript:void(0)">Guides</a></li>
                  <li><a href="javascript:void(0)">API Status</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget newsletter">
                <h5>Subscribe</h5>
                <p>Subscribe to our newsletter for the latest updates</p>
                <form action="#" method="get" target="_blank" class="newsletter-form">
                  <input name="EMAIL" placeholder="Email address" required="required" type="email" />
                  <div class="button">
                    <button class="sub-btn">
                      <i class="lni lni-envelope"></i>
                    </button>
                  </div>
                </form>
              </div>
              <!-- End Single Widget -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Footer Top -->
  </footer>
  <!--  Footer End-->
</body>

</html>