<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/xray/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2022 01:20:10 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>MVCH - Mountain View Community Hospital</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="{{asset('assets')}}/images/logo-white.png" class="img-fluid" alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="{{asset('assets')}}/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets')}}/images/login/2.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets')}}/images/login/3.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign in</h1>
                            <p>Enter your email address and password to access system.</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <a href="#" class="float-right">Forgot password?</a>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    {{-- <button type="submit" class="btn btn-primary float-right">Sign in</button> --}}
                                    {{-- Bypass login --}}
                                    <a href="{{route('home')}}" class="btn btn-primary float-right">Sign in</a>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="#">Sign up</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset('assets')}}/js/jquery.min.js"></script>
      <script src="{{asset('assets')}}/js/popper.min.js"></script>
      <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('assets')}}/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('assets')}}/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('assets')}}/js/waypoints.min.js"></script>
      <script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('assets')}}/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('assets')}}/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('assets')}}/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('assets')}}/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('assets')}}/js/smooth-scrollbar.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('assets')}}/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('assets')}}/js/custom.js"></script>
   </body>

<!-- Mirrored from templates.iqonic.design/xray/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2022 01:20:12 GMT -->
</html>
