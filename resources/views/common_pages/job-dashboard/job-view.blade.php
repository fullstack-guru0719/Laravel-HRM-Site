@extends('layouts.app')

@section('styles')
<link href="{{URL::asset('assets/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet" />



<!-- INTERNAl Summernote css -->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

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
                    <a href="{{ url('job/job-new') }}" class="btn btn-primary"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Add New Job</a>
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
                        <label class="form-label mb-0">Job Number:</label>
                        <p class="text-muted">{{ $current_job->job_number }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Experiences:</label>
                        <p class="text-muted">{{ $current_job->experiences }} Exp</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">vacancy:</label>
                        <p class="text-muted">{{ $current_job->no_of_vacancy }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Job Type:</label>
                        <p class="text-muted">{{ $current_job->job_type }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Posted Date:</label>
                        <p class="text-muted">{{ $current_job->posted_date }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Laste Date To Apply Date:</label>
                        <p class="text-muted">{{ $current_job->last_apply_date }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="form-label mb-0">Closed  Date:</label>
                        <p class="text-muted">{{ $current_job->closed_date }}</p>
                    </div>
                </div>
                {{-- <div class="card-footer border-top-0">
                    <div class="btn-list">
                        <a href="{{url('job/job-apply')}}" class="btn btn-primary"><i class="feather feather-check my-auto mr-2"></i>Apply Now</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-xl-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-5">
                        <a class="text-dark" href="#">
                            <h3 class="mb-2">{{ $current_job->job_category }}</h3></a>
                        <div class="d-flex">
                            <ul class="mb-0 d-md-flex">
                                <li class="mr-5">
                                    <a class="icons" href="#"><i class="si si-briefcase text-muted mr-1"></i> {{ $current_job->company_name }}</a>
                                </li>
                                <li class="mr-5">
                                    <a class="icons" href="#"><i class="si si-location-pin text-muted mr-1"></i> {{ $current_job->country }}</a>
                                </li>
                                {{-- <li class="mr-5" data-placement="top" data-toggle="tooltip" title="Views">
                                    <a class="icons" href="#"><i class="si si-eye text-muted mr-1"></i> 765</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <h5 class="mb-4 font-weight-semibold">Description</h5>
                    <ul class="list-style-disc mb-5">
                        <p>{!! $current_job->description !!}</p>
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
                                <td><span class="font-weight-semibold">Min Salary :</span> {{ $current_job->salary_type }}</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Max Salary :</span> {{ $current_job->salary_amount }}</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Job Tags :</span> PHP, Laravel, HTML5, CSS, SCSS</td>
                            </tr>
                            </tbody>
                            <tbody class="col-lg-12 col-xl-6 p-0">
                            <tr>
                                <td><span class="font-weight-semibold">Job Experience :</span>{{ $current_job->experiences }}</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Languages :</span> English , Hindi</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Locality :</span> USA , UK , India</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">EducationLevel :</span> {{ $current_job->education_level }}</td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-semibold">Company :</span> {{ $current_job->company_name }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-id">
                        <div class="row">
                            <div class="col">
                                <a class="mb-0">Job ID : {{ $current_job->job_number }}</a>
                            </div>
                            <div class="col col-auto">
                                Posted By <a class="mb-0 font-weight-semibold">{{ $current_job->company_name }}</a> / {{ $current_job->posted_date }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="icons">
                        <a class="btn btn-primary icons" data-target="#apply" data-toggle="modal" href="#"><i class="si si-check mr-1"></i>Apply</a>
                        {{-- <a class="btn btn-warning icons" href="#"><i class="si si-share mr-1"></i> Share Job</a>
                        <a class="btn btn-success icons" href="#"><i class="si si-printer mr-1"></i> Print</a> --}}
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
                <form method="POST" id="apply_form" action="{{ url('job/job-apply') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                        <input type="text" class="form-control" name="current_job_id" value="{{ $current_job->id }}" readonly hidden required>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Contact Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="summernote" name="description" id="summernote"></textarea>
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
                                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                            <label class="input-group-append mb-0">
                                                    <span class="btn ripple btn-primary">
                                                        Browse <input type="file" name="resume" class="file-browserinput"  style="display: none;" required>
                                                    </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                    <button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    {{-- <button  class="btn btn-success" onclick="submit_apply()">Apply</button> --}}
                    <button  class="btn btn-success" type="submit">Apply</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Apply Job Modal-->

@endsection('modals')

@section('scripts')

    <script src="{{URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82'],
                toolbar: [
                ['style', ['clear','bold', 'italic', 'underline']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['view', ['codeview']]
                ],
                height: 300,       
            });
        });
    </script>

    <script>
        function submit_apply()
        {
            // alert("sdfsd");
            $("#apply_form").submit();
        }
    </script>

@endsection
