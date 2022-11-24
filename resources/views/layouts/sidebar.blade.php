<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
       <ul id="iq-sidebar-toggle" class="iq-menu">
          <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
          <li class="active">
             <a href="{{url('doctor-dashboard')}}" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Doctor Dashboard</span></a>
          </li>
          <li>
            <a href="{{url('hospital-dashboard')}}" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>Hospital Dashboard</span></a>
          </li>
          <li>
             <a href="{{url('patient-dashboard')}}" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Patient Dashboard</span></a>
          </li>
          <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>

          <li>
             <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li><a href="{{url('doctor')}}"><i class="ri-file-list-fill"></i>All Doctors</a></li>
                <li><a href="{{url('doctor/create')}}"><i class="ri-user-add-fill"></i> Add Doctor</a></li>
                {{-- <li><a href="profile.html"><i class="ri-profile-fill"></i>Doctor Profile</a></li>
                <li><a href="profile-edit.html"><i class="ri-file-edit-fill"></i> Edit Doctor</a></li> --}}
             </ul>
          </li>
       </ul>
    </nav>
    <div class="p-3"></div>
 </div>
