<?php $__env->startSection('styles'); ?>

    <!-- INTERNAl Full Calendar css -->
    <link href="<?php echo e(URL::asset('assets/plugins/fullcalendar/fullcalendar.css')); ?>" rel="stylesheet"/>

    <!-- INTERNAL Datepicker css-->
    <link href="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Holidays</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#holidaymodal">Add Holiday</a>
                    <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-3">
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
                        <div class="col-md-12 col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Month:</label>
                                <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Month">
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
                        <div class="col-md-12 col-lg-3">
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
                        <div class="col-md-12 col-lg-3">
                            <div class="form-group mt-5">
                                <a href="#" class="btn btn-primary btn-block">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Holidays Lists</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-holiday">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 w-5">No</th>
                                <th class="border-bottom-0 w-5">Day</th>
                                <th class="border-bottom-0">Date</th>
                                <th class="border-bottom-0">Holidays</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>Thursday</td>
                                <td>14-01-2021</td>
                                <td class="font-weight-semibold">Pongal Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Thuesday</td>
                                <td>26-01-2021</td>
                                <td class="font-weight-semibold">Republic Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Thursday</td>
                                <td>11-03-2021</td>
                                <td class="font-weight-semibold">Mahashivratri Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Monday</td>
                                <td>29-03-2021</td>
                                <td class="font-weight-semibold">Holi Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Tuesday</td>
                                <td>13-04-2021</td>
                                <td class="font-weight-semibold">Ugadi Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Wednesday</td>
                                <td>14-04-2021</td>
                                <td class="font-weight-semibold">Ambedkar Jayanti Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>Sunday</td>
                                <td>15-08-2021</td>
                                <td class="font-weight-semibold">Independence Day Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>Friday</td>
                                <td>10-09-2021</td>
                                <td class="font-weight-semibold">Ganesh Chaturthi Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>Friday</td>
                                <td>02-10-2021</td>
                                <td class="font-weight-semibold">Gandhi Jayanti Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Friday</td>
                                <td>14-10-2021</td>
                                <td class="font-weight-semibold">Dussehra Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Friday</td>
                                <td>04-11-2021</td>
                                <td class="font-weight-semibold">Diwali Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Saturday</td>
                                <td>25-12-2021</td>
                                <td class="font-weight-semibold">Merry Christmas Holiday</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#holidaymodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="holiday-calender">
                        <div id="calendar1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>

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

    <!-- Holiday Modal -->
    <div class="modal fade"  id="holidaymodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Holidays</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Select Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="feather feather-calendar"></i>
                                </div>
                            </div><input class="form-control" data-toggle="modaldatepicker" placeholder="MM/DD/YYYY">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Enter Occasion</label>
                        <input class="form-control" placeholder="occasion title">
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button  class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Holiday Modal -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Fullcalendar js-->
    <script src="<?php echo e(URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/hr/hr-holiday.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\hrm\hr-holiday.blade.php ENDPATH**/ ?>