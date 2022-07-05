<?php $__env->startSection('styles'); ?>

    <!--- INTERNAL jvectormap css-->
    <link href="<?php echo e(URL::asset('assets/plugins/jvectormap/jqvmap.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Time picker css -->
    <link href="<?php echo e(URL::asset('assets/plugins/time-picker/jquery.timepicker.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL jQuery-countdowntimer css -->
    <link href="<?php echo e(URL::asset('assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">DMS<span class="font-weight-normal text-muted ml-2">Work Orders</span></h4>
        </div>
    
    </div>
    <!--End Page header-->


    <!--Row-->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mt-0 text-left"> <span class="fs-18 font-weight-semibold">Total Work Orders</span>
                                        <h2 class="mb-0 mt-1 mb-2"><?php echo e(sizeof($total_orders)); ?></h2>
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
                                    <div class="mt-0 text-left"> <span class="fs-18 font-weight-semibold">Work Orders this year</span>
                                        <h2 class="mb-0 mt-1 mb-2"><?php echo e(sizeof($year_orders)); ?></h2>
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
                                    <div class="mt-0 text-left"> <span class="fs-18 font-weight-semibold">Work Orders this month</span>
                                        <h2 class="mb-0 mt-1  mb-2"><?php echo e(sizeof($month_orders)); ?></h2> </div>
                                </div>
                                <div class="col-4">
                                    <div class="icon1 bg-secondary brround my-auto  float-right"> <i class="feather feather-box"></i> </div>
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


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Peitychart js-->
    <script src="<?php echo e(URL::asset('assets/plugins/peitychart/jquery.peity.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/peitychart/peitychart.init.js')); ?>"></script>

    <!-- INTERNAL Apexchart js-->
    <script src="<?php echo e(URL::asset('assets/plugins/apexchart/apexcharts.js')); ?>"></script>

    <!-- INTERNAL Vertical-scroll js-->
    <script src="<?php echo e(URL::asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/vertical-scroll/vertical-scroll.js')); ?>"></script>

    <!-- INTERNAL  Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/date-picker/jquery-ui.js')); ?>"></script>

    <!-- INTERNAL Chart js -->
    <script src="<?php echo e(URL::asset('assets/plugins/chart/chart.bundle.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/chart/utils.js')); ?>"></script>

    <!-- INTERNAL Timepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/time-picker/jquery.timepicker.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/time-picker/toggles.min.js')); ?>"></script>

    <!-- INTERNAL Chartjs rounded-barchart -->
    <script src="<?php echo e(URL::asset('assets/plugins/chart.min/chart.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/chart.min/rounded-barchart.js')); ?>"></script>

    <!-- INTERNAL jQuery-countdowntimer js -->
    <script src="<?php echo e(URL::asset('assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/index1.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\work-order-dashboard\index.blade.php ENDPATH**/ ?>