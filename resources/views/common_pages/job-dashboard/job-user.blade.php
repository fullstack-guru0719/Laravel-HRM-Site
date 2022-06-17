@extends('layouts.app')

@section('styles')

    <!-- Notifications  Css -->
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

    <!-- INTERNAl Summernote css -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

    <!-- INTERNAL Datepicker css-->
    <link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">User Profile</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col-lg-8">
                            <div class="profile-pic mb-0">
                                <div class="d-md-flex">
                                    <img alt="user" class="avatar avatar-xxl brround" src="{{URL::asset('assets/images/users/1.jpg')}}">
                                    <div class="ml-4">
                                        <a class="text-dark" href="#">
                                            <h4 class="mt-3 mb-1 font-weight-semibold">Faith Harris</h4></a> <span class="text-muted">PHP Developer</span><br>
                                        <small class="text-muted">3 Yrs Experience</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-right mt-3 mt-lg-0">
                            <a class="btn btn-primary" href=""><i class="fa fa-download"></i> Download Resume</a>
                        </div>
                    </div>
                    <h5 class="mb-4 font-weight-semibold">Description</h5>
                    <div class="table-responsive">
                        <table class="table row table-borderless w-100 m-0 text-nowrap">
                            <tbody class="col-lg-12 col-xl-6 p-0">
                            <tr>
                                <td><span class="font-weight-semibold">Full Name :</span> Faith Harris</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Resume Title :</span> Searching For PHP Developer Position</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Current Designation :</span> PHP Developer</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Annual Salary :</span> $5.7Lacs</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Current Company :</span> Info Tech Pvt Ltd</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Experience :</span> 3 Yrs</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Location :</span> USA</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Preferred Location :</span> USA</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Qualification :</span> B.Tech(CSE)</td>
                            </tr>
                            </tbody>
                            <tbody class="col-lg-12 col-xl-6 p-0">
                            <tr>
                                <td><span class="font-weight-semibold">Languages :</span> English, German, Spanish.</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Email :</span> faith@gmail.com</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Phone :</span> +125 254 3562</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Industry :</span>  It Software/ Developer</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Date Of Birth :</span> 17 December 1990</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Gender :</span> Female</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Marital Status :</span> Unmarried</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Permanent Address :</span> USA</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Zip code :</span> 625417</td>
                            </tr>
                            </tbody>
                            <tbody class="p-0">
                            <tr>
                                <td><span class="font-weight-semibold">Key Skills :</span> Effective leadership and management, Good communication, Planning and research skills, Resilience, Self-management, Teamwork and interpersonal skills, Relevant work experience</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5 class="mb-4 mt-5 font-weight-semibold">Employment Details</h5>
                    <div>
                        <i class="fa fa-caret-right mr-2"></i> Currently Working at <span class="font-weight-semibold">Info Tech Pvt Ltd</span>
                    </div>
                    <div>
                        <i class="fa fa-caret-right mr-2"></i> 3 Yrs Of Working Experience in <span class="font-weight-semibold">Info Tech Pvt Ltd</span>
                    </div>
                    <h5 class="mb-4 mt-5 font-weight-semibold">IT Skills</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered border-top mb-0">
                            <thead>
                            <tr>
                                <th>Skill Name</th>
                                <th>Version</th>
                                <th>Last Used</th>
                                <th>Experience</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">PHP Developer</th>
                                <td></td>
                                <td></td>
                                <td>3 yrs</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="btn-list">
                        <a class="btn btn-primary" href="#"><i class="fa fa-download"></i> Download Resume</a>
                        <a class="btn btn-warning" href="#"><i class="si si-share mr-1"></i> Share Profile</a>
                        <a class="btn btn-success" href="#"><i class="si si-call-in mr-1"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection('content')

@section('modals')


@endsection('modals')

@section('scripts')

    <!-- Notifications js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/job/job-apply.js')}}"></script>

@endsection
