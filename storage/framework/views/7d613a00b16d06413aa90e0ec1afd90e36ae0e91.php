<?php $__env->startSection('styles'); ?>

    <!-- Notifications  Css -->
    <link href="<?php echo e(URL::asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet" />

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
            <h4 class="page-title">Not Started Task List</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="<?php echo e(url('task/task-new')); ?>" class="btn btn-primary "><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Task</a>
                 </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <a href="<?php echo e(url('task/task-list')); ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left">
                                    <span class="fs-16 font-weight-semibold">Total Tasks</span>
                                    <h3 class="mb-0 mt-1 text-danger  fs-25"><?php echo sizeof($tasks); ?></h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-danger-transparent my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <a href="<?php echo e(url('task/task-running')); ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left">
                                    <span class="fs-16 font-weight-semibold">In Progress Tasks</span>
                                    <h3 class="mb-0 mt-1 text-primary  fs-25"><?php echo sizeof($in_progress_tasks); ?></h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-primary-transparent my-auto  float-right"> <i class="feather feather-clipboard"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <a href="<?php echo e(url('task/task-hold')); ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left">
                                    <span class="fs-16 font-weight-semibold">Not Started Tasks</span>
                                    <h3 class="mb-0 mt-1 text-warning  fs-25"><?php echo sizeof($not_started_tasks); ?></h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-secondary-transparent my-auto  float-right"> <i class="feather feather-info"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <a href="<?php echo e(url('task/task-complete')); ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="mt-0 text-left">
                                    <span class="fs-16 font-weight-semibold">Completed Tasks</span>
                                    <h3 class="mb-0 mt-1 text-success fs-25"><?php echo sizeof($completed_tasks); ?></h3>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="icon1 bg-success-transparent my-auto  float-right"> <i class="feather feather-check"></i> </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Row-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Not Started Task Summary</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="task-list">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 text-center">No</th>
                                <th class="border-bottom-0">Task</th>
                                <th class="border-bottom-0">Department</th>
                                <th class="border-bottom-0">Assign To</th>
                                <th class="border-bottom-0">Priority</th>
                                <th class="border-bottom-0">Start Date</th>
                                <th class="border-bottom-0">Deadline</th>
                                <th class="border-bottom-0">Progress</th>
                                <th class="border-bottom-0">Work Status</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $not_started_tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo $task->t_number; ?></td>
                                <td>
                                    <a href="<?php echo e(url('task/task-view/'.$task->id)); ?>" class="d-flex sidebarmodal-collpase">
                                        <span class="bg-warning dot-label1 mr-2 mt-1"></span>
                                        <span><?php echo $task->t_title; ?></span>
                                    </a>
                                </td>
                                <td><?php echo $task->department->department_name; ?></td>
                                <td>
                                    <a href="<?php echo e(url('task/task-profile')); ?>" class="d-flex">
                                        <span class="avatar avatar brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/1.png')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14"><?php echo $task->user->user_id; ?></h6>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <?php if($task->t_priority == 1): ?>
                                        <span class="badge badge-danger-light">High</span>
                                    <?php elseif($task->t_priority == 2): ?> 
                                        <span class="badge badge-warning-light">Medium</span>
                                    <?php else: ?><span class="badge badge-success-light">Low</span></td>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$task->start_date)->format('d-m-Y'); ?></td>
                                <td><?php echo \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$task->end_date)->format('d-m-Y'); ?></td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary w-30"></div>
                                    </div>
                                </td>
                                <td>
                                    <?php if($task->status==2): ?>
                                     <span class="badge badge-warning">Not Started</span>
                                    <?php elseif( $task->status ==1 ): ?>
                                        <span class="badge badge-success">Completed</span>
                                    <?php else: ?> <span class="badge badge-primary">In Progress</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="<?php echo e(url('task/task-view/'.$task->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#edittsakmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit task"></i>
                                        </a>
                                        <a href="<?php echo e(url('task/task-delete/'.$task->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
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
    <!-- End Row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Notifications js -->
    <script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>

    <!--INTERNAL Chart js -->
    <script src="<?php echo e(URL::asset('assets/plugins/chart/chart.bundle.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/chart/utils.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/task/meeting-list.js')); ?>"></script>

    <script>
        $(function() {

            $("#task-list").dataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\task-dashboard\task-hold.blade.php ENDPATH**/ ?>