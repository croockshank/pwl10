<!DOCTYPE html>
<html lang="en">
<head>

     <title>Digital Trend HTML Template</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg">
          <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fa fa-line-chart"></i>
                    Digital Trend
               </a>

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">

                         <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                              @if (Route::has('login'))
                              @auth
                              <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline"
                                   style="color:white">Home</a>
                              @else
                              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"
                                   style="color:white">Log in</a>

                              @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"
                                   style="color:white">Register</a>
                              @endif
                              @endauth
                              @endif
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="{{ url('/article') }}" class="text-sm text-gray-700 underline"
                                   style="color:white">Berita</a>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="{{ url('/kontak') }}" class="text-sm text-gray-700 underline"
                                   style="color:white">Kontak</a>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="{{ url('/tentang') }}" class="text-sm text-gray-700 underline"
                                   style="color:white">Tentang Kami</a>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="{{ url('/product') }}" class="text-sm text-gray-700 underline"
                                   style="color:white">Product</a>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="{{ url('/program') }}" class="text-sm text-gray-700 underline"
                                   style="color:white">Program</a>
                         </div>
                    </ul>
               </div>
          </div>
     </nav>

    

     @yield('contents')

    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              082231521830
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                aliyagisanda@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Studio</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Kediri,Jawa Timur
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2020 Your Company
            <br>
            <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a></p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>