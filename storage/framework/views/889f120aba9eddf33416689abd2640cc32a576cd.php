<?php $__env->startSection('styles'); ?>

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAl Summernote css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.css')); ?>">

    <!-- INTERNAL Datepicker css-->
    <link href="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Job Lists</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="job/job-new" class="btn btn-primary"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Add New Job</a>
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
                        <div class="col-xl-5 col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">From:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="feather feather-calendar"></i>
                                                </div>
                                            </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">To:</label>
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
                        <div class="col-xl-5 col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Job Type:</label>
                                        <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Job Type">
                                            <option label="Select Job Type"></option>
                                            <option value="1">Full-Time</option>
                                            <option value="2">Part-Time</option>
                                            <option value="3">Freelancer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Status:</label>
                                        <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Status">
                                            <option label="Select Status"></option>
                                            <option value="1">Active</option>
                                            <option value="2">InActive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-12">
                            <div class="form-group mt-5">
                                <a href="#" class="btn btn-primary btn-block">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="job-list">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">No</th>
                                <th class="border-bottom-0">Position</th>
                                <th class="border-bottom-0">Type</th>
                                <th class="border-bottom-0">Posted Date</th>
                                <th class="border-bottom-0">Last Date to Apply</th>
                                <th class="border-bottom-0">Close Date</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>
                                    <a href="#">Senior PHP Developer</a>
                                </td>
                                <td>Full-Time</td>
                                <td>12-01-2021</td>
                                <td>24-01-2021</td>
                                <td>25-01-2021</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="<?php echo e(url('job/job-view')); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editjobtmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
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
    <!-- End Row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>


    <!-- Edit Job Modal -->
    <div class="modal fade"  id="editjobtmodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Job</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Position</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Name" value="Senior PHP Developer">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Job Type</label>
                            </div>
                            <div class="col-md-9">
                                <select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Job Type">
                                    <option label="Select Job Type"></option>
                                    <option value="1" selected>Full-Time</option>
                                    <option value="2">Part-Time</option>
                                    <option value="3">Freelancer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Description</label>
                            </div>
                            <div class="col-md-9">
                                <div class="summernote">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Posted Date</label>
                            </div>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text" value="12-01-2021">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Last Date To Apply</label>
                            </div>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text" value="24-01-2021">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Close Date</label>
                            </div>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text" value="25-01-2021">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label mb-0 mt-1">Status</label>
                        </div>
                        <div class="col-md-9">
                            <div class="custom-controls-stacked d-md-flex">
                                <label class="custom-control custom-radio success mr-4">
                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked>
                                    <span class="custom-control-label">Active</span>
                                </label>
                                <label class="custom-control custom-radio success mr-4">
                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                                    <span class="custom-control-label">InActive</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button  class="btn btn-success" onclick="not1()">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Job Modal -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/job/job-list.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views/common_pages/job-dashboard/job-list.blade.php ENDPATH**/ ?>