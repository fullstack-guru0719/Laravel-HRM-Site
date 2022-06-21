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
            <h4 class="page-title">Edit Job</h4>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" id="em_form" action="{{ url('job/job-update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Company Name</label>
                                    <input class="form-control" placeholder="Name" value="{{ $current_job->company_name }}" name="company_name">
                                    <input class="form-control" placeholder="Name" value="{{ $current_job->id }}" name="current_job_id" readonly required hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Job Position</label>
                                    <input class="form-control" placeholder="Name" value="{{ $current_job->job_position }}" name="job_position">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Job Category</label>
                                    <select  class="form-control custom-select select2" name="job_category">
                                        <option label="Select Job Category"></option>
                                        <option value="PHP Developer" @if ($current_job->job_category=="PHP Developer")
                                            selected
                                        @endif>PHP Developer</option>
                                        <option value="UX Designer" @if ($current_job->job_category=="UX Designer")
                                            selected
                                        @endif>UX Designer</option>
                                        <option value="UI Designer" @if ($current_job->job_category=="UI Designer")
                                            selected
                                        @endif>UI Designer</option>
                                        <option value="SEO Specialist" @if ($current_job->job_category=="SEO Specialist")
                                            selected
                                        @endif>SEO Specialist</option>
                                        <option value="Wordpress Developer" @if ($current_job->job_category=="Wordpress Developer")
                                            selected
                                        @endif>Wordpress Developer</option>
                                        <option value="Accountant" @if ($current_job->job_category=="Accountant")
                                            selected
                                        @endif>Accountant</option>
                                        <option value="Software Engineer" @if ($current_job->job_category=="Software Engineer")
                                            selected
                                        @endif>Software Engineer</option>
                                        <option value="Angular Developer" @if ($current_job->job_category=="Angular Developer")
                                            selected
                                        @endif>Angular Developer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Job Type:</label>
                                    <select  class="form-control custom-select select2" data-placeholder="Select Job Type" name="job_type">
                                        <option label="Select Job Type"></option>
                                        <option value="Full-Time" @if ($current_job->job_type=="Full-Time")
                                            selected
                                        @endif>Full-Time</option>
                                        <option value="Part-Time" @if ($current_job->job_type=="Part-Time")
                                            selected
                                        @endif>Part-Time</option>
                                        <option value="Freelancer" @if ($current_job->job_type=="Freelancer")
                                            selected
                                        @endif>Freelancer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">No.of Vacancy</label>
                                    <input class="form-control" placeholder="Number" value="{{ $current_job->no_of_vacancy }}" name="no_of_vacancy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Experiences</label>
                                    <select  class="form-control custom-select select2" data-placeholder="Select Experience" name="experiences">
                                        <option label="Select Experience"></option>
                                        <option value="Fresher" @if ($current_job->experiences=="Fresher")
                                            selected
                                        @endif>Fresher</option>
                                        <option value="1 yr" @if ($current_job->experiences=="1 yr")
                                            selected
                                        @endif>1 yr</option>
                                        <option value="2 yrs" @if ($current_job->experiences=="2 yrs")
                                            selected
                                        @endif>2 yrs</option>
                                        <option value="3 yrs" @if ($current_job->experiences=="3 yrs")
                                            selected
                                        @endif>3 yrs</option>
                                        <option value="4 yrs" @if ($current_job->experiences=="4 yrs")
                                            selected
                                        @endif>4 yrs</option>
                                        <option value="5 yrs" @if ($current_job->experiences=="5 yrs")
                                            selected
                                        @endif>5 yrs</option>
                                        <option value="5 yrs" @if ($current_job->experiences=="5 yrs")
                                            selected
                                        @endif>6 yrs</option>
                                        <option value="5 yrs" @if ($current_job->experiences=="5 yrs")
                                            selected
                                        @endif>7 yrs</option>
                                        <option value="8 yrs" @if ($current_job->experiences=="8 yrs")
                                            selected
                                        @endif>8 yrs</option>
                                        <option value="9 yrs" @if ($current_job->experiences=="9 yrs")
                                            selected
                                        @endif>9 yrs</option>
                                        <option value="10 yrs" @if ($current_job->experiences=="10 yrs")
                                            selected
                                        @endif>10 yrs</option>
                                        <option value="10+ yrs" @if ($current_job->experiences=="10+ yrs")
                                            selected
                                        @endif>10+ yrs</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Posted Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control fc-datepicker" name="posted_date" value="{{ $current_job->posted_date }}" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Date To Apply</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control fc-datepicker" name="last_apply_date" value="{{ $current_job->last_apply_date }}" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Close Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control fc-datepicker" name="close_date" value="{{ $current_job->close_date }}" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Select Gender:</label>
                                    <select  class="form-control custom-select select2" data-placeholder="Select Gender" name="gender">
                                        <option label="Select Gender"></option>
                                        <option value="Male" @if ($current_job->close_date=="Male")
                                            selected
                                        @endif>Male</option>
                                        <option value="Female" @if ($current_job->close_date=="Female")
                                            selected
                                        @endif>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Salary Form</label>
                                    <input class="form-control" placeholder="$0.00" value="{{ $current_job->salary_type }}" name="salary_type">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Salary To</label>
                                    <input class="form-control" placeholder="$0.00" value="{{ $current_job->salary_amount }}" name="salary_amount">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enter City:</label>
                                    <input class="form-control" placeholder="City" value="{{ $current_job->city }}" name="city">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enter State:</label>
                                    <input class="form-control" placeholder="State" value="{{ $current_job->state }}" name="state">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enter Country:</label>
                                    <input class="form-control" placeholder="Country" value="{{ $current_job->country }}" name="country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enter Education Level:</label>
                                    <input class="form-control" placeholder="Education Level" value="{{ $current_job->education_level }}" name="education_level">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description:</label>
                            <textarea class="summernote" name="description">{!! $current_job->description !!}</textarea>
                        </div>
                        <div class="custom-controls-stacked d-md-flex">
                            <label class="form-label mt-1 mr-5">Status :</label>
                            <label class="custom-control custom-radio success mr-4">
                                <input type="radio" class="custom-control-input" name="status" value="1" @if ($current_job->description==1)
                                    checked
                                @endif>
                                <span class="custom-control-label">Active</span>
                            </label>
                            <label class="custom-control custom-radio success mr-4">
                                <input type="radio" class="custom-control-input" name="status" value="0" @if ($current_job->description==0)
                                checked
                            @endif>
                                <span class="custom-control-label">InActive</span>
                            </label>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ url('job/job-list') }}" class="btn btn-danger btn-lg">Close</a>
                        <button type="submit"  class="btn btn-success btn-lg" >Update</button>
                    </div>
                </form>
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
