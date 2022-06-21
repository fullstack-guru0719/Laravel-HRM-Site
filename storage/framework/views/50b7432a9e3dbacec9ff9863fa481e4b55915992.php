<?php $__env->startSection('styles'); ?>

    <!-- Notifications  Css -->
    <link href="<?php echo e(URL::asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet" />

    <!-- INTERNAl Summernote css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.css')); ?>">

    <!-- INTERNAL Datepicker css-->
    <link href="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">New Job</h4>
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Name</label>
                                <input class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Job Position</label>
                                <input class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Job Category</label>
                                <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Job Category">
                                    <option label="Select Job Category"></option>
                                    <option value="1">PHP Developer</option>
                                    <option value="2">UX Designer</option>
                                    <option value="3">UI Designer</option>
                                    <option value="4">SEO Specialist</option>
                                    <option value="5">Wordpress Developer</option>
                                    <option value="6">Accountant</option>
                                    <option value="7">Software Engineer</option>
                                    <option value="7">Angular Developer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Job Type:</label>
                                <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Job Type">
                                    <option label="Select Job Type"></option>
                                    <option value="1">Full-Time</option>
                                    <option value="2">Part-Time</option>
                                    <option value="3">Freelancer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">No.of Vacancy</label>
                                <input class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Experiences</label>
                                <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Experience">
                                    <option label="Select Experience"></option>
                                    <option value="1">Fresher</option>
                                    <option value="2">1 yr</option>
                                    <option value="3">2 yrs</option>
                                    <option value="3">3 yrs</option>
                                    <option value="3">4 yrs</option>
                                    <option value="3">5 yrs</option>
                                    <option value="3">6 yrs</option>
                                    <option value="3">7 yrs</option>
                                    <option value="3">8 yrs</option>
                                    <option value="3">9 yrs</option>
                                    <option value="3">10 yrs</option>
                                    <option value="3">10+ yrs</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Posted Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Last Date To Apply</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Close Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Gender:</label>
                                <select  class="form-control custom-select select2" data-placeholder="Select Gender">
                                    <option label="Select Gender"></option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Salary Form</label>
                                <input class="form-control" placeholder="$0.00">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Salary To</label>
                                <input class="form-control" placeholder="$0.00">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Enter City:</label>
                                <input class="form-control" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Enter State:</label>
                                <input class="form-control" placeholder="State">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Enter Country:</label>
                                <input class="form-control" placeholder="Country">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Enter Education Level:</label>
                                <input class="form-control" placeholder="Education Level">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description:</label>
                        <div class="summernote"></div>
                    </div>
                    <div class="custom-controls-stacked d-md-flex">
                        <label class="form-label mt-1 mr-5">Status :</label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="example-radios1" value="option1">
                            <span class="custom-control-label">Active</span>
                        </label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                            <span class="custom-control-label">InActive</span>
                        </label>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-danger btn-lg">Close</a>
                    <a href="#" class="btn btn-success btn-lg" onclick="not1()">Submit</a>
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

    <!-- Notifications js -->
    <script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/job/job-apply.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views/common_pages/job-dashboard/job-new.blade.php ENDPATH**/ ?>