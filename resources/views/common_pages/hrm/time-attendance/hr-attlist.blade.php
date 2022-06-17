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
            <h4 class="page-title">Attendance</h4>
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
        <a href="#" class="active ml-5">Attendance Overview</a>
        <a href="{{url('hr-attuser')}}" class="">Attendance By User</a>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-md-6 col-lg-3">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Month:</label>
                                <select class="form-control custom-select select2" data-placeholder="Select Month">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Year:</label>
                                <select class="form-control custom-select select2" data-placeholder="Select Year">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group mt-5">
                                <a href="#" class="btn btn-primary btn-block">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex mb-6 mt-5">
                        <div class="mr-3">
                            <label class="form-label">Note:</label>
                        </div>
                        <div>
                            <span class="badge badge-success-light mr-2"><i class="feather feather-check-circle text-success"></i> ---> Present</span>
                            <span class="badge badge-danger-light mr-2"><i class="feather feather-x-circle text-danger"></i> ---> Absent</span>
                            <span class="badge badge-warning-light mr-2"><i class="fa fa-star text-warning"></i> ---> Holiday</span>
                            <span class="badge badge-orange-light mr-2"><i class="fa fa-adjust text-orange"></i>  ---> Half Day</span>
                        </div>
                    </div>
                    <div class="table-responsive hr-attlist">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-attendance">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Employee Name</th>
                                <th class="border-bottom-0 w-5">1</th>
                                <th class="border-bottom-0 w-5">2</th>
                                <th class="border-bottom-0 w-5">3</th>
                                <th class="border-bottom-0 w-5">4</th>
                                <th class="border-bottom-0 w-5">5</th>
                                <th class="border-bottom-0 w-5">6</th>
                                <th class="border-bottom-0 w-5">7</th>
                                <th class="border-bottom-0 w-5">8</th>
                                <th class="border-bottom-0 w-5">9</th>
                                <th class="border-bottom-0 w-5">10</th>
                                <th class="border-bottom-0 w-5">11</th>
                                <th class="border-bottom-0 w-5">12</th>
                                <th class="border-bottom-0 w-5">13</th>
                                <th class="border-bottom-0 w-5">14</th>
                                <th class="border-bottom-0 w-5">15</th>
                                <th class="border-bottom-0 w-5">16</th>
                                <th class="border-bottom-0 w-5">17</th>
                                <th class="border-bottom-0 w-5">18</th>
                                <th class="border-bottom-0 w-5">19</th>
                                <th class="border-bottom-0 w-5">20</th>
                                <th class="border-bottom-0 w-5">21</th>
                                <th class="border-bottom-0 w-5">22</th>
                                <th class="border-bottom-0 w-5">23</th>
                                <th class="border-bottom-0 w-5">24</th>
                                <th class="border-bottom-0 w-5">25</th>
                                <th class="border-bottom-0 w-5">26</th>
                                <th class="border-bottom-0 w-5">27</th>
                                <th class="border-bottom-0 w-5">28</th>
                                <th class="border-bottom-0 w-5">29</th>
                                <th class="border-bottom-0 w-5">30</th>
                                <th class="border-bottom-0 w-5">31</th>
                                <th class="border-bottom-0">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Faith Harris</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning " data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#halfpresentmodal" class="hr-listmodal"></a>
                                        <span class="fa fa-adjust text-orange "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning " data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="feather feather-x-circle text-danger "></span></td>
                                <td><span class="feather feather-x-circle text-danger "></span></td>
                                <td><span class="feather feather-x-circle text-danger "></span></td>
                                <td><span class="feather feather-x-circle text-danger "></span></td>
                                <td><span class="fa fa-star text-warning " data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning " data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Republic Day"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <span class="text-primary">21</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span class="">31</span>
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Austin Bell</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#halfpresentmodal" class="hr-listmodal"></a>
                                        <span class="fa fa-adjust text-orange"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#halfpresentmodal" class="hr-listmodal"></a>
                                        <span class="fa fa-adjust text-orange"></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#halfpresentmodal" class="hr-listmodal"></a>
                                        <span class="fa fa-adjust text-orange"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Republic Day"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <span class="text-primary">24</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span class="">31</span>
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Maria Bower</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#halfpresentmodal" class="hr-listmodal"></a>
                                        <span class="fa fa-adjust text-orange"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Republic Day"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <span class="text-primary">17</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span class="">31</span>
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Peter Hill</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#halfpresentmodal" class="hr-listmodal"></a>
                                        <span class="fa fa-adjust text-orange"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Republic Day"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <span class="text-primary">25</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span class="">31</span>
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Victoria Lyman</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Republic Day"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <span class="text-primary">26</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span class="">31</span>
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Adam Quinn</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Republic Day"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <span class="text-primary">16</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span class="">31</span>
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Melanie Coleman</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#halfpresentmodal" class="hr-listmodal"></a>
                                        <span class="fa fa-adjust text-orange"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <span class="text-primary">23</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span class="">31</span>
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Max Wilson</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#halfpresentmodal" class="hr-listmodal"></a>
                                        <span class="fa fa-adjust text-orange "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Republic Day"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <span class="text-primary">21</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span class="">31</span>
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">Amelia Russell</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#halfpresentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="feather feather-x-circle text-danger"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Sunday"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td><span class="fa fa-star text-warning" data-toggle="tooltip" data-placement="top" title="Republic Day"></span></td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-toggle="modal" data-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">
                                        <span class="text-primary">24</span>
                                        <span class="my-auto fs-8 font-weight-normal text-muted">/</span>
                                        <span class="">31</span>
                                    </h6>
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
                            <option label="Select"></option>
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
