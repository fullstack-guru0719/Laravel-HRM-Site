<?php $__env->startSection('styles'); ?>

<link  href="<?php echo e(URL::asset('assets/css/custom.css')); ?>" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">


<!-- Notifications  Css -->
<link href="<?php echo e(URL::asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet" />


<!-- INTERNAL Time picker css -->
<link href="<?php echo e(URL::asset('assets/plugins/time-picker/jquery.timepicker.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/plugins/jquery-ui/jquery-ui.css')); ?>" rel="stylesheet" />



<!-- INTERNAl Summernote css -->
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.css')); ?>">


<link  href="<?php echo e(URL::asset('assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet"/>


<style>
    .kbw-signature { width: 100%; height: 200px;}
    #sig canvas{ width: 100% !important; height: auto;}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Update Work Order</h4>
        </div>

    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <form method="POST" action="<?php echo e(url('workOrder/workOrder-update')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div style="margin: 0px 20px; border-bottom: 1px solid #000;"><h4>Customer Details</h4></div>
                    <div class="card-body">
    
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Work Order #</label>
                                <div class="form-group">
                                    <input class="form-control" name="work_order" value="<?php echo e($current_order->work_order); ?>" readonly required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bill to:</label>
                                <div class="form-group">
                                    <input class="form-control" name="current_order_id" value="<?php echo e($current_order->id); ?>" required hidden readonly>
                                    <input class="form-control" name="bill_to" value="<?php echo e($current_order->bill_to); ?>" required>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Address:</label>
                                <div class="form-group">
                                    <input class="form-control" name="address" value="<?php echo e($current_order->address); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone:</label>
                                <div class="form-group">
                                    <input class="form-control" name="phone_number" value="<?php echo e($current_order->phone_number); ?>" required>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">City:</label>
                                <div class="form-group">
                                    <input class="form-control" name="city" value="<?php echo e($current_order->city); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Order Taken by:</label>
                                <div class="form-group">
                                    <input class="form-control" name="order_taken_by" value="<?php echo e($current_order->order_taken_by); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Email:</label>
                                <div class="form-group">
                                    <input  type="email" class="form-control" name="email" value="<?php echo e($current_order->email); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">REF Quote #</label>
                                <div class="form-group">
                                    <input class="form-control" name="ref" value="<?php echo e($current_order->ref); ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="card">
                    <div style="margin: 0px 20px; border-bottom: 1px solid #000;"><h4>Time of Work</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Start Date & Time:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="feather feather-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <input class="form-control date" name="start_date" value="<?php echo e($start_date); ?>" type="text" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="wd-150 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <span class="feather feather-clock"></span>
                                                            </div>
                                                        </div><!-- input-group-prepend -->
                                                        <input class="form-control timepicker" name="start_time" value="<?php echo e($current_order->start_time); ?>" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">End Date & Time:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="feather feather-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <input class="form-control date" name="end_date" value="<?php echo e($end_date); ?>" type="text" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="wd-150 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <span class="feather feather-clock"></span>
                                                            </div>
                                                        </div><!-- input-group-prepend -->
                                                        <input class="form-control timepicker" name="end_time" value="<?php echo e($current_order->end_time); ?>" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
    
    
                        </div>
                        <div style="margin: 0px ; border-bottom: 1px solid #000;"><h4>Type of Work</h4></div>
                        <br>
                        <div class="row container">
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">Installation</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                        <span class="custom-control-label">Maintenance</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                        <span class="custom-control-label with-input">Other:Specially<input class="form-control" placeholder="Specify" type="text"></span>
                                    </label>
                                    <label class="custom-control ">
                                        <span class="">Technician Names<input class="form-control" name="tech_name" value="<?php echo e($current_order->tech_name); ?>" type="text"></span>
                                    </label>
                                </div>
                        </div>
    
                    </div>
                </div>
    
    
                <div class="card">
                    <div style="margin: 0px 20px; border-bottom: 1px solid #000;"><h4>Description of Work</h4></div>
                    <div class="card-body">
                        <div class="form-group">
                            <textarea name="description" id="summernote" class="summernote"><?php echo e($current_order->description); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label><span style="font-size: 16px">Upload Scanned Work Order, if available</span></label>
                            <div class="input-group file-browser">
                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                <label class="input-group-append mb-0">
                                    <span class="btn ripple btn-primary">
                                        Browse <input type="file" name="work_order_files[]" class="file-browserinput"  style="display: none;" multiple>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div style="margin: 0px 20px; border-bottom: 1px solid #000;"><h4>Digital Signature</h4></div>
                    <div class="card-body">
                        <div id="signaturePad" ></div>
                            <br/>
                            <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
                            <textarea id="signature64" name="signed" style="display: none" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-success ">Update</button>
                        <a href="<?php echo e(url('workOrder/index')); ?>" class="btn btn-danger ">Close</a>
                        <button  class="btn btn-danger"><i class="si si-share"> Share</i></button>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
    <!-- End Row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


    <!-- INTERNAL Timepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/time-picker/jquery.timepicker.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/time-picker/toggles.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>


    <!-- INTERNAL Summernote js  -->
    <script src="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/js/custome.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

    
    <script>
        $(document).ready(function() {
            $('.date').datetimepicker({
                format: 'DD-MM-YYYY',
                locale: 'en'
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82'],
                toolbar: [
                ['style', ['clear','bold', 'italic', 'underline']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['view', ['codeview']]
                ],
                height: 300,       
            });
        });
    </script>

    <script>
        var signaturePad = $('#signaturePad').signature({syncField: '#signature64', syncFormat: 'PNG'});
        $('#clear').click(function(e) {
            e.preventDefault();
            signaturePad.signature('clear');
            $("#signature64").val('');
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\DMS\resources\views/common_pages/work-order-dashboard/work-order-edit.blade.php ENDPATH**/ ?>