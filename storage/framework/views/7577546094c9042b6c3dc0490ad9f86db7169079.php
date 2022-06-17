<?php $__env->startSection('styles'); ?>

    <!-- Notifications  Css -->
    <link href="<?php echo e(URL::asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Datepicker css-->
    <link href="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Task<span class="font-weight-normal text-muted ml-2">Dashboard</span></h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="d-lg-flex d-block">
                    <div class="btn-list">
                        <a href="<?php echo e(url('task/task-new')); ?>" class="btn btn-primary"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <a href="#">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left">
                                    <span class="fs-16 font-weight-semibold">All Task's</span>
                                    <h3 class="mb-0 mt-1 text-danger  fs-25">1254</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-danger my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <a href="#">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left">
                                    <span class="fs-16 font-weight-semibold">My Task</span>
                                    <h3 class="mb-0 mt-1 text-primary  fs-25">42</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <a href="#">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left">
                                    <span class="fs-16 font-weight-semibold">Pending Tasks</span>
                                    <h3 class="mb-0 mt-1 text-secondary fs-25">11</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-secondary my-auto  float-right"> <i class="feather feather-info"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <a href="#">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left">
                                    <span class="fs-16 font-weight-semibold">Completed Tasks</span>
                                    <h3 class="mb-0 mt-1 text-success fs-25">38</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-check"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- End Row -->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="card-header pt-0 pl-0 ml-0 mb-4 mt-4 border-bottom-0 responsive-header">
                    <h4 class="card-title">Today Task Updates</h4>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="mt-0 text-left">
                                            <h4 class="mb-0 mt-1 mb-2 font-weight-semibold">Design Updated</h4>
                                            <p class="tx-16 font-weight-semibold text-muted mb-2">Designing Department</p>
                                            <span class="fs-14 mt-2 text-muted">Mobile App Ui Designing and Prototyping</span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="task-img bg-light my-auto float-right">
                                            <img src="<?php echo e(URL::asset('assets/images/png/task1.png')); ?>" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-md-flex">
                                    <div class="d-flex mb-3 mb-md-0">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-md brround" style="background-image: url(<?php echo e(URL::asset('assets/images/users/1.jpg')); ?>)"></span>
                                            <span class="avatar avatar-md brround" style="background-image: url(<?php echo e(URL::asset('assets/images/users/9.jpg')); ?>)"></span>
                                            <span class="avatar avatar-md brround bg-light text-dark">6</span>
                                        </div>
                                        <div class="ml-5">
                                            <div class="chart-circle chart-circle-xs" data-value="0.75" data-thickness="3" data-color="#0dcd94">
                                                <div class="chart-circle-value text-success fs-15">75</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-auto mt-3 mt-sm-0">
                                        <div class="d-flex">
                                            <div class="task-btn border-danger text-danger" data-toggle="tooltip" data-placement="top" title="Project Priority">High</div>
                                            <a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                                                <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                                                <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                                                <li><a href="#"><i class="feather feather-download-cloud mr-2"></i>Download</a></li>
                                                <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="mt-0 text-left">
                                            <h4 class="mb-0 mt-1 mb-2 font-weight-semibold">HTML Code Updated</h4>
                                            <p class="tx-16 font-weight-semibold text-muted mb-2">HTML Designing Department</p>
                                            <span class="fs-14 mt-2 text-muted">Updated Version 4.2.10 and Minor issues fixed</span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="task-img bg-light my-auto float-right">
                                            <img src="<?php echo e(URL::asset('assets/images/png/task2.png')); ?>" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-md-flex">
                                    <div class="d-flex mb-3 mb-md-0">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-md brround" style="background-image: url(<?php echo e(URL::asset('assets/images/users/2.jpg')); ?>)"></span>
                                            <span class="avatar avatar-md brround" style="background-image: url(<?php echo e(URL::asset('assets/images/users/10.jpg')); ?>)"></span>
                                            <span class="avatar avatar-md brround bg-light text-dark">4</span>
                                        </div>
                                        <div class="ml-5">
                                            <div class="chart-circle chart-circle-xs" data-value="0.38" data-thickness="3" data-color="#3366ff">
                                                <div class="chart-circle-value text-primary fs-15">38</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-auto mt-3 mt-sm-0">
                                        <div class="d-flex">
                                            <div class="task-btn border-success text-success" data-toggle="tooltip" data-placement="top" title="Project Priority">Low</div>
                                            <a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                                                <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                                                <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                                                <li><a href="#"><i class="feather feather-download-cloud mr-2"></i>Download</a></li>
                                                <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="mt-0 text-left">
                                            <h4 class="mb-0 mt-1 mb-2 font-weight-semibold">Angular Issues fixed</h4>
                                            <p class="tx-16 font-weight-semibold text-muted mb-2">Angular  Department</p>
                                            <span class="fs-14 mt-2 text-muted">Old Template Angular Version Updated</span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="task-img bg-light my-auto float-right">
                                            <img src="<?php echo e(URL::asset('assets/images/png/task3.png')); ?>" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-md-flex">
                                    <div class="d-flex mb-3 mb-md-0">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-md brround" style="background-image: url(<?php echo e(URL::asset('assets/images/users/14.jpg')); ?>)"></span>
                                            <span class="avatar avatar-md brround" style="background-image: url(<?php echo e(URL::asset('assets/images/users/12.jpg')); ?>)"></span>
                                            <span class="avatar avatar-md brround bg-light text-dark">8</span>
                                        </div>
                                        <div class="ml-5">
                                            <div class="chart-circle chart-circle-xs" data-value="0.67" data-thickness="3" data-color="#ffad00">
                                                <div class="chart-circle-value text-warning fs-15">67</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-auto mt-3 mt-sm-0">
                                        <div class="d-flex">
                                            <div class="task-btn border-warning text-warning" data-toggle="tooltip" data-placement="top" title="Project Priority">Medium</div>
                                            <a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                                                <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                                                <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                                                <li><a href="#"><i class="feather feather-download-cloud mr-2"></i>Download</a></li>
                                                <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="mt-0 text-left">
                                            <h4 class="mb-0 mt-1 mb-2 font-weight-semibold">Responsive Issues fixed</h4>
                                            <p class="tx-16 font-weight-semibold text-muted mb-2">Online Services and Live Chart</p>
                                            <span class="fs-14 mt-2 text-muted">Comapny Online Services & Support</span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="task-img bg-light my-auto float-right">
                                            <img src="<?php echo e(URL::asset('assets/images/png/task4.png')); ?>" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-md-flex">
                                    <div class="d-flex mb-3 mb-md-0">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar avatar-md brround" style="background-image: url(<?php echo e(URL::asset('assets/images/users/4.jpg')); ?>)"></span>
                                            <span class="avatar avatar-md brround" style="background-image: url(<?php echo e(URL::asset('assets/images/users/13.jpg')); ?>)"></span>
                                            <span class="avatar avatar-md brround bg-light text-dark">3</span>
                                        </div>
                                        <div class="ml-5">
                                            <div class="chart-circle chart-circle-xs" data-value="0.49" data-thickness="3" data-color="#0dcd94">
                                                <div class="chart-circle-value text-success fs-15">49</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-auto mt-3 mt-sm-0">
                                        <div class="d-flex">
                                            <div class="task-btn border-success text-success"  data-toggle="tooltip" data-placement="top" title="Project Priority">High</div>
                                            <a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                                                <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                                                <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                                                <li><a href="#"><i class="feather feather-download-cloud mr-2"></i>Download</a></li>
                                                <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Notifications js -->
    <script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>

    <!-- INTERNAL Chart js -->
    <script src="<?php echo e(URL::asset('assets/plugins/chart/chart.bundle.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/chart/utils.js')); ?>"></script>

    <!-- INTERNAL Chartjs rounded-barchart -->
    <script src="<?php echo e(URL::asset('assets/plugins/chart.min/chart.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/chart.min/rounded-barchart.js')); ?>"></script>

    <!-- INTERNAL Apexchart js-->
    <script src="<?php echo e(URL::asset('assets/plugins/apexchart/apexcharts.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAl Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/index3.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\DMS\resources\views/common_pages/task-dashboard/index.blade.php ENDPATH**/ ?>