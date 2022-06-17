
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
            <h4 class="page-title">Attendance View</h4>
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

    <!-- Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Days Overview This Month</h4>
                </div>
                <div class="card-body pt-0 pb-3">
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Employee Name:</label>
                                        <select class="form-control custom-select select2" data-placeholder="Select Employee">
                                            <option label="Select Employee"></option>
                                            <option value="1">Faith Harris</option>
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
                                        <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Month">
                                            <option label="Select Month"></option>
                                            <option value="1">January</option>
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
                                            <option value="4">2021</option>
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
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom table-striped" id="hr-attendance1">
                            <thead>
                            <tr>
                                <th rowspan="2" class="w-5 border-bottom-0 ">Emp ID</th>
                                <th rowspan="2" class="border-bottom-0 ">Emp Name</th>
                                <th rowspan="2" class="text-center border-bottom-0 ">Last Absent</th>
                                <th colspan="8" class="text-center">Leaves</th>
                                <th rowspan="2" class="text-center border-bottom-0 ">Credit Leaves</th>
                                <th rowspan="2" class="text-center border-bottom-0 ">Status</th>
                                <th rowspan="2" class="text-center border-bottom-0 ">Action</th>
                            </tr>
                            <tr>
                                <th class="w-5 text-center border-bottom-0 ">Half Day</th>
                                <th class="w-5 text-center border-bottom-0 ">Sick</th>
                                <th class="w-5 text-center border-bottom-0 ">Casual</th>
                                <th class="w-5 text-center border-bottom-0 ">Maternity</th>
                                <th class="w-5 text-center border-bottom-0 " >Paternity</th>
                                <th class="w-5 text-center border-bottom-0 ">Annual</th>
                                <th class="w-5 text-center border-bottom-0 ">Unpaid</th>
                                <th class="w-5 text-center border-bottom-0 ">Other</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#2987</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Faith Harris</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-danger-light">4 days</span></td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">4</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#4987</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Austin Bell</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-success-light">Never</span></td>
                                <td class="text-center">3</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#6729</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Maria Bower</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-danger-light">8 days</span></td>
                                <td class="text-center">1</td>
                                <td class="text-center">4</td>
                                <td class="text-center">4</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#2098</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Peter Hill</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-success-light">Never</span></td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td> #1025</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Victoria Lyman</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-success-light">Never</span></td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#3262</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Adam Quinn</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-danger-light">10 days</span></td>
                                <td class="text-center">0</td>
                                <td class="text-center">5</td>
                                <td class="text-center">4</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#3489</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Melanie Coleman</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-danger-light">2 days</span></td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">2</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#3698</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Max Wilson</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-danger-light">4 days</span></td>
                                <td class="text-center">1</td>
                                <td class="text-center">4</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#5612</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Amelia Russell</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-danger-light">1 day</span></td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#0245</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Justin Metcalfe</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-success-light">Never</span></td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#3467</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Sophie Anderson</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-danger-light">2 days</span></td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">2</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#2987</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Ryan Young</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="badge badge-danger-light">1 day</span></td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">21</td>
                                <td class="text-center"><span class="badge badge-success">Active</span></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-icon btn-sm" href="{{url('hr-overviewcldr')}}"  data-toggle="tooltip" data-original-title="View">
                                        <i class="feather feather-eye"></i>
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

@endsection('modals')

@section('scripts')

    <!-- INTERNAL Datepicker js -->
    <script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

    <!-- INTERNAL Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/hr/hr-attview.js')}}"></script>

@endsection
