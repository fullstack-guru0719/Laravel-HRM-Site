<?php $__env->startSection('styles'); ?>

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Pg-calendar-master css -->
    <link href="<?php echo e(URL::asset('assets/plugins/pg-calendar-master/pignose.calendar.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Recruiting<span class="font-weight-normal text-muted ml-2">Dashboard</span></h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="<?php echo e(url('job/job-new')); ?>" class="btn btn-primary "><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Project</a>
                    <a href="#" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </a>
                    <a href="#" class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </a>
                    <a href="#" class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </a>
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
                                    <span class="fs-16 font-weight-semibold">Total Openings</span>
                                    <h3 class="mb-0 mt-1 text-primary  fs-25">2,548</h3>
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
                                    <span class="fs-16 font-weight-semibold">Interviews</span>
                                    <h3 class="mb-0 mt-1 text-secondary fs-25">862</h3>
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
            <div class="card">
                <a href="#">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left">
                                    <span class="fs-16 font-weight-semibold">Hired</span>
                                    <h3 class="mb-0 mt-1 text-success fs-25">194</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-check"></i> </div>
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
                                    <span class="fs-16 font-weight-semibold">Rejected</span>
                                    <h3 class="mb-0 mt-1 text-danger fs-25">642</h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-danger my-auto  float-right"> <i class="feather feather-x"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="card-header pt-0 pl-0 ml-0 mb-4 mt-4 border-bottom-0 responsive-header">
                    <h4 class="card-title">Recent Published Jobs</h4>
                    <div class="card-options">
                        <div class="btn-list mr-2">
                            <a href="#" class="btn btn-primary">Add Job</a>
                            <a href="#" class="btn btn-light">View All</a>
                            <a href="#" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Latest <i class="feather feather-chevron-down"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#">Monthly</a></li>
                                <li><a href="#">Yearly</a></li>
                                <li><a href="#">Weekly</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="task-img bg-light my-auto float-right">
                                        <img src="<?php echo e(URL::asset('assets/images/png/task1.png')); ?>" alt="img" class="">
                                    </div>
                                    <div class="ml-auto">
                                        <a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                                            <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                                            <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                                            <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-0 text-left">
                                    <a href="#" class="mb-0 mt-2 mb-1 font-weight-semibold fs-20">Adobe XD Designer</a>
                                    <p class="text-muted mb-0">Fresher/Seniors</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-md-flex">
                                    <div class="mb-md-0">
                                        <h6 class="mb-1 text-muted fs-16">Applications : <span class="font-weight-semibold fs-18 text-default">67</span><sup class="badge badge-md badge-primary-light ml-2 fs-10">2 New</sup></h6>
                                        <p class="fs-12 text-muted mb-0">Just Now</p>
                                    </div>
                                    <div class="ml-auto mt-1">
                                        <div class="task-btn bg-danger-transparent border-0 mr-0 font-weight-semibold" data-toggle="tooltip" data-placement="top" title="Job Type">Full Time</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="task-img bg-light my-auto float-right">
                                        <img src="<?php echo e(URL::asset('assets/images/png/task2.png')); ?>" alt="img" class="">
                                    </div>
                                    <div class="ml-auto">
                                        <a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                                            <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                                            <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                                            <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-0 text-left">
                                    <a href="#" class="mb-0 mt-2 mb-1 font-weight-semibold fs-20">Web Designer</a>
                                    <p class="text-muted mb-0">Senior/Developers</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-md-flex">
                                    <div class="mb-md-0">
                                        <h6 class="mb-1 text-muted fs-16">Applications : <span class="font-weight-semibold fs-18 text-default">45</span><sup class="badge badge-md badge-primary-light ml-2 fs-10">6 New</sup></h6>
                                        <p class="fs-12 text-muted mb-0">05 Jan</p>
                                    </div>
                                    <div class="ml-auto mt-1">
                                        <div class="task-btn bg-warning-transparent border-0 mr-0 font-weight-semibold" data-toggle="tooltip" data-placement="top" title="Job Type">Part Time</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="task-img bg-light my-auto float-right">
                                        <img src="<?php echo e(URL::asset('assets/images/png/task3.png')); ?>" alt="img" class="">
                                    </div>
                                    <div class="ml-auto">
                                        <a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                                            <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                                            <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                                            <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-0 text-left">
                                    <a href="#" class="mb-0 mt-2 mb-1 font-weight-semibold fs-20">Angular Developer</a>
                                    <p class="text-muted mb-0">Junior/Developers</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-md-flex">
                                    <div class="mb-md-0">
                                        <h6 class="mb-1 text-muted fs-16">Applications : <span class="font-weight-semibold fs-18 text-default">20</span><sup class="badge badge-md badge-primary-light ml-2 fs-10">6 New</sup></h6>
                                        <p class="fs-12 text-muted mb-0">1 Week Ago</p>
                                    </div>
                                    <div class="ml-auto mt-1">
                                        <div class="task-btn bg-primary-transparent border-0 mr-0 font-weight-semibold" data-toggle="tooltip" data-placement="top" title="Job Type">Internship</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="task-img bg-light my-auto float-right">
                                        <img src="<?php echo e(URL::asset('assets/images/png/task5.png')); ?>" alt="img" class="">
                                    </div>
                                    <div class="ml-auto">
                                        <a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                                            <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                                            <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                                            <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-0 text-left">
                                    <a href="#" class="mb-0 mt-2 mb-1 font-weight-semibold fs-20">Jquery Developer</a>
                                    <p class="text-muted mb-0">Senior/Developers</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-md-flex">
                                    <div class="mb-md-0">
                                        <h6 class="mb-1 text-muted fs-16">Applications : <span class="font-weight-semibold fs-18 text-default">124</span><sup class="badge badge-md badge-primary-light ml-2 fs-10">15 New</sup></h6>
                                        <p class="fs-12 text-muted mb-0">1month Ago</p>
                                    </div>
                                    <div class="ml-auto mt-1">
                                        <div class="task-btn bg-danger-transparent border-0 mr-0 font-weight-semibold" data-toggle="tooltip" data-placement="top" title="Job Type">Full Time</div>
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

    <!--Row-->
    <div class="row">
        <div class="col-xl-6 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0 responsive-header">
                    <h4 class="card-title">Statistics</h4>
                    <div class="card-options">
                        <div class="btn-list">
                            <a href="#" class="btn btn-outline-light text-dark float-left d-flex my-auto"><span class="dot-label bg-primary mr-2 my-auto"></span>Applications</a>
                            <a href="#" class="btn btn-outline-light text-dark float-left d-flex my-auto"><span class="dot-label bg-gray-300 mr-2 my-auto"></span>Shortlisted</a>
                            <a href="#" class="btn  btn-outline-light" data-toggle="dropdown" aria-expanded="false"> Select <i class="feather feather-chevron-down"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#">Monthly</a></li>
                                <li><a href="#">Yearly</a></li>
                                <li><a href="#">Weekly</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <canvas id="statistics"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <h4 class="card-title">Recent Activity</h4>
                    <div class="card-options">
                        <div class="dropdown"> <a href="#" class="btn ripple btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> View All <i class="feather feather-chevron-down"></i> </a>
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
                        <li class="pl-6">
                            <a target="_blank" href="#" class="font-weight-semibold fs-16 mb-2">
                                James Miller
                                <span class="font-weight-normal text-default">Sent you new job sent you new job appliction</span>
                            </a>
                            <p class="text-muted fs-12 mb-0"> 6 mins ago</p>
                        </li>
                        <li class="primary pl-6">
                            <a target="_blank" href="#" class="font-weight-semibold fs-16 mb-2">
                                Interview sheduled with "Anthony"
                                <span class="font-weight-normal text-default">tomorrow 10am</span>
                            </a>
                            <p class="text-muted fs-12 mb-0"> 10  mins ago</p>
                        </li>
                        <li class="pink pl-6">
                            <a target="_blank" href="#" class="font-weight-semibold fs-16 mb-2">
                                <span class="font-weight-normal text-default">Project manager Published new job</span>
                                PHP Developer
                            </a>
                            <p class="text-muted fs-12 mb-0"> 2  Hours ago</p>
                        </li>
                        <li class="success mb-0 pb-0 pl-6">
                            <a target="_blank" href="#" class="font-weight-semibold fs-16 mb-2">
                                Meeting sheduled
                                <span class="font-weight-normal text-default">tomorrow 1pm  new employees</span>
                            </a>
                            <p class="text-muted fs-12 mb-0"> 4  Hours ago</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <h4 class="card-title">Overview</h4>
                </div>
                <div class="card-body">
                    <div id="overview" class="mx-auto"></div>
                    <div class="row pt-5  mx-auto">
                        <div class="col-md-6">
                            <div class="d-flex font-weight-semibold">
                                <span class="dot-label bg-primary mr-2 my-auto"></span>Applications
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <div class="d-flex font-weight-semibold">
                                <span class="dot-label bg-secondary mr-2 my-auto"></span>Interviews
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="d-flex font-weight-semibold">
                                <span class="dot-label bg-danger mr-2 my-auto"></span>Reject
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="d-flex font-weight-semibold">
                                <span class="dot-label bg-success mr-2 my-auto"></span>Hired
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <!--Row-->
    <div class="row">
        <div class="col-xl-9 col-md-12 col-lg-12">
            <div class="card overflow-hidden">
                <div class="card-header border-0">
                    <h4 class="card-title">Job Applictions</h4>
                    <div class="card-options pr-3">
                        <div class="dropdown"> <a href="#" class="btn ripple btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#">Monthly</a></li>
                                <li><a href="#">Yearly</a></li>
                                <li><a href="#">Weekly</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-menu-heading jobtable-tabs pt-3 p-0 ">
                    <div class="tabs-menu1">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li><a href="#tab5" class="active"  data-toggle="tab">Applicant</a></li>
                            <li><a href="#tab6"  data-toggle="tab">Interviews Status</a></li>
                            <li><a href="#tab7" data-toggle="tab">Hired</a></li>
                            <li class="mr-5"><a href="#tab8" data-toggle="tab">Rejected</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body table_tabs1 pt-5 p-0 border-0">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab5">
                            <div class="table-responsive jobdatatable">
                                <table class="table table-vcenter text-nowrap border-top  mb-0" id="job-table">
                                    <thead>
                                    <tr>
                                        <th class="wd-10p border-bottom-0">Name</th>
                                        <th class="wd-15p border-bottom-0">Location</th>
                                        <th class="w-15p border-bottom-0">Interviewer</th>
                                        <th class="wd-20p border-bottom-0">Schedule</th>
                                        <th class="wd-25p border-bottom-0">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/6.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Faith Harris</h6>
                                                    <p class="text-muted mb-0 fs-13">UI designer <span class="badge badge-md badge-danger-light ml-2 fs-10"> 5 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>USA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/1.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Berry Olivia</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, Jun 16, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/16.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">James Paige</h6>
                                                    <p class="text-muted mb-0 fs-13">HTML Developer <span class="badge badge-md badge-primary-light ml-2 fs-10"> 2 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>INDIA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/15.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Thomson Chapman</h6>
                                                    <p class="text-muted mb-0 fs-13">HTML Team Lead</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, Jun 19, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3 bg-primary-transparent">L</span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Liam Miller</h6>
                                                    <p class="text-muted mb-0 fs-13">UX designer <span class="badge badge-md badge-success-light ml-2 fs-10">Fresher</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>Germany</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/2.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Diane Bailey</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, Jun 02, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/13.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Kimberly Berry</h6>
                                                    <p class="text-muted mb-0 fs-13">PHP Developer <span class="badge badge-md badge-primary-light ml-2 fs-10"> 3 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>USA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3 bg-primary-transparent">J</span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Joe Howard</h6>
                                                    <p class="text-muted mb-0 fs-13">Senior Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, may 24, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/4.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Bella Davidson</h6>
                                                    <p class="text-muted mb-0 fs-13">UI designer <span class="badge badge-md badge-warning-light ml-2 fs-10"> 4 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>Australia</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="<?php echo e(URL::asset('assets/images/users/9.jpg')); ?>" alt="img" class="avatar avatar-lg brround mr-3">
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Alan Miller</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, may 12, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6">
                            <div class="table-responsive jobdatatable">
                                <table class="table table-vcenter text-nowrap border-top  mb-0" id="job-table1">
                                    <thead>
                                    <tr>
                                        <th class="wd-10p border-bottom-0">Name</th>
                                        <th class="wd-10p border-bottom-0">Status</th>
                                        <th class="wd-15p border-bottom-0">Location</th>
                                        <th class="w-15p border-bottom-0">Interviewer</th>
                                        <th class="wd-20p border-bottom-0">Schedule</th>
                                        <th class="wd-25p border-bottom-0">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/6.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Faith Harris</h6>
                                                    <p class="text-muted mb-0 fs-13">UI designer <span class="badge badge-md badge-danger-light ml-2 fs-10"> 5 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="job-status">
                                                <li class="active"></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>USA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/1.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Berry Olivia</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, Jun 16, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/16.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">James Paige</h6>
                                                    <p class="text-muted mb-0 fs-13">HTML Developer <span class="badge badge-md badge-primary-light ml-2 fs-10"> 2 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="job-status">
                                                <li class="completed"></li>
                                                <li class="completed"></li>
                                                <li class="active"></li>
                                            </ul>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>INDIA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/15.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Thomson Chapman</h6>
                                                    <p class="text-muted mb-0 fs-13">HTML Team Lead</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, Jun 19, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3 bg-primary-transparent">L</span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Liam Miller</h6>
                                                    <p class="text-muted mb-0 fs-13">UX designer <span class="badge badge-md badge-success-light ml-2 fs-10">Fresher</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="job-status">
                                                <li class="completed"></li>
                                                <li class="active"></li>
                                                <li></li>
                                            </ul>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>Germany</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/2.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Diane Bailey</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, Jun 02, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/13.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Kimberly Berry</h6>
                                                    <p class="text-muted mb-0 fs-13">PHP Developer <span class="badge badge-md badge-primary-light ml-2 fs-10"> 3 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="job-status">
                                                <li class="completed"></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>USA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3 bg-primary-transparent">J</span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Joe Howard</h6>
                                                    <p class="text-muted mb-0 fs-13">Senior Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, may 24, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/4.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Bella Davidson</h6>
                                                    <p class="text-muted mb-0 fs-13">UI designer <span class="badge badge-md badge-warning-light ml-2 fs-10"> 4 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="job-status">
                                                <li class="completed"></li>
                                                <li class="completed"></li>
                                                <li class="active"></li>
                                            </ul>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>Australia</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="<?php echo e(URL::asset('assets/images/users/9.jpg')); ?>" alt="img" class="avatar avatar-lg brround mr-3">
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Alan Miller</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">10:30Am, may 12, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab7">
                            <div class="table-responsive jobdatatable">
                                <table class="table table-vcenter text-nowrap border-top  mb-0" id="job-table2">
                                    <thead>
                                    <tr>
                                        <th class="wd-10p border-bottom-0">Name</th>
                                        <th class="wd-15p border-bottom-0">Location</th>
                                        <th class="w-15p border-bottom-0">Interviewer</th>
                                        <th class="wd-10p border-bottom-0">Status</th>
                                        <th class="wd-20p border-bottom-0">Schedule</th>
                                        <th class="wd-25p border-bottom-0">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/6.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Faith Harris</h6>
                                                    <p class="text-muted mb-0 fs-13">UI designer <span class="badge badge-md badge-danger-light ml-2 fs-10"> 5 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>USA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/1.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Berry Olivia</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-success-light">Hired</span>
                                        </td>
                                        <td><span class="text-muted">10:30Am, Jun 16, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/16.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">James Paige</h6>
                                                    <p class="text-muted mb-0 fs-13">HTML Developer <span class="badge badge-md badge-primary-light ml-2 fs-10"> 2 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>INDIA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/15.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Thomson Chapman</h6>
                                                    <p class="text-muted mb-0 fs-13">HTML Team Lead</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-success-light">Hired</span>
                                        </td>
                                        <td><span class="text-muted">10:30Am, Jun 19, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3 bg-primary-transparent">L</span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Liam Miller</h6>
                                                    <p class="text-muted mb-0 fs-13">UX designer <span class="badge badge-md badge-success-light ml-2 fs-10">Fresher</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>Germany</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/2.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Diane Bailey</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-success-light">Hired</span>
                                        </td>
                                        <td><span class="text-muted">10:30Am, Jun 02, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/13.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Kimberly Berry</h6>
                                                    <p class="text-muted mb-0 fs-13">PHP Developer <span class="badge badge-md badge-primary-light ml-2 fs-10"> 3 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>USA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3 bg-primary-transparent">J</span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Joe Howard</h6>
                                                    <p class="text-muted mb-0 fs-13">Senior Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-success-light">Hired</span>
                                        </td>
                                        <td><span class="text-muted">10:30Am, may 24, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/4.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Bella Davidson</h6>
                                                    <p class="text-muted mb-0 fs-13">UI designer <span class="badge badge-md badge-warning-light ml-2 fs-10"> 4 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>Australia</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="<?php echo e(URL::asset('assets/images/users/9.jpg')); ?>" alt="img" class="avatar avatar-lg brround mr-3">
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Alan Miller</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-success-light">Hired</span>
                                        </td>
                                        <td><span class="text-muted">10:30Am, may 12, 2020</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab8">
                            <div class="table-responsive jobdatatable">
                                <table class="table table-vcenter text-nowrap border-top  mb-0" id="job-table3">
                                    <thead>
                                    <tr>
                                        <th class="wd-10p border-bottom-0">Name</th>
                                        <th class="wd-15p border-bottom-0">Location</th>
                                        <th class="w-15p border-bottom-0">Interviewer</th>
                                        <th class="wd-10p border-bottom-0">Status</th>
                                        <th class="wd-20p border-bottom-0">Reason</th>
                                        <th class="wd-25p border-bottom-0">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/6.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Faith Harris</h6>
                                                    <p class="text-muted mb-0 fs-13">UI designer <span class="badge badge-md badge-danger-light ml-2 fs-10"> 5 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>USA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/1.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Berry Olivia</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-light">Rejected</span>
                                        </td>
                                        <td><span class="text-muted">Technical Round Failed</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/16.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">James Paige</h6>
                                                    <p class="text-muted mb-0 fs-13">HTML Developer <span class="badge badge-md badge-primary-light ml-2 fs-10"> 2 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>INDIA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/15.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Thomson Chapman</h6>
                                                    <p class="text-muted mb-0 fs-13">HTML Team Lead</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-light">Rejected</span>
                                        </td>
                                        <td><span class="text-muted">HR Round Failed</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3 bg-primary-transparent">L</span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Liam Miller</h6>
                                                    <p class="text-muted mb-0 fs-13">UX designer <span class="badge badge-md badge-success-light ml-2 fs-10">Fresher</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>Germany</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/2.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Diane Bailey</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-light">Rejected</span>
                                        </td>
                                        <td><span class="text-muted">Screen Test Failed</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/13.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Kimberly Berry</h6>
                                                    <p class="text-muted mb-0 fs-13">PHP Developer <span class="badge badge-md badge-primary-light ml-2 fs-10"> 3 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>USA</td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3 bg-primary-transparent">J</span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Joe Howard</h6>
                                                    <p class="text-muted mb-0 fs-13">Senior Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-light">Rejected</span>
                                        </td>
                                        <td><span class="text-muted">Technical Round Failed</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/4.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Bella Davidson</h6>
                                                    <p class="text-muted mb-0 fs-13">UI designer <span class="badge badge-md badge-warning-light ml-2 fs-10"> 4 Years</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="feather feather-map-pin text-muted mr-2"></i>Australia</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="<?php echo e(URL::asset('assets/images/users/9.jpg')); ?>" alt="img" class="avatar avatar-lg brround mr-3">
                                                <div class="mr-3 mt-0 mt-sm-2 d-block">
                                                    <h6 class="mb-1 fs-16">Alan Miller</h6>
                                                    <p class="text-muted mb-0 fs-13">Ui Director</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger-light">Rejected</span>
                                        </td>
                                        <td><span class="text-muted">Technical Round Failed</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Contact"><i class="feather feather-phone-call  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Calendar</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="calendar"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Chart js -->
    <script src="<?php echo e(URL::asset('assets/plugins/chart/chart.bundle.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/chart/utils.js')); ?>"></script>

    <!-- INTERNAL Apexchart js-->
    <script src="<?php echo e(URL::asset('assets/plugins/apexchart/apexcharts.js')); ?>"></script>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Pg-calendar-master js -->
    <script src="<?php echo e(URL::asset('assets/plugins/pg-calendar-master/pignose.calendar.full.min.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/index6.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\job-dashboard\index.blade.php ENDPATH**/ ?>