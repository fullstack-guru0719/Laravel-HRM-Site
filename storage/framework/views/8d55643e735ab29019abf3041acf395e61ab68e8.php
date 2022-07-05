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
            <h4 class="page-title">Deleted WorkOrder List</h4>
        </div>
    </div>
    <!--End Page header-->


    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Deleted Work Orders History</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="workOrder-list">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">WorkOrder Number</th>
                                <th class="border-bottom-0">Start Date</th>
                                <th class="border-bottom-0">End Date</th>
                                <th class="border-bottom-0">Bill to</th>
                                <th class="border-bottom-0">City</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $real_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $real_order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($real_order->order_number); ?></td>
                                        <td><?php echo e(\Illuminate\Support\Carbon::createFromFormat('Y-m-d',$real_order->start_date)->format('d-m-Y')); ?></td>
                                        <td><?php echo e(\Illuminate\Support\Carbon::createFromFormat('Y-m-d',$real_order->end_date)->format('d-m-Y')); ?></td>
                                        <td><?php echo e($real_order->bill_to); ?></td>
                                        <td>
                                            <h6 class="mb-1 fs-14"><?php echo e($real_order->city); ?></h6>
                                        </td>
                                        <td> <h6 class="mb-1 fs-14"><?php echo e($real_order->email); ?></h6></td>
                                        <td>
                                            <div class="d-flex">
                                                
                                                <a href="<?php echo e(url('workOrder/workOrder-view/'.$real_order->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View WorkOrder"><i class="feather feather-eye text-primary"></i></a>
                                                <a href="<?php echo e(url('workOrder/workOrder-restore/'.$real_order->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Restore"><i class="fa fa-mail-reply"></i></a>
                                                <a href="<?php echo e(url('workOrder/workOrder-empty/'.$real_order->id)); ?>" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Empty WorkOrder"><i class="feather feather-trash-2 text-danger"></i></a>
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

    <script>
        $(function() {

            $("#workOrder-list").dataTable();
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\work-order-dashboard\deleted-list.blade.php ENDPATH**/ ?>