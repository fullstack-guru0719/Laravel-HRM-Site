@extends('layouts.app')

@section('styles')

    <!--- INTERNAL jvectormap css-->
    <link href="{{URL::asset('assets/plugins/jvectormap/jqvmap.css')}}" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />

    <!-- INTERNAL Time picker css -->
    <link href="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />

    <!-- INTERNAL jQuery-countdowntimer css -->
    <link href="{{URL::asset('assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.css')}}" rel="stylesheet" />

@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">DMS<span class="font-weight-normal text-muted ml-2">Dashboard</span></h4>
        </div>
    </div>
    <!--End Page header-->


    <!--Row-->
    <div class="row">
        <div class="col-xl-9 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Total Employees</span>
                                        <h3 class="mb-0 mt-1 mb-2">6,578</h3>
                                        <span class="text-muted">
																<span class="text-success fs-12 mt-2 mr-1"><i class="feather feather-arrow-up-right mr-1 bg-success-transparent p-1 brround"></i>124</span>
																for last month
															</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-users"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Department</span>
                                        <h3 class="mb-0 mt-1 mb-2">124</h3>
                                        <span class="text-muted">
                                            <span class="text-danger fs-12 mt-2 mr-1"><i class="feather feather-arrow-down-left mr-1 bg-danger-transparent p-1 brround"></i>13</span>
                                            for last month
                                        </span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-box"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mt-0 text-left"> <span class="fs-14 font-weight-semibold">Expenses</span>
                                        <h3 class="mb-0 mt-1  mb-2">$2,7853</h3> </div>
                                    <span class="text-muted">
                                        <span class="text-danger fs-12 mt-2 mr-1"><i class="feather feather-arrow-up-right mr-1 bg-danger-transparent p-1 brround"></i>21.1% </span>
                                        for last month
                                    </span>
                                </div>
                                <div class="col-4">
                                    <div class="icon1 bg-secondary brround my-auto  float-right"> <i class="feather feather-dollar-sign"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header border-0 responsive-header">
                            <h4 class="card-title">Overview</h4>
                            <div class="card-options">
                                <div class="btn-list">
                                    <a href="#" class="btn  btn-outline-light text-dark float-left d-flex my-auto"><span class="dot-label bg-light4 mr-2 my-auto"></span>Employees</a>
                                    <a href="#" class="btn  btn-outline-light text-dark float-left d-flex my-auto"><span class="dot-label bg-primary mr-2 my-auto"></span>Budget</a>
                                    <a href="#" class="btn btn-outline-light" data-toggle="dropdown" aria-expanded="false"> Year <i class="feather feather-chevron-down"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Monthly</a></li>
                                        <li><a href="#">Yearly</a></li>
                                        <li><a href="#">Weekly</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="chartLine"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-12 col-lg-12">
            <div class="card overflow-hidden">
                <div class="card-header border-0">
                    <h4 class="card-title">Notice Board</h4>
                </div>
                <div class="pt-2">
                    <div class="list-group">
                        <div class="list-group-item d-flex pt-3 pb-3 align-items-center border-0">
                            <div class="mr-3 mr-xs-0">
                                <div class="calendar-icon icons">
                                    <div class="date_time bg-pink-transparent"> <span class="date">18</span> <span class="month">FEB</span> </div>
                                </div>
                            </div>
                            <div class="ml-1">
                                <div class="h5 fs-14 mb-1">Board meeting Completed</div> <small class="text-muted">attend the  company mangers...</small>
                            </div>
                        </div>
                        <div class="list-group-item d-flex pt-3 pb-3 align-items-center border-0">
                            <div class="mr-3 mr-xs-0">
                                <div class="calendar-icon icons">
                                    <div class="date_time bg-success-transparent "> <span class="date">16</span> <span class="month">FEB</span> </div>
                                </div>
                            </div>
                            <div class="ml-1">
                                <div class="h5 fs-14 mb-1"><span class="font-weight-normal">Updated the Company</span> Policy</div>
                                <small class="text-muted">some changes & add the  terms & conditions </small>
                            </div>
                        </div>
                        <div class="list-group-item d-flex pt-3 pb-3 align-items-center border-0">
                            <div class="mr-3 mr-xs-0">
                                <div class="calendar-icon icons">
                                    <div class="date_time bg-orange-transparent "> <span class="date">17</span> <span class="month">FEB</span> </div>
                                </div>
                            </div>
                            <div class="ml-1">
                                <div class="h5 fs-14 mb-1">Office Timings Changed</div> <small class="text-muted"> this effetct  after March 01st 9:00 Am To 5:00 Pm</small>
                            </div>
                        </div>
                        <div class="list-group-item d-flex pt-3 pb-5 align-items-center border-0">
                            <div class="mr-3 mr-xs-0">
                                <div class="calendar-icon icons">
                                    <div class="date_time bg-info-transparent "> <span class="date">26</span> <span class="month">JAN</span> </div>
                                </div>
                            </div>
                            <div class="ml-1">
                                <div class="h5 fs-15 mb-1"> Republic Day Celebrated </div> <small class="text-muted">participate the all employess </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="card-header border-bottom-0 pt-2 pl-0">
                    <h4 class="card-title">Upcomming Events</h4>
                </div>
                <ul class="vertical-scroll pt-4 ">
                    <li class="item">
                        <div class="card p-4 ">
                            <div class="d-flex">
                                <img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="img" class="avatar avatar-md bradius mr-3">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <h6 class="mb-1">Vanessa James</h6>
                                    <span class="clearfix"></span>
                                    <small>Birthday on Feb 16</small>
                                </div>
                                <span class="avatar bg-primary ml-auto bradius mt-1"> <i class="feather feather-mail text-white"></i> </span>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="card p-4 ">
                            <div class="d-flex comming_events calendar-icon icons">
													<span class="date_time bg-success-transparent bradius mr-3"><span class="date fs-18">21</span>
														<span class="month fs-10">Feb</span>
													</span>
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <h6 class="mb-1">Anniversary</h6>
                                    <span class="clearfix"></span>
                                    <small>3rd Anniversary on 21st Feb</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="card p-4 ">
                            <div class="d-flex">
                                <img src="{{URL::asset('assets/images/users/4.jpg')}}" alt="img" class="avatar avatar-md bradius mr-3">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <h6 class="mb-1">Faith Harris</h6>
                                    <span class="clearfix"></span>
                                    <small>Smart Device Trade Show</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="card p-4 ">
                            <div class="d-flex comming_events calendar-icon icons">
                                <span class="date_time bg-pink-transparent bradius mr-3"><span class="date fs-18">25</span>
                                    <span class="month fs-10">Mar</span>
                                </span>
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <h6 class="mb-1">Meeting</h6>
                                    <span class="clearfix"></span>
                                    <small>It will be held in meeting room</small>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="card-title">Project Overview</h4>
                    <div class="card-options">
                        <div class="dropdown"> <a href="#" class="btn btn-outline-light" data-toggle="dropdown" aria-expanded="false"> Week <i class="feather feather-chevron-down"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#">Monthly</a></li>
                                <li><a href="#">Yearly</a></li>
                                <li><a href="#">Weekly</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-5">
                        <canvas id="sales-summary" class=""></canvas>
                    </div>
                    <div class="sales-chart mt-4 row text-center">
                        <div class="d-flex my-auto col-sm-4 mx-auto text-center justify-content-center"><span class="dot-label bg-primary mr-2 my-auto"></span>On progress</div>
                        <div class="d-flex my-auto col-sm-4 mx-auto text-center justify-content-center"><span class="dot-label bg-secondary mr-2 my-auto"></span>Pending</div>
                        <div class="d-flex my-auto col-sm-4 mx-auto text-center justify-content-center"><span class="dot-label bg-light4  mr-2 my-auto"></span>Completed</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="card-title">Recent Activity</h4>
                    <div class="card-options">
                        <div class="dropdown"> <a href="#" class="btn btn-outline-light" data-toggle="dropdown" aria-expanded="false"> View All <i class="feather feather-chevron-down"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#">Monthly</a></li>
                                <li><a href="#">Yearly</a></li>
                                <li><a href="#">Weekly</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="timeline">
                        <li>
                            <a target="_blank" href="#" class="font-weight-semibold fs-15 ml-3">Leave Approval Request</a>
                            <a href="#" class="text-muted float-right fs-13">6 min ago</a>
                            <p class="mb-0 pb-0 text-muted pt-1 fs-11 ml-3">From "RuthDyer" UiDesign Leave</p>
                            <span class="text-muted  ml-3 fs-11"> On Monday 12 Jan 2020.</span>
                        </li>
                        <li class="primary">
                            <a target="_blank" href="#" class="font-weight-semibold fs-15 mb-2 ml-3">Wok Update</a>
                            <a href="#" class="text-muted float-right fs-13">10 min ago</a>
                            <p class="mb-0 pb-0 text-muted fs-11 pt-1 ml-3">From "Robert Marshall" Developer</p>
                            <span class="text-muted ml-3 fs-11">Task Completed.</span>
                        </li>
                        <li class="pink">
                            <a target="_blank" href="#" class="font-weight-semibold fs-15 mb-2 ml-3">Received Mail</a>
                            <a href="#" class="text-muted float-right fs-13">15 min ago</a>
                            <p class="mb-0 pb-0 text-muted fs-11 pt-1 ml-3">Emergency Sick Leave from "jacob Berry"</p>
                            <span class="text-muted ml-3 fs-11">Ui Designer, Designer Team.</span>
                        </li>
                        <li class="success mb-0 pb-0">
                            <a target="_blank" href="#" class="font-weight-semibold fs-15 mb-2 ml-3">Job Application Mail</a>
                            <a href="#" class="text-muted float-right fs-13">1 Hour ago</a>
                            <p class="mb-0 pb-0 text-muted fs-11 pt-1 ml-3">From jobmail@gmail.com laravel developer.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 col-lg-12">
            <div class="card chart-donut1">
                <div class="card-header  border-0">
                    <h4 class="card-title">Gender by Employees</h4>
                </div>
                <div class="card-body">
                    <div id="employees" class="mx-auto apex-dount"></div>
                    <div class="sales-chart pt-5 pb-3 d-flex mx-auto text-center justify-content-center ">
                        <div class="d-flex mr-5"><span class="dot-label bg-primary mr-2 my-auto"></span>Male</div>
                        <div class="d-flex"><span class="dot-label bg-secondary  mr-2 my-auto"></span>Female</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection('content')

@section('modals')

@endsection('modals')

@section('scripts')

    <!-- INTERNAL Peitychart js-->
    <script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- INTERNAL Apexchart js-->
    <script src="{{URL::asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

    <!-- INTERNAL Vertical-scroll js-->
    <script src="{{URL::asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/vertical-scroll/vertical-scroll.js')}}"></script>

    <!-- INTERNAL  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

    <!-- INTERNAL Chart js -->
    <script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

    <!-- INTERNAL Timepicker js -->
    <script src="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/time-picker/toggles.min.js')}}"></script>

    <!-- INTERNAL Chartjs rounded-barchart -->
    <script src="{{URL::asset('assets/plugins/chart.min/chart.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/chart.min/rounded-barchart.js')}}"></script>

    <!-- INTERNAL jQuery-countdowntimer js -->
    <script src="{{URL::asset('assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/index1.js')}}"></script>

@endsection
