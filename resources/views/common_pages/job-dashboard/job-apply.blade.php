@extends('layouts.app')

@section('styles')

    <!-- INTERNAl Summernote css -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

    <!-- INTERNAL Datepicker css-->
    <link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Apply Jobs</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="{{url('job/job-new')}}" class="btn btn-primary "><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Project</a>
                    <a href="#" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </a>
                    <a href="#" class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </a>
                    <a href="#" class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </a>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-dark" href="{{url('job/job-view')}}">
                        <h4 class="font-weight-semibold mt-1">Senior PHP Developer</h4>
                    </a>
                    <ul class="d-lg-flex mt-2 mb-2">
                        <li><a class="mr-4" href="#"><span><i class="fa fa-building-o text-muted mr-1"></i>  Abcd Pvt Ltd</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa fa-usd text-muted mr-1"></i> 25,000 - 35,000</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-briefcase text-muted mr-1"></i> 2+ Yer Exp</span></a></li>
                    </ul>
                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                </div>
                <div class="card-footer">
                    <div class="d-md-flex">
                        <div class="d-flex align-items-center">
                            <div>
                                <a class="text-muted fs-12 mb-1" href="#"><i class="fa fa-edit text-muted mr-1"></i>Posted by</a>
                                <small class="d-block text-dark">12-01-2021, 12:15 AM</small>
                            </div>
                        </div>
                        <div class="ml-auto mt-3 mt-lg-0">
                            <a class="mr-3 mt-1 mt-sm-0" href="#"><i class="fa fa-user text-muted mr-2"></i>HR/Admin</a>
                            <a class="btn btn-primary" href="#" data-target="#apply" data-toggle="modal"><i class="si si-check mr-1"></i> Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-dark" href="{{url('job/job-view')}}">
                        <h4 class="font-weight-semibold mt-1">Fresher Web Designer</h4>
                    </a>
                    <ul class="d-lg-flex mt-2 mb-2">
                        <li><a class="mr-4" href="#"><span><i class="fa fa-building-o text-muted mr-1"></i>  croport Pvt Ltd</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-map-marker text-muted mr-1"></i> India</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa fa-usd text-muted mr-1"></i> 15,000 - 10,000</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-briefcase text-muted mr-1"></i> Freshers</span></a></li>
                    </ul>
                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                </div>
                <div class="card-footer">
                    <div class="d-md-flex">
                        <div class="d-flex align-items-center">
                            <div>
                                <a class="text-muted fs-12 mb-1" href="#"><i class="fa fa-edit text-muted mr-1"></i>Posted by</a>
                                <small class="d-block text-dark">15-02-2021, 09:00 AM</small>
                            </div>
                        </div>
                        <div class="ml-auto mt-3 mt-lg-0">
                            <a class="mr-3 mt-1 mt-sm-0" href="#"><i class="fa fa-user text-muted mr-2"></i>HR/Admin</a>
                            <a class="btn btn-primary" href="#" data-target="#apply" data-toggle="modal"><i class="si si-check mr-1"></i> Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-dark" href="{{url('job/job-view')}}">
                        <h4 class="font-weight-semibold mt-1">Senior Web Developer</h4>
                    </a>
                    <ul class="d-lg-flex mt-2 mb-2">
                        <li><a class="mr-4" href="#"><span><i class="fa fa-building-o text-muted mr-1"></i>  Cropmaster Pvt Ltd</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-map-marker text-muted mr-1"></i> UK</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa fa-usd text-muted mr-1"></i> 22,000 - 30,000</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-briefcase text-muted mr-1"></i> 1+ Yer Exp</span></a></li>
                    </ul>
                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                </div>
                <div class="card-footer">
                    <div class="d-md-flex">
                        <div class="d-flex align-items-center">
                            <div>
                                <a class="text-muted fs-12 mb-1" href="#"><i class="fa fa-edit text-muted mr-1"></i>Posted by</a>
                                <small class="d-block text-dark">16-02-2021, 15:50 PM</small>
                            </div>
                        </div>
                        <div class="ml-auto mt-3 mt-lg-0">
                            <a class="mr-3 mt-1 mt-sm-0" href="#"><i class="fa fa-user text-muted mr-2"></i>HR/Admin</a>
                            <a class="btn btn-primary" href="#" data-target="#apply" data-toggle="modal"><i class="si si-check mr-1"></i> Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-dark" href="{{url('job/job-view')}}">
                        <h4 class="font-weight-semibold mt-1">Fresher UI Designer</h4>
                    </a>
                    <ul class="d-lg-flex mt-2 mb-2">
                        <li><a class="mr-4" href="#"><span><i class="fa fa-building-o text-muted mr-1"></i>  frecho Pvt Ltd</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-map-marker text-muted mr-1"></i> India</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa fa-usd text-muted mr-1"></i> 12,000 - 18,000</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-briefcase text-muted mr-1"></i> Fresher</span></a></li>
                    </ul>
                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                </div>
                <div class="card-footer">
                    <div class="d-md-flex">
                        <div class="d-flex align-items-center">
                            <div>
                                <a class="text-muted fs-12 mb-1" href="#"><i class="fa fa-edit text-muted mr-1"></i>Posted by</a>
                                <small class="d-block text-dark">16-01-2021, 09:35 AM</small>
                            </div>
                        </div>
                        <div class="ml-auto mt-3 mt-lg-0">
                            <a class="mr-3 mt-1 mt-sm-0" href="#"><i class="fa fa-user text-muted mr-2"></i>HR/Admin</a>
                            <a class="btn btn-primary" href="#" data-target="#apply" data-toggle="modal"><i class="si si-check mr-1"></i> Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-dark" href="{{url('job/job-view')}}">
                        <h4 class="font-weight-semibold mt-1">SEO Specialist</h4>
                    </a>
                    <ul class="d-lg-flex mt-2 mb-2">
                        <li><a class="mr-4" href="#"><span><i class="fa fa-building-o text-muted mr-1"></i>  kolit Pvt Ltd</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-map-marker text-muted mr-1"></i> UK</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa fa-usd text-muted mr-1"></i> 20,000 - 25,000</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-briefcase text-muted mr-1"></i> 1+ Yer Exp</span></a></li>
                    </ul>
                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                </div>
                <div class="card-footer">
                    <div class="d-md-flex">
                        <div class="d-flex align-items-center">
                            <div>
                                <a class="text-muted fs-12 mb-1" href="#"><i class="fa fa-edit text-muted mr-1"></i>Posted by</a>
                                <small class="d-block text-dark">16-03-2021, 18:20 PM</small>
                            </div>
                        </div>
                        <div class="ml-auto mt-3 mt-lg-0">
                            <a class="mr-3 mt-1 mt-sm-0" href="#"><i class="fa fa-user text-muted mr-2"></i>HR/Admin</a>
                            <a class="btn btn-primary" href="#" data-target="#apply" data-toggle="modal"><i class="si si-check mr-1"></i> Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-dark" href="{{url('job/job-view')}}">
                        <h4 class="font-weight-semibold mt-1">Senior Worpress Developer</h4>
                    </a>
                    <ul class="d-lg-flex mt-2 mb-2">
                        <li><a class="mr-4" href="#"><span><i class="fa fa-building-o text-muted mr-1"></i>  lokalc Pvt Ltd</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-map-marker text-muted mr-1"></i> UK</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa fa-usd text-muted mr-1"></i> 35,000 - 40,000</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-briefcase text-muted mr-1"></i> 3+ Yer Exp</span></a></li>
                    </ul>
                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                </div>
                <div class="card-footer">
                    <div class="d-md-flex">
                        <div class="d-flex align-items-center">
                            <div>
                                <a class="text-muted fs-12 mb-1" href="#"><i class="fa fa-edit text-muted mr-1"></i>Posted by</a>
                                <small class="d-block text-dark">16-01-2021, 22:45 PM</small>
                            </div>
                        </div>
                        <div class="ml-auto mt-3 mt-lg-0">
                            <a class="mr-3 mt-1 mt-sm-0" href="#"><i class="fa fa-user text-muted mr-2"></i>HR/Admin</a>
                            <a class="btn btn-primary" href="#" data-target="#apply" data-toggle="modal"><i class="si si-check mr-1"></i> Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-dark" href="{{url('job/job-view')}}">
                        <h4 class="font-weight-semibold mt-1">Senior Accountant</h4>
                    </a>
                    <ul class="d-lg-flex mt-2 mb-2">
                        <li><a class="mr-4" href="#"><span><i class="fa fa-building-o text-muted mr-1"></i>  kloki Pvt Ltd</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa fa-usd text-muted mr-1"></i> 15,000 - 25,000</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-briefcase text-muted mr-1"></i> 1+ Yer Exp</span></a></li>
                    </ul>
                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                </div>
                <div class="card-footer">
                    <div class="d-md-flex">
                        <div class="d-flex align-items-center">
                            <div>
                                <a class="text-muted fs-12 mb-1" href="#"><i class="fa fa-edit text-muted mr-1"></i>Posted by</a>
                                <small class="d-block text-dark">18-02-2021, 12:15 AM</small>
                            </div>
                        </div>
                        <div class="ml-auto mt-3 mt-lg-0">
                            <a class="mr-3 mt-1 mt-sm-0" href="#"><i class="fa fa-user text-muted mr-2"></i>HR/Admin</a>
                            <a class="btn btn-primary" href="#" data-target="#apply" data-toggle="modal"><i class="si si-check mr-1"></i> Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-dark" href="{{url('job/job-view')}}">
                        <h4 class="font-weight-semibold mt-1">Fresher Angular Developer</h4>
                    </a>
                    <ul class="d-lg-flex mt-2 mb-2">
                        <li><a class="mr-4" href="#"><span><i class="fa fa-building-o text-muted mr-1"></i>  Movck Pvt Ltd</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-map-marker text-muted mr-1"></i> UK</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa fa-usd text-muted mr-1"></i> 15,000 - 18,000</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-clock-o text-muted mr-1"></i> Full Time</span></a></li>
                        <li><a class="mr-4" href="#"><span><i class="fa fa-briefcase text-muted mr-1"></i> 2+ Yer Exp</span></a></li>
                    </ul>
                    <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                </div>
                <div class="card-footer">
                    <div class="d-md-flex">
                        <div class="d-flex align-items-center">
                            <div>
                                <a class="text-muted fs-12 mb-1" href="#"><i class="fa fa-edit text-muted mr-1"></i>Posted by</a>
                                <small class="d-block text-dark">21-01-2021, 10:00 AM</small>
                            </div>
                        </div>
                        <div class="ml-auto mt-3 mt-lg-0">
                            <a class="mr-3 mt-1 mt-sm-0" href="#"><i class="fa fa-user text-muted mr-2"></i>HR/Admin</a>
                            <a class="btn btn-primary" href="#" data-target="#apply" data-toggle="modal"><i class="si si-check mr-1"></i> Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection('content')

@section('modals')


    <!-- Apply Job Modal -->
    <div class="modal fade"  id="apply">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Apply Job</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Name</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Email</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Contact Number</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Phone Number" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Description</label>
                            </div>
                            <div class="col-md-9">
                                <div class="summernote"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Upload Resume</label>
                            </div>
                            <div class="col-md-9">
                                <div class="input-group file-browser">
                                    <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly value="">
                                    <label class="input-group-append mb-0">
												<span class="btn ripple btn-primary">
													Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
												</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button  class="btn btn-success" onclick="not1()">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Apply Job Modal-->

@endsection('modals')

@section('scripts')

    <!-- INTERNAL Datepicker js -->
    <script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/job/job-apply.js')}}"></script>

@endsection
