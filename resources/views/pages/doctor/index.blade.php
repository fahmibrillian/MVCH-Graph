@extends('layouts.layouts')

@section('title', 'All Doctors')

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="iq-card">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title col-sm-12 row">
                    <h4 class="card-title col-6">Doctors List</h4>
                </div>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/12.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Anna Mull</h4>
                   <p class="mb-0" >Cardiologists</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/13.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Paul Molive</h4>
                   <p class="mb-0" >Heart Surgeons</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/14.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Terry Aki</h4>
                   <p class="mb-0" >Medicine Specialists</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/15.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Poppa Cherry</h4>
                   <p class="mb-0" >Family Physicians</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/16.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Saul T. Balls</h4>
                   <p class="mb-0" >Gynaecology</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/17.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Hal Appeno </h4>
                   <p class="mb-0" >MD</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/18.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Polly Tech</h4>
                   <p class="mb-0" >Eye Special</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/12.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Pat Agonia</h4>
                   <p class="mb-0" >Therapy Special</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/13.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Barry Cade</h4>
                   <p class="mb-0" >Heart Surgeons</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/14.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr.Jimmy Changa</h4>
                   <p class="mb-0" >Cardiologists</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/15.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Sue Vaneer</h4>
                   <p class="mb-0" >Orthopedics Special</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/16.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Monty Carlo</h4>
                   <p class="mb-0" >Anesthesiologists</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/17.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Rick O'Shea</h4>
                   <p class="mb-0" >General</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/18.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Bunny Joy</h4>
                   <p class="mb-0" >Gynaecology</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/12.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Shonda Leer</h4>
                   <p class="mb-0" >Orthopedics Special</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80"  src="{{asset('assets')}}/images/user/13.jpg" alt="profile">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4> Dr. Ira Membrit</h4>
                   <p class="mb-0" >MD</p>
                   <a href="javascript:void();">www.demo.com</a>
                </div>
                <div class="iq-doc-description mt-2">
                   <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor non erat non gravida. In id ipsum consequat</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="#"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
                <a href="profile.html" class="btn btn-primary">View Profile</a>
             </div>
          </div>
       </div>

    </div>
 </div>
@endsection
