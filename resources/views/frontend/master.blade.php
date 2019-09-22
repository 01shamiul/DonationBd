<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tarique">
    <title>Donation Bangladesh</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/lib/')}}/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('/lib/')}}/css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{asset('/lib/')}}/css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{asset('/lib/')}}/css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('/lib/')}}/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/lib/')}}/css/style.css">
</head>

@section('libcss')
@show

<body>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">contact@donationbd.org</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>PHONE: <span>+8801780784397 / +8801870404729</span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="{{url('/donate')}}">Donate Now</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="/" rel="home"><img class="d-block" src="{{asset('/lib/')}}/images/donation-011.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="/">Home</a></li>
                                <li><a href="{{url('/about')}}">About us</a></li>
                                <li><a href="{{url('/causes')}}">Causes</a></li>
                                <li><a href="{{url('/portfolio')}}">Gallery</a></li>
                                <li><a href="{{url('/news')}}">News</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>

<li>
@if(Auth::check())

@if(Auth::user()->type=="admin")
<a href=""><i class="fa fa-user"></i>Account</a>
@else
<a href=""><i class="fa fa-user"></i>{{Auth::user()->name}}</a>
@endif

@else
<a href=""><i class="fa fa-user"></i>Account</a>
@endif
                           </li>
                           <li>
@if(Auth::check())
<a href="{{url('/logout')}}"   onclick="event.preventDefault();
 document.getElementById('logout-form').submit();"    href="{{ route('logout') }}"><i class="fa fa-lock"></i> Logout</a>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
     @csrf
   </form>  
@else
<a href="{{url('/login')}}"><i class="fa fa-lock"></i> Login</a></li>

                  <li><a href="{{url('/register')}}">Sign Up</a></li>
                        </ul>
                      
                        <div class="search_box pull-right">
                            <form action="{{url('/search')}}" method="post">
                                @csrf
                            <input type="text" name="search" placeholder="Search"/>
                            <button type="submit">Search</button>
                            </form>
@endif                           
                            
                        </div>
                    
                            
                          </nav> 
                            
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->
  
@section('homeContent')
@show


    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="{{asset('/lib/')}}/images/donation-011.png" alt=""></a></h2>

                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit. Mauris temp us vestib ulum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.Lorem ipsum dolo.</p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="#">Privacy Polticy</a></li>
                            <li><a href="#">Become  a Volunteer</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">September 6, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">September 6, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">September 6, 2019</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+88 01780 784397</span></li>
                                <li><i class="fa fa-envelope"></i><span>office@donationbd.org</span></li>
                                <li><i class="fa fa-map-marker"></i><span>E-7,E-Block, Zakir Hossain Road, Mohammadpur, Dhaka-1207. </span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script><p> All rights reserved | This template is made with  by <a href="https://bshamiul.ml" target="_blank">t-virus</a></p></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v4.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107789277280025"
  theme_color="#fa3c4c">
      </div>

    <script src="{{asset('/lib/')}}/js/jquery.js"></script>
    <script src="{{asset('/lib/')}}/js/jquery.collapsible.min.js"></script>
    <script src="{{asset('/lib/')}}/js/swiper.min.js"></script>
    <script src="{{asset('/lib/')}}/js/jquery.countdown.min.js"></script>
    <script src="{{asset('/lib/')}}/js/circle-progress.min.js"></script>
    <script src="{{asset('/lib/')}}/js/jquery.countTo.min.js"></script>
    <script src="{{asset('/lib/')}}/js/jquery.barfiller.js"></script> 

@section('libjs')
@show 

    <script src="{{asset('/lib/')}}/js/custom.js"></script>




</body>
</html>