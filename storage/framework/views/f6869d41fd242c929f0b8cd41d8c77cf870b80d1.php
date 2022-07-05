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
            <h4 class="page-title"><span class="font-weight-normal text-muted mr-2"><?php echo $parent->p_number; ?></span></h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="<?php echo e(url('project/project-new')); ?>" class="btn btn-primary "><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Project</a>
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
                    <div class="card-title">Project Details</div>
                </div>
                <div class="card-body pt-2 pl-3 pr-3">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <span class="w-50">Client</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo $parent->client; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Department</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo $parent->department->department_name; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Start Date</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$parent->start_date )->format('d-m-Y'); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Deadline</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$parent->end_date )->format('d-m-Y'); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Budget</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold">$<?php echo $parent->p_price; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Priority</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <?php if($parent->p_priority == 1): ?>
                                        <span class="badge badge-danger-light">High</span>
                                    <?php elseif($parent->p_priority == 2): ?> 
                                        <span class="badge badge-warning-light">Medium</span>
                                    <?php else: ?><span class="badge badge-success-light">Low</span></td>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header  border-0">
                    <div class="card-title">Assigned Team</div>



                </div>
                <div class="card-body p-1 pt-2">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/4.png')); ?>)"></span>
                                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                <h6 class="mb-1 fs-14"><?php echo $child->user->name; ?></h6>
                                                <p class="text-muted mb-0 fs-12">App Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chart-circle chart-circle-xxs" data-value="0.62" data-thickness="3" data-color="#0dcd94" data-toggle="tooltip" data-placement="top" title="Project Status">
                                            <div class="chart-circle-value text-success">62</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex mt-1 text-right">
                                            <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
                                            <a href="#" class="action-btns1  mr-0" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
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
        <div class="col-xl-9 col-md-12 col-lg-12">
            <div class="tab-menu-heading hremp-tabs p-0 ">
                <div class="tabs-menu1">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class="ml-4"><a href="#tab5" class="active"  data-toggle="tab">Overview</a></li>
                        
                        <li><a href="#tab_files"  data-toggle="tab">Files</a></li>

                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <h2 class="mb-4 font-weight-semibold">Description</h2>
                            <h3><?php echo $child->description; ?></h3>
                            </div>
                    </div>
                    <div class="tab-pane" id="tab_files">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="files-tables">
                                    <thead>
                                    <tr>
                                        <th class="border-bottom-0 text-center w-5">No</th>
                                        <th class="border-bottom-0">File Name</th>
                                        <th class="border-bottom-0">Upload By</th>
                                        <th class="border-bottom-0">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($p_files!=null): ?>
                                            <?php $__currentLoopData = $p_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-center"><?php echo e($loop->index + 1); ?></td>
                                                    <td>
                                                        <a href="#" class="font-weight-semibold fs-14 mt-5"><?php echo $file->f_name; ?>

                                                            
                                                        </a>
                                                        <div class="clearfix">

                                                        </div>
                                                        
                                                    </td>
                                                    <td>Client</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            
                                                            <a href="<?php echo e(url('project/project_file-download/'.$file->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                                            <a href="<?php echo e(url('project/project_file-delete/'.$file->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
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

    <!--INTERNAL Chart js -->
    <script src="<?php echo e(URL::asset('assets/plugins/chart/chart.bundle.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/chart/utils.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/project/project-view.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/project/project-sidemenuchart.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\project-dashboard\project-view.blade.php ENDPATH**/ ?>