@extends('layouts.app')

@section('styles')

    <!-- INTERNAL Ratings css -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/css/ratings.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/css/rating-themes.css')}}">


@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Add Employee</h4>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
       
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="tab-menu-heading hremp-tabs p-0 ">
                <div class="tabs-menu1">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class="ml-4"><a href="#tab5" class="active"  data-toggle="tab">Personal Details</a></li>
                        <li><a href="#tab6" id="show_submit" data-toggle="tab">Company Details</a></li>
                        {{-- <li><a href="#tab7" data-toggle="tab">Bank Details</a></li>
                        <li><a href="#tab8" data-toggle="tab">Upload Documents</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                <form method="POST" id="em_form" action="{{ url('hrm/employee/employee-create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab5">
                                <div class="card-body">
                                    <h4 class="mb-4 font-weight-bold">Basic</h4>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">User Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control mb-md-0 mb-5" name="first_name" placeholder="First Name" required>
                                                        <span class="text-muted"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Phone Number</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Emergency Contact Number</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="contact_number" placeholder="Contact Number01" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Date Of Birth</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control fc-datepicker" name="birthday" placeholder="DD-MM-YYY" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Gender</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="custom-controls-stacked d-md-flex">
                                                    <label class="custom-control custom-radio mr-4">
                                                        <input type="radio" class="custom-control-input" name="gender" value="Male" >
                                                        <span class="custom-control-label">Male</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="gender" value="Female">
                                                        <span class="custom-control-label">Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Marital Status</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="marital_status"  class="form-control custom-select select2" data-placeholder="Select" required>
                                                    <option label="Select"></option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Blood Group</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="blood_group"  class="form-control custom-select select2" data-placeholder="Select Group" required>
                                                    <option label="Select Group"></option>
                                                    <option value="A+">A+</option>
                                                    <option value="B+">B+</option>
                                                    <option value="O+">O+</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="email" name="email" class="form-control"  placeholder="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Present Address</label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea rows="3" name="present_address" class="form-control" placeholder="Address" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Permanent Address</label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea rows="3" name="permanet_address" class="form-control" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-label mb-0 mt-2">Upload Photo</div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group file-browser">
                                                    <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                    <label class="input-group-append mb-0">
                                                        <span class="btn ripple btn-primary">
                                                            Browse <input type="file" name="image" class="file-browserinput"  style="display: none;" required>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mb-5 mt-7 font-weight-bold">Account Login</h4>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Employee Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" name="em_email" placeholder="employee email" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label mb-0 mt-2">Password</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" name="em_password" placeholder="password" >
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group mt-7">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Email Notification:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <label class="custom-switch">
                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">On/Off</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div> 
                        </div>
                        <div class="tab-pane" id="tab6">                
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Employee ID</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="em_number" value="{{ $em_number }}" readonly required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Department</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="department_id"  class="form-control custom-select select2"  data-placeholder="Select Department" required>
                                                <option label="Select Department"></option>
                                                @foreach($departments as $department)
                                                    <option value="{!! $department->id !!}"> {!! $department->department_name !!}</option>
                                                @endforeach
        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Designation</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="designation" placeholder="Designation" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Date Of Joining</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control fc-datepicker" name="join_date" placeholder="DD-MM-YYYY" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Resignation Date</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control fc-datepicker" name="resignation_date" placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Termination Date</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control fc-datepicker" name="termination_date" placeholder="DD-MM-YYYY" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Credit Leaves
                                                <span class="form-help" data-toggle="tooltip" data-placement="top" title="Unused leaves for the Employee" >?</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="credit_leaves" placeholder="0" >
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-5 mt-7 font-weight-bold">Salary</h4>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Type</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="salary_type"  class="form-control custom-select select2" name="salary_type" data-placeholder="Select Type">
                                                <option label="Select Type"></option>
                                                <option value="0">Full-Time</option>
                                                <option value="1">Part-Time</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Salary</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="salary_amount" placeholder="$Salary" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-7">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Status:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <label class="custom-switch">
                                                <input type="checkbox" name="status" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Active/Inactive</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="tab-pane" id="tab7">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Account Holder</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Naame">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Account Number</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Bank Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Branch Location</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Bank Code (IFSC)
                                                <span class="form-help" data-toggle="tooltip" data-placement="top" title="Bank Identify Number in your Country">?</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Tax Payer ID (PAN)
                                                <span class="form-help" data-toggle="tooltip" data-placement="top" title="Taxpayer Identification Number Used in your Country">?</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="ID No">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab8">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Resume</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                    <span class="btn ripple btn-light">
                                                        Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">ID Proof</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                    <span class="btn ripple btn-light">
                                                        Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Offer Letter</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Joining Letter</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Agreement Letter</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Experience Letter</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class=" text-right" id="btn_group" style="display: none;">
                        {{-- <button onclick="click_submit()" class="btn btn-primary">Save</button> --}}
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url('hrm/employee/hr-emplist') }}" class="btn btn-danger">Cancle</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Row-->

@endsection('content')

@section('modals')


@endsection('modals')

@section('scripts')

    <!-- INTERNAl Rating js-->
    <script src="{{URL::asset('assets/plugins/rating/js/jquery.barrating.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/rating/js/custom-ratings.js')}}"></script>

    <!-- INTERNAL  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/hr/hr-empview.js')}}"></script>

    <script>
        // $("#show_submit").on('click', function() {
        //     $("#btn_group").show();
        //     // alert("dsf");
        // })
        function click_submit(){
            $('#em_form').submit();
        }
    </script>


@endsection
