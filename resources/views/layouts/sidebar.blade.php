<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
            @if (Auth::user()->role == 'physician' || Auth::user()->role == 'admin' || Auth::user()->role == 'staff')
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                <li class="{{ request()->is('doctor-dashboard') ? ' active' : '' }}">
                    <a href="{{ url('doctor-dashboard') }}" class="iq-waves-effect"><i
                            class="ri-hospital-fill"></i><span>Doctor Dashboard</span></a>
                </li>
            @endif
            @if (Auth::user()->role == 'staff' || Auth::user()->role == 'admin')
                <li class="{{ request()->is('hospital-dashboard') ? ' active' : '' }}">
                    <a href="{{ url('hospital-dashboard') }}" class="iq-waves-effect"><i
                            class="ri-home-8-fill"></i><span>Hospital Dashboard</span></a>
                </li>
            @endif

            <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>

            @if (Auth::user()->role == 'staff' || Auth::user()->role == 'admin')
                <li class="{{ request()->is('doctor', 'doctor/create') ? ' active' : '' }}">
                    <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ url('doctor') }}"><i class="ri-group-fill"></i>List Doctors</a></li>
                        <li><a href="{{ url('doctor/create') }}"><i class="ri-user-add-fill"></i>Add Doctor</a></li>
                        {{-- <li><a href="profile.html"><i class="ri-profile-fill"></i>Doctor Profile</a></li>
               <li><a href="profile-edit.html"><i class="ri-file-edit-fill"></i> Edit Doctor</a></li> --}}
                    </ul>
                </li>
            @endif

            @if (Auth::user()->role == 'staff' || Auth::user()->role == 'admin')
                <li class="{{ request()->is('employee', 'employee/create') ? ' active' : '' }}">
                    <a href="#employee-info" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="ri-user-3-fill"></i><span>Employees</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="employee-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ url('employee') }}"><i class="ri-group-fill"></i>List Employees</a></li>
                        <li><a href="{{ url('employee/create') }}"><i class="ri-user-add-fill"></i>Add Employee</a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="{{ request()->is('patient', 'patient/create') ? ' active' : '' }}">
                <a href="#patient-info" class="iq-waves-effect collapsed" data-toggle="collapse"
                    aria-expanded="false"><i class="ri-user-3-fill"></i><span>Patients</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="patient-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    <li><a href="{{ url('patient') }}"><i class="ri-group-fill"></i>List Patients</a></li>
                    <li><a href="{{ url('patient/create') }}"><i class="ri-user-add-fill"></i>Register New
                            Patient</a>
                    </li>
                </ul>
            </li>

            @if (Auth::user()->role == "nurse" || Auth::user()->role == "physician" || Auth::user()->role == "admin" )
            <li class="{{ request()->is('visit', 'diagnosis', 'obtain') ? ' active' : '' }}">
                <a href="#visit-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                        class="ri-file-paper-fill"></i><span>Visitations</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="visit-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    <li><a href="{{ url('visit') }}"><i class="ri-file-list-fill"></i>List Visitations</a></li>
                    <li><a href="{{ url('diagnosis') }}"><i class="ri-file-list-3-fill"></i>Diagnosis</a></li>
                    <li><a href="{{ url('obtain') }}"><i class="ri-file-list-3-fill"></i>Obtain Records Patient</a>
                    </li>
                </ul>
            </li>
            @endif

            @if (Auth::user()->role == 'admin' || Auth::user()->role == 'staff' )
                <li class="{{ request()->is('workunit', 'carecenter', 'workunit/create') ? ' active' : '' }}">
                    <a href="#workunit-info" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="ri-hospital-fill"></i><span>Work Units</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="workunit-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ url('workunit') }}"><i class="ri-community-fill"></i>List Work Unit</a>
                        </li>
                        <li><a href="{{ url('carecenter') }}"><i class="ri-hospital-fill"></i>List Care Center</a>
                        </li>
                        {{-- <li><a href="{{url('workunit/create')}}"><i class="ri-file-list-3-fill"></i>Register New Patient</a></li> --}}
                    </ul>
                </li>
            @endif

        </ul>
    </nav>
    <div class="p-3"></div>
</div>
