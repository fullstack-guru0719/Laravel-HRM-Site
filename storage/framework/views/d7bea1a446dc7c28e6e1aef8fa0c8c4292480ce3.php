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
            <h4 class="page-title">Job Applications</h4>
        </div>
        
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="job-applictaion">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">No</th>
                                <th class="border-bottom-0">Position</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Phone Number</th>
                                <th class="border-bottom-0">Applied On</th>
                                <th class="border-bottom-0">Submitted By</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $job_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($job_user->job_user_number); ?></td>
                                    <td>
                                        <a href="#"><?php echo e($job_user->job->job_position); ?></a>
                                    </td>
                                    <td><?php echo e($job_user->name); ?></td>
                                    <td><?php echo e($job_user->email); ?></td>
                                    <td><?php echo e($job_user->phone_number); ?></td>
                                    <td><?php echo e($job_user->created_at); ?></td>
                                    <td><?php echo e($job_user->name); ?></td>
                                    <td>
                                        <?php if($job_user->status==0): ?>
                                            <span class="badge badge-warning">Pending</span>
                                            <?php elseif($job_user->status==1): ?>
                                                <span class="badge badge-primary">Selected</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Rejected</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="<?php echo e(url('job/job-application-accept/'.$job_user->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Accept">
                                                <i class="feather feather-check text-success" ></i>
                                            </a>
                                            <a href="<?php echo e(url('job/job-application-reject/'.$job_user->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                <i class="feather feather-x text-danger"></i>
                                            </a>
                                            
                                            <a href="<?php echo e(url('job/job-application-delete/'.$job_user->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="feather feather-trash-2 text-danger"></i>
                                            </a>
                                            <a href="<?php echo e(url('job/job-application-download/'.$job_user->id)); ?>" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                                <i class="feather feather-download  text-secondary"></i>
                                            </a>
                                        </div>
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
    <!-- End Row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>



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
    <script src="<?php echo e(URL::asset('assets/js/job/job-application.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\job-dashboard\job-application.blade.php ENDPATH**/ ?>