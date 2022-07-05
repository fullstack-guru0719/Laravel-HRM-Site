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
            <h4 class="page-title"><span class="font-weight-normal text-muted mr-2"><?php echo e($current_task->t_number); ?></span> <?php echo e($current_task->t_title); ?> </h4>
        </div>

        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="row">
                    <div class="col-md-2 btn-list">
                        
                    </div>
                    <div class="col-md-2 btn-list">
                        
                    </div>
                    <div class="col-md-2 btn-list">
                        
                    </div>
                    <div class="col-md-2 btn-list">
                        <a href="<?php echo e(url('task/task-edit/'.$current_task->id)); ?>" class="btn btn-primary " ><i class="feather feather-edit-2  text-success"></i> EDIT</a>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-3 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <div class="card-title">Assigned To</div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div class="widget-user-image mx-auto text-center">
                            <img  class="avatar avatar-xxl brround rounded-circle" alt="img" src="<?php echo e(URL::asset('assets/images/users/1.png')); ?>">
                        </div>
                        <div class="pro-user mt-3">
                            <h5 class="pro-user-username text-dark mb-1 fs-16"><?php echo $current_task->user->name; ?></h5>
                            <h6 class="pro-user-desc text-muted fs-12">Web Designer</h6>
                        </div>
                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table mb-0">
                            <tbody>
                            <tr>
                                <td>
                                    <span class="w-50">Department</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo $current_task->department->department_name; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Start Date</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo $current_task->start_date; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Deadline</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo $current_task->end_date; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Priority</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <?php if($current_task->t_priority == 1): ?>
                                        <span class="badge badge-danger-light">High</span>
                                    <?php elseif($current_task->t_priority == 2): ?> 
                                        <span class="badge badge-warning-light">Medium</span>
                                    <?php else: ?><span class="badge badge-success-light">Low</span></td>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Work Status</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <?php if($current_task->status==2): ?>
                                     <span class="badge badge-warning">Not Started</span>
                                    <?php elseif( $current_task->status ==1 ): ?>
                                        <span class="badge badge-success">Completed</span>
                                    <?php else: ?> <span class="badge badge-primary">In Progress</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-5">
                        <h6 class="">Project Status</h6>
                        <h6 class="font-weight-bold mb-1">30%</h6>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success w-30"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-md-12 col-lg-12">
            <div class="tab-menu-heading hremp-tabs p-0 ">
                <div class="tabs-menu1">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class="ml-4"><a href="#tabDescription" class="active"  data-toggle="tab">Details</a></li>
                        <li><a href="#tabAttachment" data-toggle="tab">Attachment</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                <div class="tab-content">
                    <div class="tab-pane active" id="tabDescription">
                        <div class="card-body">
                            <h2 class="mb-4 font-weight-semibold">Description</h2>
                            <div class="main-profile-bio mb-0">
                                <p><?php echo $current_task->description; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tabAttachment">
                        <div class="card-body attachments-doc">
                            <div class="row">
                                <?php if($t_files!=null): ?>
                                    <?php $__currentLoopData = $t_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-12 col-xl-4">
                                            <div class="list-group-item  align-items-center">
                                                <div class="d-md-flex">
                                                    <img src="<?php echo e(URL::asset('assets/images/files/attachments/2.png')); ?>" alt="img" class="avatar bg-transparent avatar-xl mr-2">
                                                    <a href="#" class="font-weight-semibold fs-14 mt-5"><?php echo e($file->f_name); ?></a>
                                                    <div class="ml-auto d-flex mt-4 text-right">
                                                        <a href="<?php echo e(url('task/task_file-download/'.$file->id)); ?>" class="action-btns1"><i class="feather feather-download-cloud text-primary"></i></a>
                                                        <a href="<?php echo e(url('task/task_file-delete/'.$file->id)); ?>" class="action-btns1  mr-0"><i class="feather feather-trash-2 text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                <?php endif; ?>
                            </div>
                    
                        </div>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\task-dashboard\task-view.blade.php ENDPATH**/ ?>