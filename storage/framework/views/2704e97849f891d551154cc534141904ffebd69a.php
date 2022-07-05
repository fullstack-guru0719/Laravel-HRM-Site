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
            <h4 class="page-title">Events</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" data-toggle="modal" data-target="#eventmodal" class="btn btn-primary mr-3">Add New Events</a>
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
        <div class="col-md-12 col-xl-4">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <h4 class="card-title">Upcoming Events</h4>
                </div>
                <div class="card-body mt-2">
                    <div class="mb-5">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-success-transparent bradius mr-3"><span class="date fs-20">22</span>
													<span class="month fs-13">FEB</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Anniversary</h6>
                                <span class="clearfix"></span>
                                <small>Office 3rd Anniversary on 22nd Feb</small>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-purple-transparent bradius mr-3"><span class="date fs-20">10</span>
													<span class="month fs-13">FEB</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Vanessa James</h6>
                                <span class="clearfix"></span>
                                <small>Birthday on Feb 16</small>
                            </div>
                            <p class="float-right mb-0  ml-auto  my-auto">
                                <a class="btn btn-outline-orange mt-1" href="#"><i class="fa fa-birthday-cake mr-2"></i>Wish Now</a>
                            </p>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-orange-transparent bradius mr-3"><span class="date fs-20">18</span>
													<span class="month fs-13">FEB</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Trade Shows</h6>
                                <span class="clearfix"></span>
                                <small>Smart Device Trade Show</small>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-warning-transparent bradius mr-3"><span class="date fs-20">06</span>
													<span class="month fs-13">Mar</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Holiday Party</h6>
                                <span class="clearfix"></span>
                                <small>SCreate a Cost-Effective Holiday Party Menu</small>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-pink-transparent bradius mr-3"><span class="date fs-20">13</span>
													<span class="month fs-13">MAR</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Team-Building </h6>
                                <span class="clearfix"></span>
                                <small>Team Communication & Creative Innovation team members</small>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-success-transparent bradius mr-3"><span class="date fs-20">24</span>
													<span class="month fs-13">MAR</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Anniversary</h6>
                                <span class="clearfix"></span>
                                <small>Faith Harris 3rd work  Anniversary</small>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-purple-transparent bradius mr-3"><span class="date fs-20">10</span>
													<span class="month fs-13">APR</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Austin Bell</h6>
                                <span class="clearfix"></span>
                                <small>Birthday on Apr 16</small>
                            </div>
                            <p class="float-right mb-0  ml-auto  my-auto">
                                <a class="btn btn-outline-orange mt-1" href="#"><i class="fa fa-birthday-cake mr-2"></i>Wish Now</a>
                            </p>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-info-transparent bradius mr-3"><span class="date fs-20">25</span>
													<span class="month fs-13">APR</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Board Meeting</h6>
                                <span class="clearfix"></span>
                                <small>It will be held in meeting room</small>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-purple-transparent bradius mr-3"><span class="date fs-20">01</span>
													<span class="month fs-13">MAY</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Maria Bower</h6>
                                <span class="clearfix"></span>
                                <small>Birthday on May 01</small>
                            </div>
                            <p class="float-right mb-0  ml-auto  my-auto">
                                <a class="btn btn-outline-orange mt-1" href="#"><i class="fa fa-birthday-cake mr-2"></i>Wish Now</a>
                            </p>
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-success-transparent bradius mr-3"><span class="date fs-20">21</span>
													<span class="month fs-13">MAY</span>
												</span>
                            <div class="mr-3 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-1 font-weight-semibold">Max Wilson Anniversary</h6>
                                <span class="clearfix"></span>
                                <small>Max Wilson 1st work  Anniversary</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="hrevent-calender">
                        <div id="calendar1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

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

    <!--Add New Event Modal -->
    <div class="modal fade"  id="eventmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Event</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Event Title</label>
                        <input type="password" class="form-control" placeholder="text" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Event Date:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="feather feather-calendar"></i>
                                </div>
                            </div><input class="form-control fc-datepicker"  placeholder="DD-MM-YYYY"  type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Event Description</label>
                        <textarea class="form-control" rows="3">Some text here...</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add New Event Modal  -->

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
    <script src="<?php echo e(URL::asset('assets/js/hr/hr-events.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\hrm\hr-events.blade.php ENDPATH**/ ?>