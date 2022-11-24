@extends('layouts.layouts')

@section('title', 'Hospital Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Activity Statistic</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <div id="home-chart-05"></div>
             </div>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-body p-0 rounded ">
                <img  src="{{asset('assets')}}/images/page-img/39.png" class="img-fluid rounded" alt="banner-img">
             </div>
          </div>
       </div>
       <div class="col-md-6">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Patient Distribution</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <div id="doc-chart-01" style="height: 415px;"></div>
             </div>
          </div>
       </div>
       <div class="col-md-6">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Patients In</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <div id="bar-chart-6"></div>
             </div>
          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-lg-4">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Patients Satisfactions</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <h2>3,897<span class="text-success font-size-14 ml-3 mr-3"><i class="ri-arrow-up-fill mr-2"></i>+3.3%</span><small class="text-secondary font-size-14">Generated by clients</small>
                </h2>
                <div class="progress mt-3">
                   <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                   </div>
                   <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                   </div>
                   <div class="progress-bar bg-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
                   </div>
                   <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                   </div>
                   <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                   </div>
                   <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
                   </div>
                </div>
                <div class="table-responsive mt-4">
                   <table class="table mb-0 table-borderless">
                      <tbody>
                         <tr>
                            <td>
                               <div class="iq-profile-avatar status-online mt-4"> </div>
                            </td>
                            <td>
                               <h4>Excellent</h4>
                            </td>
                            <td><span class="text-muted">2400</span></td>
                            <td>60%</td>
                         </tr>
                         <tr>
                            <td>
                               <div class="iq-profile-avatar status-blue mt-4"> </div>
                            </td>
                            <td>
                               <h4>Very Good</h4>
                            </td>
                            <td><span class="text-muted">1200</span></td>
                            <td>30%</td>
                         </tr>
                         <tr>
                            <td>
                               <div class="iq-profile-avatar status-primary mt-4"> </div>
                            </td>
                            <td>
                               <h4>Good</h4>
                            </td>
                            <td><span class="text-muted">240</span></td>
                            <td>6%</td>
                         </tr>
                         <tr>
                            <td>
                               <div class="iq-profile-avatar status-info mt-4"> </div>
                            </td>
                            <td>
                               <h4>Fair</h4>
                            </td>
                            <td><span class="text-muted">80</span></td>
                            <td>2%</td>
                         </tr>
                         <tr>
                            <td>
                               <div class="iq-profile-avatar status-away mt-4"> </div>
                            </td>
                            <td>
                               <h4>Poor</h4>
                            </td>
                            <td><span class="text-muted">40</span></td>
                            <td>1%</td>
                         </tr>
                         <tr>
                            <td>
                               <div class="iq-profile-avatar status-danger mt-4"> </div>
                            </td>
                            <td>
                               <h4>Very Poor</h4>
                            </td>
                            <td><span class="text-muted">40</span></td>
                            <td>1%</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Tasks</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                   <ul class="nav nav-pills" id="myTab" role="tablist">
                      <li class="nav-item">
                         <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="iq-card-body">
                <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                            <label class="custom-control-label" for="customCheck11">You should check in some of below.</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                            <label class="custom-control-label" for="customCheck10">Get the address of customer</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                            <label class="custom-control-label" for="customCheck12">Contact Vendor for parcel</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                            <label class="custom-control-label" for="customCheck13">Refule delivery truck</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                            <label class="custom-control-label" for="customCheck14">Pick up for order no. 334</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                            <label class="custom-control-label" for="customCheck15">Pay taxes for every bill</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck16">
                            <label class="custom-control-label" for="customCheck16">I am designers &amp; I have no life</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck17">
                            <label class="custom-control-label" for="customCheck17">This is a good product. Buy it :) </label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck18">
                            <label class="custom-control-label" for="customCheck18">You should check in on some of  below.</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck19">
                            <label class="custom-control-label" for="customCheck19">You should check in on some of  below.</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck110">
                            <label class="custom-control-label" for="customCheck110">You should check in on some of  below.</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck111">
                            <label class="custom-control-label" for="customCheck111">You should check in on some of  below.</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                      <div class="d-flex tasks-card" role="alert">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck112">
                            <label class="custom-control-label" for="customCheck112">You should check in on some of  below.</label>
                         </div>
                         <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                         <i class="ri-close-line"></i>
                         </button>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Patient Timeline</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                   <div class="dropdown">
                      <span class="dropdown-toggle text-primary" id="dropdownMenuButton4" data-toggle="dropdown">
                      View All
                      </span>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">
                         <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                         <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                         <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                         <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                         <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="iq-card-body">
                <ul class="iq-timeline">
                   <li>
                      <div class="timeline-dots"></div>
                      <h6 class="float-left mb-1">Patient Checkup</h6>
                      <small class="float-right mt-1">23 November 2019</small>
                      <div class="d-inline-block w-100">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque </p>
                      </div>
                   </li>
                   <li>
                      <div class="timeline-dots border-success"></div>
                      <h6 class="float-left mb-1">Patient Admit</h6>
                      <small class="float-right mt-1">24 November 2019</small>
                      <div class="d-inline-block w-100">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                      </div>
                   </li>
                   <li>
                      <div class="timeline-dots border-primary"></div>
                      <h6 class="float-left mb-1">Treatment Starts</h6>
                      <small class="float-right mt-1">24 November 2019</small>
                      <div class="d-inline-block w-100">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                      </div>
                   </li>
                   <li>
                      <div class="timeline-dots border-warning"></div>
                      <h6 class="float-left mb-1">Patient Discharge</h6>
                      <small class="float-right mt-1">30 November 2019</small>
                      <div class="d-inline-block w-100">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-lg-8">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Patients Lists </h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                   <div class="dropdown">
                      <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                      <i class="ri-more-fill"></i>
                      </span>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                         <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                         <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                         <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                         <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                         <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="iq-card-body">
                <div class="table-responsive">
                   <table class="table mb-0 table-borderless">
                      <thead>
                         <tr>
                            <th scope="col">Patient</th>
                            <th scope="col">E-mail Id </th>
                            <th scope="col">Contact</th>
                            <th scope="col">Disease</th>

                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>Petey Cruiser</td>
                            <td>peteycruiser01@gmail.com</td>
                            <td>+1-202-555-0146</td>
                            <td>Fever</td>
                         </tr>
                         <tr>
                            <td>Anna Sthesia</td>
                            <td>annasthesia121@gmail.com</td>
                            <td>+1-202-555-0164</td>
                            <td>Cancer</td>
                         </tr>
                         <tr>
                            <td>Paul Molive</td>
                            <td>paulmolive30@gmail.com</td>
                            <td>+1-202-555-0153</td>
                            <td>Diabetes</td>
                         </tr>
                         <tr>
                            <td>Anna Mull</td>
                            <td>annamull07@gmail.com</td>
                            <td>+1-202-555-0154</td>
                            <td>eye</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Patients Reports</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <ul class="report-lists m-0 p-0">
                   <li class="d-flex mb-4 align-items-center">
                      <div class="media-support-info">
                         <h6>X-ray.pdf</h6>
                         <a href="#">View report</a>
                      </div>
                      <button type="button" class="btn btn-success" name="button">Download </button>
                   </li>
                   <li class="d-flex mb-4 align-items-center">
                      <div class="media-support-info">
                         <h6>pathologyreport.pdf</h6>
                         <a href="#">View report</a>
                      </div>
                      <button type="button" class="btn btn-success" name="button">Download </button>
                   </li>
                   <li class="d-flex mb-4 align-items-center">
                      <div class="media-support-info">
                         <h6>laboratoryreports.pdf</h6>
                         <a href="#">View report</a>
                      </div>
                      <button type="button" class="btn btn-danger" name="button">On Hold </button>
                   </li>
                   <li class="d-flex align-items-center">
                      <div class="media-support-info">
                         <h6>operativereport.pdf</h6>
                         <a href="#">View report</a>
                      </div>
                      <button type="button" class="btn btn-success" name="button">Download </button>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection