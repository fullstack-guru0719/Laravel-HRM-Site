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
            <h4 class="page-title"><span class="font-weight-normal text-muted mr-2"><?php echo e($parent->meeting_number); ?></span></h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="row">
                    <div class="col-md-2 btn-list">
                        
                    </div>
                    <div class="col-md-2 btn-list">
                        <a href="<?php echo e(url('meeting/meeting-convert/'.$parent->id)); ?>" class="btn btn-primary " ><i class="fa fa-file-text"></i>PDF</a>
                    </div>
                    <div class="col-md-2 btn-list">
                        
                    </div>
                    <div class="col-md-2 btn-list">
                        <a href="<?php echo e(url('meeting/meeting-edit/'.$parent->id)); ?>" class="btn btn-primary " ><i class="feather feather-edit-2  text-success"></i>Edit</a>
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
                    <div class="card-title">Meeting Details</div>
                </div>
                <div class="card-body pt-2 pl-3 pr-3">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <span class="w-50">Department</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo e($parent->department->department_name); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Subject</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo e($parent->subject); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Start Date & Time</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo e(\Illuminate\Support\Carbon::createFromFormat('Y-m-d',$parent->start_date)->format('d-m-Y'). ' '. $parent->start_time); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">End Date & Time</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo e(\Illuminate\Support\Carbon::createFromFormat('Y-m-d',$parent->end_date)->format('d-m-Y') . ' '. $parent->end_time); ?></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header  border-0">
                    <div class="card-title">Attendees (Internal)</div>
                </div>
                <div class="card-body p-1 pt-2">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/4.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14"><?php echo e($child->user->name); ?></h6>
                                            <p class="text-muted mb-0 fs-12">App Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex mt-1 text-right">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
                                        
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php if($out_att_name !=[]): ?>
                <div class="card">
                    <div class="card-header  border-0">
                        <div class="card-title">Attendees (External)</div>
                    </div>
                    <div class="card-body p-1 pt-2">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <?php $__currentLoopData = $out_att_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/4.jpg')); ?>)"></span>
                                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                    <h6 class="mb-1 fs-14"><?php echo e($item); ?></h6>
                                                    <span><?php echo e($out_att_email[$key]); ?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex mt-1 text-right">
                                                <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-xl-9 col-md-12 col-lg-12">
            <div class="tab-menu-heading hremp-tabs p-0 ">
                <div class="tabs-menu1">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class="ml-4"><a href="#tab5" class="active"  data-toggle="tab">Overview</a></li>
                        <li><a href="#tab7"  data-toggle="tab">Files</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab5">
                        <div class="card-body">
                            <h2 class="mb-4 font-weight-semibold">Description</h2>
                            <h4><?php echo $parent->description; ?></h4>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab7">
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
                                    <?php if($m_files!=null): ?>
                                        <?php $__currentLoopData = $m_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                        
                                                        <a href="<?php echo e(url('meeting/meeting_file-download/'.$file->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                                        <a href="<?php echo e(url('meeting/meeting_file-delete/'.$file->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\DMS\resources\views/common_pages/meeting-dashboard/meeting-view.blade.php ENDPATH**/ ?>