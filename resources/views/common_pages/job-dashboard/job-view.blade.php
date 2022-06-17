@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Job View</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Add New Job</a>
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
        <div class="col-xl-3 col-md-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Overview</h4>
                </div>
                <div class="card-body pb-0 pt-3">
                    <div>
                        <label class="form-label mb-0">Job Title:</label>
                        <p class="text-muted">August 29, 2019</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Experiences:</label>
                        <p class="text-muted">2yrs Exp</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">vacancy:</label>
                        <p class="text-muted">05</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Job Type:</label>
                        <p class="text-muted">Full-Type</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Posted Date:</label>
                        <p class="text-muted">12-01-2021</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Laste Date To Apply Date:</label>
                        <p class="text-muted">24-01-2021</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Closed  Date:</label>
                        <p class="text-muted">25-01-2021</p>
                    </div>
                </div>
                <div class="card-footer border-top-0">
                    <div class="btn-list">
                        <a href="{{url('job/job-apply')}}" class="btn btn-primary"><i class="feather feather-check my-auto mr-2"></i>Apply Now</a>
                        <a href="#" class="btn btn-outline-primary"><i class="feather feather-phone-call  my-auto mr-2"></i>Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-5">
                        <a class="text-dark" href="#">
                            <h3 class="mb-2">Senior PHP Developer</h3></a>
                        <div class="d-flex">
                            <ul class="mb-0 d-md-flex">
                                <li class="mr-5">
                                    <a class="icons" href="#"><i class="si si-briefcase text-muted mr-1"></i> Abcd comapny Pvt ltd</a>
                                </li>
                                <li class="mr-5">
                                    <a class="icons" href="#"><i class="si si-location-pin text-muted mr-1"></i> USA</a>
                                </li>
                                <li class="mr-5" data-placement="top" data-toggle="tooltip" title="Views">
                                    <a class="icons" href="#"><i class="si si-eye text-muted mr-1"></i> 765</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5 class="mb-4 font-weight-semibold">Description</h5>
                    <ul class="list-style-disc mb-5">
                        <li>We are looking for a PHP developer, who is must  be familiar with the PHP fundamentals & PHP framework. Experience with Laravel & mixs  , Livewire</li>
                        <li>Candidate should be having excellent commnucation skills.</li>
                        <li>Development Experience in HTML5, SCSS, gulp, Jquery, Javascript.</li>
                        <li>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. </li>
                    </ul>
                    <h5 class="mb-3 mt-5 font-weight-semibold">Job Details</h5>
                    <div class="table-responsive">
                        <table class="table row table-borderless w-100 m-0 text-nowrap">
                            <tbody class="col-lg-12 col-xl-6 p-0">
                            <tr>
                                <td><span class="font-weight-semibold">Job Role :</span> PHP Developer</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Role :</span> Front-End Developer</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Min Salary :</span> $25,000</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Max Salary :</span> $35,000</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Job Tags :</span> PHP, Laravel, HTML5, CSS, SCSS, Javascript, Jquery</td>
                            </tr>
                            </tbody>
                            <tbody class="col-lg-12 col-xl-6 p-0">
                            <tr>
                                <td><span class="font-weight-semibold">Job Experience :</span> 2yrs+</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Languages :</span> English , Hindi</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Locality :</span> USA , UK , India</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Eligibility :</span> B.tech, Any Graduate</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Company :</span> Abcd Corporation pvt ltd</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-id">
                        <div class="row">
                            <div class="col">
                                <a class="mb-0">Job ID : #8976542</a>
                            </div>
                            <div class="col col-auto">
                                Posted By <a class="mb-0 font-weight-semibold">Company</a> / 12-01-2021
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="icons">
                        <a class="btn btn-primary icons" data-target="#apply" data-toggle="modal" href="#"><i class="si si-check mr-1"></i>Apply</a>
                        <a class="btn btn-warning icons" href="#"><i class="si si-share mr-1"></i> Share Job</a>
                        <a class="btn btn-success icons" href="#"><i class="si si-printer mr-1"></i> Print</a>
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

@endsection
