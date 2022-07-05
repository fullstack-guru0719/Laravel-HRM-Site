<?php $__env->startSection('styles'); ?>

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Employees</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="<?php echo e(url('hrm/employee/hr-addemployee')); ?>" class="btn btn-primary mr-3">Add New Employee</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row-->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="mt-0 text-left"> <span class="font-weight-semibold">Total Employees</span>
                                <h3 class="mb-0 mt-1 text-success"><?php echo e(sizeof($employees)); ?></h3>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="icon1 bg-success-transparent my-auto  float-right"> <i class="las la-users"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="mt-0 text-left"> <span class="font-weight-semibold">Total Male Employees</span>
                                <h3 class="mb-0 mt-1 text-primary"><?php echo e(sizeof($male_employees)); ?></h3>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="icon1 bg-primary-transparent my-auto  float-right"> <i class="las la-male"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="mt-0 text-left"> <span class="font-weight-semibold">Total Female Employees</span>
                                <h3 class="mb-0 mt-1 text-secondary"><?php echo e(sizeof($female_employees)); ?></h3> </div>
                        </div>
                        <div class="col-5">
                            <div class="icon1 bg-secondary-transparent my-auto  float-right"> <i class="las la-female"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="mt-0 text-left"> <span class="font-weight-semibold">Total New Employees</span>
                                <h3 class="mb-0 mt-1 text-danger"></h3> </div>
                        </div>
                        <div class="col-5">
                            <div class="icon1 bg-danger-transparent my-auto  float-right"> <i class="las la-user-friends"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Employees List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 w-5">No</th>
                                <th class="border-bottom-0">Emp Name</th>
                                <th class="border-bottom-0 w-10">#Emp ID</th>
                                <th class="border-bottom-0">Department</th>
                                <th class="border-bottom-0">Designation</th>
                                <th class="border-bottom-0">Phone Number</th>
                                <th class="border-bottom-0">Join Date</th>
                                <th class="border-bottom-0">At work</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index + 1); ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('/images/'.$employee->photo)); ?>)"></span>
                                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                <h6 class="mb-1 fs-14"><?php echo e($employee->first_name. ' '.$employee->last_name); ?></h6>
                                                <p class="text-muted mb-0 fs-12"><?php echo e($employee->email); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo e($employee->em_number); ?></td>
                                    <td><?php echo e($employee->department->department_name); ?></td>
                                    <td><?php echo e($employee->designation); ?></td>
                                    <td><?php echo e($employee->phone_number); ?></td>
                                    <td><?php echo e($employee->join_date); ?></td>
                                    <td>3 yrs 1 mons 13 days</td>
                                    <td><?php if($employee->status=="on"): ?>
                                            <span class="badge badge-success">Active</span>
                                            <?php else: ?>
                                            <span class="badge badge-danger">Inctive</span>
                                        <?php endif; ?>
                                        
                                    </td>
                                    <td>
                                        
                                        <a class="btn btn-primary btn-icon btn-sm"  href="<?php echo e(url('hrm/employee/hr-empview/'.$employee->id)); ?>">
                                            <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                        </a>
                                        <a href="<?php echo e(url('hrm/employee/hr-empdelete/'.$employee->id)); ?>" class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/hr/hr-emp.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\hrm\employee\hr-emplist.blade.php ENDPATH**/ ?>