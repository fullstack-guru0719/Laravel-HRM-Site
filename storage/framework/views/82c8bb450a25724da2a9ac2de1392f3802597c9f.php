<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Recent Leave Applications</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <h4 class="card-title">Recent Earned Leave Applications</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card border p-0 shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Earned Leave Request</h3>
                                    <div class="ml-auto">
                                        <span class="badge badge-md badge-warning-light">3 days left</span>
                                    </div>
                                </div>
                                <div class="d-flex p-4">
                                    <div>
                                        <div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(URL::asset('assets/images/users/1.jpg')); ?>"></div>
                                    </div>
                                    <div class="pl-3">
                                        <h5 class="mb-0 mt-2 text-dark fs-18">Faith Harris</h5>
                                        <p class="text-muted fs-12 mt-1 mb-0">Designing <span class="my-auto fs-9 font-weight-normal  ml-1 mr-1 text-black-20">/</span> Web Designer</p>
                                    </div>
                                </div>
                                <div class="card-body pt-2 bg-light">
                                    <div class="mt-3 mb-3">
                                        <div class="h5 mb-1">
                                            <span class="feather feather-calendar"></span> : 16-01-2021
                                            <span class="badge badge-md badge-primary-light ml-1">1 day</span>
                                        </div>
                                        <small class="text-muted fs-11">Applied On: 05-01-2021 On<span class="font-weight-semibold"> 5 weeks ago</span></small>
                                    </div>
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-success w-70"></div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mb-0">
                                        <h6 class="fs-12 mb-0">Remaining Leaves</h6>
                                        <h6 class="font-weight-bold fs-12 mb-0">15</h6>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <label class="form-label">Reason:</label>
                                    <p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                                <div class="card-footer p-0 border-top-0">
                                    <div class="btn-group w-100 leaves-btns">
                                        <a href="#" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
                                        <a href="#" class="btn btn-lg btn-outline-light w-55 text-danger">Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card border p-0 shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Earned Leave Request</h3>
                                    <div class="ml-auto">
                                        <span class="badge badge-md badge-warning-light">5 days left</span>
                                    </div>
                                </div>
                                <div class="d-flex p-4">
                                    <div>
                                        <div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(URL::asset('assets/images/users/9.jpg')); ?>"></div>
                                    </div>
                                    <div class="pl-3">
                                        <h5 class="mb-0 mt-2 text-dark fs-18">Austin Bell</h5>
                                        <p class="text-muted fs-12 mt-1 mb-0">Development <span class="my-auto fs-9 font-weight-normal  ml-1 mr-1 text-black-20">/</span> Angular Developer</p>
                                    </div>
                                </div>
                                <div class="card-body pt-2 bg-light">
                                    <div class="mt-3 mb-3">
                                        <div class="h5 mb-1">
                                            <span class="feather feather-calendar"></span> : 14-01-2021<span class="text-muted leave-to">To</span>15-01-2021
                                            <span class="badge badge-md badge-primary-light ml-1">2 days</span>
                                        </div>
                                        <small class="text-muted fs-11">Applied On: 13-01-2021 On<span class="font-weight-semibold"> 3 weeks ago</span></small>
                                    </div>
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-success w-60"></div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mb-0">
                                        <h6 class="fs-12 mb-0">Remaining Leaves</h6>
                                        <h6 class="font-weight-bold fs-12 mb-0">18</h6>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <label class="form-label">Reason:</label>
                                    <p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                                <div class="card-footer p-0 border-top-0">
                                    <div class="btn-group w-100 leaves-btns">
                                        <a href="#" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
                                        <a href="#" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card border p-0 shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Earned Leave Request</h3>
                                    <div class="ml-auto">
                                        <span class="badge badge-md badge-warning-light">5 days left</span>
                                    </div>
                                </div>
                                <div class="d-flex p-4">
                                    <div>
                                        <div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(URL::asset('assets/images/users/2.jpg')); ?>"></div>
                                    </div>
                                    <div class="pl-3">
                                        <h5 class="mb-0 mt-2 text-dark fs-18">Maria Bower</h5>
                                        <p class="text-muted fs-12 mt-1 mb-0">Marketing  <span class="my-auto fs-9 font-weight-normal  ml-1 mr-1 text-black-20">/</span> Marketing analyst</p>
                                    </div>
                                </div>
                                <div class="card-body pt-2 bg-light">
                                    <div class="mt-3 mb-3">
                                        <div class="h5 mb-1">
                                            <span class="feather feather-calendar"></span> : 21-01-2021<span class="text-muted leave-to">To</span>27-01-2021
                                            <span class="badge badge-md badge-primary-light ml-1">7 days</span>
                                        </div>
                                        <small class="text-muted fs-11">Applied On: 11-01-2021 On<span class="font-weight-semibold"> 3 weeks ago</span></small>
                                    </div>
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-success w-80"></div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mb-0">
                                        <h6 class="fs-12 mb-0">Remaining Leaves</h6>
                                        <h6 class="font-weight-bold fs-12 mb-0">10</h6>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <label class="form-label">Reason:</label>
                                    <p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                                <div class="card-footer p-0 border-top-0">
                                    <div class="btn-group w-100 leaves-btns">
                                        <a href="#" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
                                        <a href="#" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card border p-0 shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Earned Leave Request</h3>
                                    <div class="ml-auto">
                                        <span class="badge badge-md badge-warning-light">1 day left</span>
                                    </div>
                                </div>
                                <div class="d-flex p-4">
                                    <div>
                                        <div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(URL::asset('assets/images/users/10.jpg')); ?>"></div>
                                    </div>
                                    <div class="pl-3">
                                        <h5 class="mb-0 mt-2 text-dark fs-18">Peter Hill</h5>
                                        <p class="text-muted fs-12 mt-1 mb-0">IT <span class="my-auto fs-9 font-weight-normal  ml-1 mr-1 text-black-20">/</span> Testor</p>
                                    </div>
                                </div>
                                <div class="card-body pt-2 bg-light">
                                    <div class="mt-3 mb-3">
                                        <div class="h5 mb-1">
                                            <span class="feather feather-calendar"></span> : 05-01-2021
                                            <span class="badge badge-md badge-primary-light ml-1">1 day</span>
                                        </div>
                                        <small class="text-muted fs-11">Applied On: 12-12-2020 On<span class="font-weight-semibold"> 3 weeks ago</span></small>
                                    </div>
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-success w-75"></div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mb-0">
                                        <h6 class="fs-12 mb-0">Remaining Leaves</h6>
                                        <h6 class="font-weight-bold fs-12 mb-0">12</h6>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <label class="form-label">Reason:</label>
                                    <p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                                <div class="card-footer p-0 border-top-0">
                                    <div class="btn-group w-100 leaves-btns">
                                        <a href="#" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
                                        <a href="#" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card border p-0 shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Earned Leave Request</h3>
                                    <div class="ml-auto">
                                        <span class="badge badge-md badge-warning-light">2 days left</span>
                                    </div>
                                </div>
                                <div class="d-flex p-4">
                                    <div>
                                        <div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(URL::asset('assets/images/users/3.jpg')); ?>"></div>
                                    </div>
                                    <div class="pl-3">
                                        <h5 class="mb-0 mt-2 text-dark fs-18">Victoria Lyman</h5>
                                        <p class="text-muted fs-12 mt-1 mb-0">Managers  <span class="my-auto fs-9 font-weight-normal  ml-1 mr-1 text-black-20">/</span> General Manager</p>
                                    </div>
                                </div>
                                <div class="card-body pt-2 bg-light">
                                    <div class="mt-3 mb-3">
                                        <div class="h5 mb-1">
                                            <span class="feather feather-calendar"></span> : 22-01-2021
                                            <span class="badge badge-md badge-primary-light ml-1">1 day</span>
                                        </div>
                                        <small class="text-muted fs-11">Applied On: 21-01-2021 On<span class="font-weight-semibold"> Just Now</span></small>
                                    </div>
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-success w-30"></div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mb-0">
                                        <h6 class="fs-12 mb-0">Remaining Leaves</h6>
                                        <h6 class="font-weight-bold fs-12 mb-0">19</h6>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <label class="form-label">Reason:</label>
                                    <p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                                <div class="card-footer p-0 border-top-0">
                                    <div class="btn-group w-100 leaves-btns">
                                        <a href="#" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
                                        <a href="#" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card border p-0 shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Earned Leave Request</h3>
                                    <div class="ml-auto">
                                        <span class="badge badge-md badge-warning-light">8 days left</span>
                                    </div>
                                </div>
                                <div class="d-flex p-4">
                                    <div>
                                        <div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(URL::asset('assets/images/users/11.jpg')); ?>"></div>
                                    </div>
                                    <div class="pl-3">
                                        <h5 class="mb-0 mt-2 text-dark fs-18">Adam Quinn</h5>
                                        <p class="text-muted fs-12 mt-1 mb-0">Accounts   <span class="my-auto fs-9 font-weight-normal  ml-1 mr-1 text-black-20">/</span> Accountant</p>
                                    </div>
                                </div>
                                <div class="card-body pt-2 bg-light">
                                    <div class="mt-3 mb-3">
                                        <div class="h5 mb-1">
                                            <span class="feather feather-calendar"></span> : 18-01-2021<span class="text-muted leave-to">To</span>19-01-2021
                                            <span class="badge badge-md badge-primary-light ml-1">2 days</span>
                                        </div>
                                        <small class="text-muted fs-11">Applied On: 10-01-2021 On<span class="font-weight-semibold"> 5 weeks ago</span></small>
                                    </div>
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-success w-85"></div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mb-0">
                                        <h6 class="fs-12 mb-0">Remaining Leaves</h6>
                                        <h6 class="font-weight-bold fs-12 mb-0">08</h6>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <label class="form-label">Reason:</label>
                                    <p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                                <div class="card-footer p-0 border-top-0">
                                    <div class="btn-group w-100 leaves-btns">
                                        <a href="#" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
                                        <a href="#" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card border p-0 shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Earned Leave Request</h3>
                                    <div class="ml-auto">
                                        <span class="badge badge-md badge-warning-light">Today</span>
                                    </div>
                                </div>
                                <div class="d-flex p-4">
                                    <div>
                                        <div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(URL::asset('assets/images/users/4.jpg')); ?>"></div>
                                    </div>
                                    <div class="pl-3">
                                        <h5 class="mb-0 mt-2 text-dark fs-18">Melanie Coleman</h5>
                                        <p class="text-muted fs-12 mt-1 mb-0">Application <span class="my-auto fs-9 font-weight-normal  ml-1 mr-1 text-black-20">/</span> App Designer</p>
                                    </div>
                                </div>
                                <div class="card-body pt-2 bg-light">
                                    <div class="mt-3 mb-3">
                                        <div class="h5 mb-1">
                                            <span class="feather feather-calendar"></span> : 11-01-2021
                                            <span class="badge badge-md badge-primary-light ml-1">Half day</span>
                                        </div>
                                        <small class="text-muted fs-11">Applied On: 11-01-2021 On<span class="font-weight-semibold"> Just Now</span></small>
                                    </div>
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-success w-95"></div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mb-0">
                                        <h6 class="fs-12 mb-0">Remaining Leaves</h6>
                                        <h6 class="font-weight-bold fs-12 mb-0">20</h6>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <label class="form-label">Reason:</label>
                                    <p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                                <div class="card-footer p-0 border-top-0">
                                    <div class="btn-group w-100 leaves-btns">
                                        <a href="#" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
                                        <a href="#" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card border p-0 shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Earned Leave Request</h3>
                                    <div class="ml-auto">
                                        <span class="badge badge-md badge-warning-light">2 days left</span>
                                    </div>
                                </div>
                                <div class="d-flex p-4">
                                    <div>
                                        <div class="avatar avatar-lg brround d-block cover-image" data-image-src="<?php echo e(URL::asset('assets/images/users/12.jpg')); ?>"></div>
                                    </div>
                                    <div class="pl-3">
                                        <h5 class="mb-0 mt-2 text-dark fs-18">Max Wilson</h5>
                                        <p class="text-muted fs-12 mt-1 mb-0">Development <span class="my-auto fs-9 font-weight-normal  ml-1 mr-1 text-black-20">/</span> PHP Developer</p>
                                    </div>
                                </div>
                                <div class="card-body pt-2 bg-light">
                                    <div class="mt-3 mb-3">
                                        <div class="h5 mb-1">
                                            <span class="feather feather-calendar"></span> : 09-01-2021
                                            <span class="badge badge-md badge-primary-light ml-1">1 day</span>
                                        </div>
                                        <small class="text-muted fs-11">Applied On: 08-01-2021 On<span class="font-weight-semibold"> 4 Weeks ago</span></small>
                                    </div>
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-success w-70"></div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mb-0">
                                        <h6 class="fs-12 mb-0">Remaining Leaves</h6>
                                        <h6 class="font-weight-bold fs-12 mb-0">17</h6>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <label class="form-label">Reason:</label>
                                    <p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                </div>
                                <div class="card-footer p-0 border-top-0">
                                    <div class="btn-group w-100 leaves-btns">
                                        <a href="#" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
                                        <a href="#" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\hrm\time-attendance\hr-recentleaves.blade.php ENDPATH**/ ?>