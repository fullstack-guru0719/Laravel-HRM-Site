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
            <h4 class="page-title">Notice Board</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addnoticemodal">Add New Notice</a>
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
                <div class="card-header  border-0">
                    <h4 class="card-title">Notice Summary</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-notice">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 w-5">No</th>
                                <th class="border-bottom-0">Title</th>
                                <th class="border-bottom-0">Description</th>
                                <th class="border-bottom-0">To</th>
                                <th class="border-bottom-0">Create On</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>Board meeting Completed</td>
                                <td>Attend the  company mangers & teamleads.</td>
                                <td>Employees</td>
                                <td>18-02-2021</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-toggle="tooltip" data-placement="top" title="Edit/View"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Updated the Company Policy</td>
                                <td>some changes & add the terms & conditions.</td>
                                <td>Employees</td>
                                <td>16-02-2021</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-toggle="tooltip" data-placement="top" title="Edit/View"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Office Timings Changed</td>
                                <td>This effetct after March 01st 9:00 Am To 5:00 Pm</td>
                                <td>Employees</td>
                                <td>17-02-2021</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-toggle="tooltip" data-placement="top" title="Edit/View"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Republic Day Celebrated</td>
                                <td>Participate the all employess</td>
                                <td>Employees</td>
                                <td>26-01-2021</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-toggle="tooltip" data-placement="top" title="Edit/View"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Client meeting Completed</td>
                                <td>Participate the all the managers</td>
                                <td>Employees</td>
                                <td>12-01-2021</td>
                                <td><span class="badge badge-danger">InActive</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-toggle="tooltip" data-placement="top" title="Edit/View"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Update the Employee Leave Policy</td>
                                <td>Participate the all employess</td>
                                <td>Employees</td>
                                <td>02-01-2021</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-toggle="tooltip" data-placement="top" title="Edit/View"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>Faith Harris, Please sent the email</td>
                                <td>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</td>
                                <td>Employees</td>
                                <td>26-01-2021</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-toggle="tooltip" data-placement="top" title="Edit/View"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>Update the Agreement Policy</td>
                                <td>There are many variations of passages of  but the majority have suffered alteration </td>
                                <td>Employees</td>
                                <td>12-02-2021</td>
                                <td><span class="badge badge-danger">InActive</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-toggle="tooltip" data-placement="top" title="Edit/View"></i></a>
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

    <!-- Add leave Modal -->
    <div class="modal fade"  id="addnoticemodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Notice</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input class="form-control" placeholder="Text">
                    </div>
                    <div class="form-group">
                        <div class="custom-controls-stacked d-md-flex">
                            <label class="custom-control custom-radio success mr-4">
                                <input type="radio" class="custom-control-input" name="example-radios1" value="option1">
                                <span class="custom-control-label">To Employees</span>
                            </label>
                            <label class="custom-control custom-radio success">
                                <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                                <span class="custom-control-label">To Clients</span>
                            </label>
                        </div>
                    </div>
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
                    <div class="form-group">
                        <label class="form-label">Description:</label>
                        <div class="summernote"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Attachment:</label>
                        <div class="input-group file-browser">
                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                            <label class="input-group-append mb-0">
										<span class="btn ripple btn-primary">
											Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
										</span>
                            </label>
                        </div>
                    </div>
                    <div class="custom-controls-stacked d-md-flex">
                        <label class="form-label mt-1 mr-5">Status :</label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="example-radios2" value="option3">
                            <span class="custom-control-label">To Employees</span>
                        </label>
                        <label class="custom-control custom-radio success">
                            <input type="radio" class="custom-control-input" name="example-radios2" value="option4">
                            <span class="custom-control-label">To Clients</span>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button  class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add leave Modal -->

    <!-- Edit Notice Modal -->
    <div class="modal fade"  id="editnoticemodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Leaves</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input class="form-control" placeholder="Text" value="Board meeting Completed">
                    </div>
                    <div class="form-group">
                        <div class="custom-controls-stacked d-md-flex">
                            <label class="custom-control custom-radio success mr-4">
                                <input type="radio" class="custom-control-input" name="example-radios3" value="option5" checked>
                                <span class="custom-control-label">To Employees</span>
                            </label>
                            <label class="custom-control custom-radio success">
                                <input type="radio" class="custom-control-input" name="example-radios3" value="option6">
                                <span class="custom-control-label">To Clients</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Select Date:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="feather feather-calendar"></i>
                                </div>
                            </div><input class="form-control fc-datepicker" placeholder="18-02-2021" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description:</label>
                        <div class="summernote">Attend the company mangers & teamleads.</div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Attachment:</label>
                        <div class="input-group file-browser">
                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                            <label class="input-group-append mb-0">
										<span class="btn ripple btn-primary">
											Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
										</span>
                            </label>
                        </div>
                    </div>
                    <div class="custom-controls-stacked d-md-flex">
                        <label class="form-label mt-1 mr-5">Status :</label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="example-radios2" value="option7" checked>
                            <span class="custom-control-label">Active</span>
                        </label>
                        <label class="custom-control custom-radio success">
                            <input type="radio" class="custom-control-input" name="example-radios2" value="option8">
                            <span class="custom-control-label">Inactive</span>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button  class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Notice Modal -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/hr/hr-notice.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\hrm\hr-notice.blade.php ENDPATH**/ ?>