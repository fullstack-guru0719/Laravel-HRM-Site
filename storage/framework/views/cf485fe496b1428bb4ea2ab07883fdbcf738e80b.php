<?php $__env->startSection('styles'); ?>

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Datepicker css-->
    <link href="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Edit Payroll</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="<?php echo e(url('hr-addpayroll')); ?>" class="btn btn-primary mr-3">Add New Payroll</a>
                    <button  class="btn btn-secondary mr-3" data-toggle="modal" data-target="#excelmodal">
                        <i class="las la-file-excel"></i>  Download Monthly Excel Report
                    </button>
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
                        <div class="col-md-12 col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Employee Name:</label>
                                <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Employee">
                                    <option label="Select Employee"></option>
                                    <option value="1" selected>Faith Harris</option>
                                    <option value="2">Austin Bell</option>
                                    <option value="3">Maria Bower</option>
                                    <option value="4">Peter Hill</option>
                                    <option value="5">Victoria Lyman</option>
                                    <option value="6">Adam Quinn</option>
                                    <option value="7">Melanie Coleman</option>
                                    <option value="8">Max Wilson</option>
                                    <option value="9">Amelia Russell</option>
                                    <option value="10">Justin Metcalfe</option>
                                    <option value="11">Ryan Young</option>
                                    <option value="12">Jennifer Hardacre</option>
                                    <option value="13">Justin Parr</option>
                                    <option value="14">Julia Hodges</option>
                                    <option value="15">Michael Sutherland</option>
                                </select>
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
    <!-- End Row -->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Salary Information</h4>
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Basic Salary</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="$32,000">
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Expense Claim</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mt-1 mr-5">Status :</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <div class="custom-controls-stacked d-md-flex">
                                    <label class="custom-control custom-radio success mr-4">
                                        <input type="radio" class="custom-control-input" name="example-radios2" value="option1" checked>
                                        <span class="custom-control-label">Paid</span>
                                    </label>
                                    <label class="custom-control custom-radio success mr-4">
                                        <input type="radio" class="custom-control-input" name="example-radios2" value="option2">
                                        <span class="custom-control-label">Unpaid</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Allowances</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">HRA Allowance</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Conveyance</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Medical Allowance</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Bonus Allowance</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                            <div class="col-md-12 col-lg-2">
                                <a class="btn btn-primary btn-success text-white  mt-4 mt-lg-0"><i class="fa fa-plus mr-1"></i>Add</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Deduction</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">PF</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Professional Tax</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">TDS</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Loans & Others</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                            <div class="col-md-12 col-lg-2">
                                <a class="btn btn-primary btn-success text-white  mt-4 mt-lg-0"><i class="fa fa-plus mr-1"></i>Add</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Gross Salary</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Total Allowances</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Total Deduction</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <label class="form-label mb-0 mt-2">Net Salary</label>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <input type="text" class="form-control" placeholder="0" value="$32,000">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-2">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <a href="#" class="btn btn-primary btn-lg">Save</a>
                            <a href="#" class="btn btn-danger btn-lg">Cancle</a>
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

    <!--Excel Modal -->
    <div class="modal fade"  id="excelmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                    >Select Month & Year</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Month:</label>
                        <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Month">
                            <option label="Select Month"></option>
                            <option value="1">January</option>
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
                    <div class="form-group">
                        <label class="form-label">Year:</label>
                        <select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Year">
                            <option label="Select Year"></option>
                            <option value="1">2024</option>
                            <option value="2">2023</option>
                            <option value="3">2022</option>
                            <option value="4">2021</option>
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
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-danger" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Download</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Excel Modal  -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/hr/hr-payroll.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\hrm\payroll\hr-editpayroll.blade.php ENDPATH**/ ?>