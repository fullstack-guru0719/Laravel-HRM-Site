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
            <h4 class="page-title"><span class="font-weight-normal text-muted mr-2"><?php echo e($current_order->order_number); ?></span></h4>
        </div>

        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="row">
                    <div class="col-md-2 btn-list">
                      
                    </div>
                    <div class="col-md-2 btn-list">
                        <a href="<?php echo e(url('workOrder/workOrder-convert/'.$current_order->id)); ?>" class="btn btn-primary " ><i class="fa fa-file-text"></i> PDF</a>
                    </div>
                    <div class="col-md-2 btn-list">
                        
                    </div>
                    <div class="col-md-2 btn-list">
                        <a href="<?php echo e(url('workOrder/workOrder-edit/'.$current_order->id)); ?>" class="btn btn-primary " ><i class="feather feather-edit-2  text-success"></i> EDIT</a>
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
                    <div class="card-title">Work Order</div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive mt-5">
                        <table class="table mb-0">
                            <tbody>
                            
                            <tr>
                                <td>
                                    <span class="w-50">Start Date</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$current_order->start_date)->format('d-m-Y'); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">End Date</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$current_order->end_date)->format('d-m-Y'); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Bill To</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo $current_order->bill_to; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">City</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo $current_order->city; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="w-50">Email</span>
                                </td>
                                <td>:</td>
                                <td>
                                    <span class="font-weight-semibold"><?php echo $current_order->email; ?></span>
                                </td>
                            </tr>
                            
                            
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
                                <p><?php echo $current_order->description; ?></p>
                            </div>
                            <h2 class="mb-4 font-weight-semibold">Digital Signature</h2>
                            <?php if( $current_order->signature!=null): ?>
                                <img src="<?php echo e($current_order->signature); ?>">   
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="tab-pane" id="tabAttachment">
                        <div class="card-body attachments-doc">
                            <div class="row">
                                <?php if($order_files!=null): ?>
                                    <?php $__currentLoopData = $order_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-12 col-xl-4">
                                            <div class="list-group-item  align-items-center">
                                                <div class="d-md-flex">
                                                    <img src="<?php echo e(URL::asset('assets/images/files/attachments/2.png')); ?>" alt="img" class="avatar bg-transparent avatar-xl mr-2">
                                                    <a href="#" class="font-weight-semibold fs-14 mt-5"><?php echo e($file->f_name); ?></a>
                                                    <div class="ml-auto d-flex mt-4 text-right">
                                                        <a href="<?php echo e(url('workOrder/order_file-download/'.$file->id)); ?>" class="action-btns1"><i class="feather feather-download-cloud text-primary"></i></a>
                                                        <a href="<?php echo e(url('workOrder/order_file-delete/'.$file->id)); ?>" class="action-btns1  mr-0"><i class="feather feather-trash-2 text-danger"></i></a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\DMS\resources\views/common_pages/work-order-dashboard/work-order-view.blade.php ENDPATH**/ ?>