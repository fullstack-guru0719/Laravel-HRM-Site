@extends('layouts.app')

@section('styles')

    <!-- INTERNAL Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

    <!-- INTERNAl Bootstrap-timepicker css-->
    <link  href="{{URL::asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Attendance By User</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="{{url('/hrm/time-attendance/hr-attmark')}}" class="btn btn-primary mr-3">Mark Attendance</a>
                    <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="hrattview-buttons">
        <a href="{{url('hrm/time-attendance/hr-attlist')}}" class="ml-5">Attendance Overview</a>
        <a href="#" class="active ">Attendance By User</a>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-0 pb-0">
                        <div class="col-md-6 col-lg-2 text-center py-5">
                            <span class="avatar avatar-md bradius fs-20 bg-primary-transparent">31</span>
                            <h5 class="mb-0 mt-3">Total Working Days</h5>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center py-5 ">
                            <span class="avatar avatar-md bradius fs-20 bg-success-transparent">24</span>
                            <h5 class="mb-0 mt-3">Present Days</h5>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center py-5">
                            <span class="avatar avatar-md bradius fs-20 bg-danger-transparent">2</span>
                            <h5 class="mb-0 mt-3">Absent Days</h5>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center py-5">
                            <span class="avatar avatar-md bradius fs-20 bg-warning-transparent">0</span>
                            <h5 class="mb-0 mt-3">Half Days</h5>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center py-5 ">
                            <span class="avatar avatar-md bradius fs-20 bg-orange-transparent">2</span>
                            <h5 class="mb-0 mt-3">Late Days</h5>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center py-5">
                            <span class="avatar avatar-md bradius fs-20 bg-pink-transparent">5</span>
                            <h5 class="mb-0 mt-3">Holidays</h5>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12 col-lg-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Employee Name:</label>
                                        <select class="form-control custom-select select2" data-placeholder="Select Employee">
                                            <option label="Select Employee"></option>
                                            <option value="1" selected>Faith Harris</option>
                                            <option value="2">Austin Bell</option>
                                            <option value="3">Maria Bower</option>
                                            <option value="4">Peter Hill</option>
                                            <option value="5">Victoria Lyman</option>
                                            <option value="6">Adam Quinn</option>
                                            <option value="7">Melanie Coleman</option>
                                            <option value="8">Max Wilson</option>
                                            <option value="9">Amelia Russell</option>
                                            <option value="10">Justin Metcalfe</option>
                                            <option value="11">Ryan Young</option>
                                            <option value="12">Jennifer Hardacre</option>
                                            <option value="13">Justin Parr</option>
                                            <option value="14">Julia Hodges</option>
                                            <option value="15">Michael Sutherland</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Date:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="feather feather-calendar"></i>
                                                </div>
                                            </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Month:</label>
                                        <select class="form-control custom-select select2" data-placeholder="Select Month">
                                            <option label="Select Month"></option>
                                            <option value="1" selected>January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Year:</label>
                                        <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Year">
                                            <option label="Select Year"></option>
                                            <option value="1">2024</option>
                                            <option value="2">2023</option>
                                            <option value="3">2022</option>
                                            <option value="4" selected>2021</option>
                                            <option value="5">2020</option>
                                            <option value="6">2019</option>
                                            <option value="7">2018</option>
                                            <option value="8">2017</option>
                                            <option value="9">2016</option>
                                            <option value="10">2015</option>
                                            <option value="11">2014</option>
                                            <option value="12">2013</option>
                                            <option value="13">2012</option>
                                            <option value="14">2011</option>
                                            <option value="15">2019</option>
                                            <option value="16">2010</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-2">
                            <div class="form-group mt-5">
                                <a href="#" class="btn btn-primary btn-block">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Date</th>
                                <th class="border-bottom-0">Day</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Clock In</th>
                                <th class="border-bottom-0">Clock Out</th>
                                <th class="border-bottom-0">Progress</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>28-01-2021</td>
                                <td>Thursday</td>
                                <td><span class="badge badge-success-light">Present</span></td>
                                <td>09:30 AM</td>
                                <td>06:30 PM</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar bg-success w-100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>27-01-2021</td>
                                <td>Wednesday</td>
                                <td><span class="badge badge-success-light">Present</span></td>
                                <td>09:30 AM</td>
                                <td>06:30 PM</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar bg-success w-100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>26-01-2021</td>
                                <td>Tuesday</td>
                                <td><span class="badge badge-warning-light">Holiday (Republic Day)</span></td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar w-100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>25-01-2021</td>
                                <td>Monday</td>
                                <td><span class="badge badge-orange-light">Late</span></td>
                                <td>09:50 AM</td>
                                <td>06:30 PM</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-80"></div>
                                        <div class="progress-bar bg-orange w-20"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>24-01-2021</td>
                                <td>Sunday</td>
                                <td><span class="badge badge-warning-light">Holiday (Sunday)</span></td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>23-01-2021</td>
                                <td>Saturday</td>
                                <td><span class="badge badge-success-light">Present</span></td>
                                <td>09:30 AM</td>
                                <td>06:30 PM</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar bg-success w-100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>22-01-2021</td>
                                <td>Friday</td>
                                <td><span class="badge badge-success-light">Present</span></td>
                                <td>09:30 AM</td>
                                <td>06:30 PM</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar bg-success w-100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>21-01-2021</td>
                                <td>Thursday</td>
                                <td><span class="badge badge-success-light">Present</span></td>
                                <td>09:30 AM</td>
                                <td>06:30 PM</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar bg-success w-100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>20-01-2021</td>
                                <td>Wednesday</td>
                                <td><span class="badge badge-success-light">Present</span></td>
                                <td>09:30 AM</td>
                                <td>06:30 PM</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar bg-success w-100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>19-01-2021</td>
                                <td>Tuesday</td>
                                <td><span class="badge badge-success-light">Present</span></td>
                                <td>09:30 AM</td>
                                <td>06:30 PM</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar bg-success w-100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>18-01-2021</td>
                                <td>Monday</td>
                                <td><span class="badge badge-success-light">Present</span></td>
                                <td>09:30 AM</td>
                                <td>06:30 PM</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar bg-success w-100"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>17-01-2021</td>
                                <td>Sunday</td>
                                <td><span class="badge badge-warning-light">Holiday (Sunday)</span></td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>16-01-2021</td>
                                <td>Saturday</td>
                                <td><span class="badge badge-danger-light">Absent</span></td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>15-01-2021</td>
                                <td>Saturday</td>
                                <td><span class="badge badge-danger-light">Absent</span></td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>14-01-2021</td>
                                <td>Saturday</td>
                                <td><span class="badge badge-danger-light">Absent</span></td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    <div class="progress progress-sm d-block">
                                        <div class="progress-bar"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-light btn-icon btn-sm" href="#" data-toggle="modal" data-target="#presentmodal">
                                        <i class="feather feather-eye" data-toggle="tooltip" data-original-title="View"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

@endsection('content')

@section('modals')

    <!--Change password Modal -->
    <div class="modal fade"  id="changepasswordnmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" placeholder="password" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" placeholder="password" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Confirm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Change password Modal  -->

    <!--Present Modal -->
    <div class="modal fade"  id="presentmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Attendance Details</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-5 mt-4">
                        <div class="col-md-4">
                            <div class="pt-5 text-center">
                                <h6 class="mb-1 fs-16 font-weight-semibold">09:30 AM</h6>
                                <small class="text-muted fs-14">Clock In</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-circle chart-circle-md" data-value="100" data-thickness="6" data-color="#0dcd94">
                                <div class="chart-circle-value text-muted">09:00 hrs</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pt-5 text-center">
                                <h6 class="mb-1 fs-16 font-weight-semibold"> 06:30 PM</h6>
                                <small class="text-muted fs-14">Clock Out</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">IP Address</label>
                        <input type="text" class="form-control" placeholder="225.192.145.1" disabled>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Working Form</label>
                        <select name="projects"  class="form-control custom-select select2" disabled data-placeholder="Select">
                            <option label="Select"></option>
                            <option value="1" selected>Office</option>
                            <option value="2">Home</option>
                            <option value="3">Others</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-primary" data-dismiss="modal">close</a>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editmodal" data-dismiss="modal">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Present Modal  -->

    <!--Edit Modal -->
    <div class="modal fade"  id="editmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Attendance Details</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-label">Clock In</label>
                                <div class="input-group">
                                    <input type="text" class="form-control timepicker" value="9:30 AM">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-switch mt-md-6">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input orange">
                                <span class="custom-switch-indicator "></span>
                                <span class="custom-switch-description text-dark">Late</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-label">Clock Out</label>
                                <div class="input-group">
                                    <input type="text" class="form-control timepicker" value="06: 30 PM">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-switch mt-md-6">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input  orange">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description text-dark">half Day</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">IP Address</label>
                        <input type="text" class="form-control" placeholder="225.192.145.1" disabled>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Working Form</label>
                        <select name="projects"  class="form-control custom-select select2" disabled data-placeholder="Select">
                            <option label="Select"></option>
                            <option value="1" selected>Office</option>
                            <option value="2">Home</option>
                            <option value="3">Others</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer d-flex">
                    <div>
                        <a href="#" class="btn btn-light"  data-toggle="modal" data-target="#presentmodal" data-dismiss="modal"><i class="feather feather-arrow-left mr-1"></i>Back</a>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="btn btn-outline-primary" data-dismiss="modal">close</a>
                        <a href="#" class="btn btn-primary">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Edit Modal  -->

    <!--HalfPresent Modal -->
    <div class="modal fade"  id="halfpresentmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Attendance Details <span class="badge badge-orange">Half Day</span></h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-5 mt-4">
                        <div class="col-md-4">
                            <div class="pt-5 text-center">
                                <h6 class="mb-1 fs-16 font-weight-semibold">09:30 AM</h6>
                                <small class="text-muted fs-14">Clock In</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-circle chart-circle-md" data-value=".50" data-thickness="6" data-color="#0dcd94">
                                <div class="chart-circle-value text-muted">04:30 hrs</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pt-5 text-center">
                                <h6 class="mb-1 fs-16 font-weight-semibold"> 01:30 PM</h6>
                                <small class="text-muted fs-14">Clock Out</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">IP Address</label>
                        <input type="text" class="form-control" placeholder="225.192.145.1" disabled>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Working Form</label>
                        <select name="projects"  class="form-control custom-select select2" disabled data-placeholder="Select">
                            <option label="Select"></option>
                            <option value="1" selected>Office</option>
                            <option value="2">Home</option>
                            <option value="3">Others</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-primary" data-dismiss="modal">close</a>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#halfdayeditmodal" data-dismiss="modal">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Present Modal  -->

    <!--Halfday Edit Modal -->
    <div class="modal fade"  id="halfdayeditmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Attendance Details <span class="badge badge-orange">Half Day</span></h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-label">Clock In</label>
                                <div class="input-group">
                                    <input type="text" class="form-control timepicker" value="9:30 AM">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-switch mt-md-6">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input  orange">
                                <span class="custom-switch-indicator "></span>
                                <span class="custom-switch-description text-dark">Late</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-label">Clock Out</label>
                                <div class="input-group">
                                    <input type="text" class="form-control timepicker" value="01: 30 PM">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="custom-switch mt-md-6">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input  orange" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description text-dark">half Day</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">IP Address</label>
                        <input type="text" class="form-control" placeholder="225.192.145.1" disabled>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Working Form</label>
                        <select name="projects"  class="form-control custom-select select2" disabled data-placeholder="Select">
                            <option label="Select">Select</option>
                            <option value="1" selected>Office</option>
                            <option value="2">Home</option>
                            <option value="3">Others</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer d-flex">
                    <div>
                        <a href="#" class="btn btn-light"  data-toggle="modal" data-target="#halfpresentmodal" data-dismiss="modal"><i class="feather feather-arrow-left mr-1"></i>Back</a>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="btn btn-outline-primary" data-dismiss="modal">close</a>
                        <a href="#" class="btn btn-primary">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Edit Modal  -->

@endsection('modals')

@section('scripts')

    <!-- INTERNAl Bootstrap-timepicker js-->
    <script src="{{URL::asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js')}}"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

    <!-- INTERNAL Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/hr/hr-attlist.js')}}"></script>

@endsection
