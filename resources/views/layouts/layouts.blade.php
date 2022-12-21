<!doctype html>
<html lang="en">

   <!-- Mirrored from templates.iqonic.design/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2022 01:19:13 GMT -->
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title') | MVCH - Mountain View Community Hospital</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
      <!-- Full calendar -->
      <link href="{{asset('assets')}}/fullcalendar/core/main.css" rel='stylesheet' />
      <link href="{{asset('assets')}}/fullcalendar/daygrid/main.css" rel='stylesheet' />
      <link href="{{asset('assets')}}/fullcalendar/timegrid/main.css" rel='stylesheet' />
      <link href="{{asset('assets')}}/fullcalendar/list/main.css" rel='stylesheet' />
      <!-- Logo -->
      <link href="{{asset('assets')}}/images/logo.png" rel="shortcut icon" />

      <link rel="stylesheet" href="{{asset('assets')}}/css/flatpickr.min.css">

      {{-- datatable --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

      @stack('css')

   </head>
   <body class="sidebar-main-menu">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="{{url('home')}}">
                  <img src="{{asset('assets')}}/images/logo.png" class="img-fluid" alt="">
                  <span>MVCH</span>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-more-fill"></i></div>
                        <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            @include('layouts.sidebar')
         </div>

         <!-- Page Content  -->
         <div id="content-page" class="content-page">

         @include('layouts.topbar')


         @yield('content')
         <!-- Footer -->

         @include('layouts.footer')


      </div>

   </body>
</html>
