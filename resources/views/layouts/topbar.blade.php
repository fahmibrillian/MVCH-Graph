   <!-- TOP Nav Bar -->
   <div class="iq-top-navbar header-top-sticky">
       <div class="iq-navbar-custom">
           <div class="iq-sidebar-logo">
               <div class="top-logo">
                   <a href="index-2.html" class="logo">
                       <img src="{{ asset('assets') }}/images/logo.png" class="img-fluid" alt="">
                       <span>XRay</span>
                   </a>
               </div>
           </div>
           <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-search-bar">
                   <form action="#" class="searchbox">
                       <input type="text" class="text search-input" placeholder="Type here to search...">
                       <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                   </form>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse"
                   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                   aria-label="Toggle navigation">
                   <i class="ri-menu-3-line"></i>
               </button>
               <div class="iq-menu-bt align-self-center">
                   <div class="wrapper-menu">
                       <div class="main-circle"><i class="ri-more-fill"></i></div>
                       <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                   </div>
               </div>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto navbar-list">
                       <li class="nav-item">
                           <a class="search-toggle iq-waves-effect language-title" href="#"><img
                                   src="{{ asset('assets') }}/images/small/flag-01.png" alt="img-flaf"
                                   class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i
                                   class="ri-arrow-down-s-line"></i></a>
                           <div class="iq-sub-dropdown">
                               <a class="iq-sub-card" href="#"><img
                                       src="{{ asset('assets') }}/images/small/flag-02.png" alt="img-flaf"
                                       class="img-fluid mr-2" />French</a>
                               <a class="iq-sub-card" href="#"><img
                                       src="{{ asset('assets') }}/images/small/flag-03.png" alt="img-flaf"
                                       class="img-fluid mr-2" />Spanish</a>
                               <a class="iq-sub-card" href="#"><img
                                       src="{{ asset('assets') }}/images/small/flag-04.png" alt="img-flaf"
                                       class="img-fluid mr-2" />Italian</a>
                               <a class="iq-sub-card" href="#"><img
                                       src="{{ asset('assets') }}/images/small/flag-05.png" alt="img-flaf"
                                       class="img-fluid mr-2" />German</a>
                               <a class="iq-sub-card" href="#"><img
                                       src="{{ asset('assets') }}/images/small/flag-06.png" alt="img-flaf"
                                       class="img-fluid mr-2" />Japanese</a>

                           </div>
                       </li>
                       <li class="nav-item iq-full-screen">
                           <a href="#" class="iq-waves-effect" id="btnFullscreen"><i
                                   class="ri-fullscreen-line"></i></a>
                       </li>
                   </ul>
               </div>
               <ul class="navbar-list">
                   <li>
                       <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="{{ asset('assets') }}/images/user/1.jpg" class="img-fluid rounded mr-3"
                               alt="user">
                           <div class="caption">
                               <h6 class="mb-0 line-height">
                                   @if (Auth::user()->role == 'admin')
                                       {{ Auth::user()->staff->employee->person->Name }}
                                   @elseif(Auth::user()->role == 'nurse')
                                       {{ Auth::user()->nurse->employee->person->Name }}
                                   @elseif (Auth::user()->role == 'technician')
                                       {{ Auth::user()->technician->employee->person->Name }}
                                   @elseif(Auth::user()->role == 'physician')
                                       {{ Auth::user()->physician->person->Name }}
                                   @endif
                               </h6>
                               <span class="font-size-12">
                                   {{ Str::title(Auth::user()->role) }}
                               </span>
                           </div>
                       </a>
                       <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                               <div class="iq-card-body p-0 ">
                                   <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white line-height">Hello
                                           @if (Auth::user()->role == 'admin')
                                               {{ Auth::user()->staff->employee->person->Name }}
                                           @elseif(Auth::user()->role == 'receptionist')
                                               {{ Auth::user()->nurse->employee->person->Name }}
                                           @elseif (Auth::user()->role == 'technician')
                                               {{ Auth::user()->technician->employee->person->Name }}
                                           @elseif(Auth::user()->role == 'physician')
                                               {{ Auth::user()->physician->person->Name }}
                                           @endif
                                       </h5>
                                       <span
                                           class="text-white font-size-12">{{ Str::title(Auth::user()->role) }}</span>
                                   </div>
                                   <div class="d-inline-block w-100 text-center p-3">
                                       {{-- Fom Logout --}}
                                       <form action="{{ route('logout') }}" method="POST">
                                           @csrf
                                           <button type="submit" class="bg-primary iq-sign-btn" href="sign-in.html"
                                               role="button">Sign
                                               out<i class="ri-login-box-line ml-2"></i></button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </li>
               </ul>
           </nav>

       </div>
   </div>
   <!-- TOP Nav Bar END -->
