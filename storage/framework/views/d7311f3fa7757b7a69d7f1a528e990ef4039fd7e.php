

<?php $__env->startSection('styles'); ?>

		<!-- INTERNAL Fancy File Upload css -->
		<link href="<?php echo e(URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')); ?>" rel="stylesheet" />

		<!-- INTERNAL Time picker css -->
		<link href="<?php echo e(URL::asset('assets/plugins/time-picker/jquery.timepicker.css')); ?>" rel="stylesheet" />

		<!-- INTERNAL Date Picker css -->
		<link href="<?php echo e(URL::asset('assets/plugins/date-picker/date-picker.css')); ?>" rel="stylesheet" />

		<!-- INTERNAL File Uploads css-->
        <link href="<?php echo e(URL::asset('assets/plugins/fileupload/css/fileupload.css')); ?>" rel="stylesheet" type="text/css" />

		<!-- INTERNAL Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/multipleselect/multiple-select.css')); ?>">

		<!-- INTERNAL Sumoselect css-->
		<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/sumoselect/sumoselect.css')); ?>">

		<!--INTERNAL IntlTelInput css-->
		<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/intl-tel-input-master/intlTelInput.css')); ?>">

		<!-- INTERNAL Jquerytransfer css-->
		<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/jQuerytransfer/jquery.transfer.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/jQuerytransfer/icon_font/icon_font.css')); ?>">

		<!-- INTERNAL multi css-->
		<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/multi/multi.min.css')); ?>">

		<!-- INTERNAL Bootstrap DatePicker css-->
		<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Face Recognition Test</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class=" btn-list">
									<button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
									<button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
									<button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<form method="POST" action="<?php echo e(url('/testpython')); ?>" enctype="multipart/form-data" class="card">
                                    <?php echo csrf_field(); ?>
									<div class="card-header border-bottom-0">
										<h3 class="card-title">File Employee Photo</h3>
									</div>
									<div class=" card-body">
										<div class="row">
											<div class="col-lg-4 col-sm-12">
												<input type="file" name="emphoto_file" class="dropify" data-height="180" />
											</div>
										</div>

                                        <div>
                                            <button type="submit" class="btn btn-primary">Recognition</button>
                                        </div>
									</div>
								</form>
							</div>
						
						</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

		<!-- INTERNAL Timepicker js -->
		<script src="<?php echo e(URL::asset('assets/plugins/time-picker/jquery.timepicker.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/plugins/time-picker/toggles.min.js')); ?>"></script>

		<!-- INTERNAL Datepicker js -->
		<script src="<?php echo e(URL::asset('assets/plugins/date-picker/date-picker.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/plugins/date-picker/jquery-ui.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/plugins/input-mask/jquery.maskedinput.js')); ?>"></script>

		<!-- INTERNAL File-Uploads Js-->
		<script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')); ?>"></script>

		<!-- INTERNAL File uploads js -->
        <script src="<?php echo e(URL::asset('assets/plugins/fileupload/js/dropify.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/js/filupload.js')); ?>"></script>

		<!-- INTERNAL Multiple select js -->
		<script src="<?php echo e(URL::asset('assets/plugins/multipleselect/multiple-select.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/plugins/multipleselect/multi-select.js')); ?>"></script>

		<!-- INTERNAL Sumoselect js-->
		<script src="<?php echo e(URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')); ?>"></script>

		<!-- INTERNAL intlTelInput js-->
		<script src="<?php echo e(URL::asset('assets/plugins/intl-tel-input-master/intlTelInput.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/plugins/intl-tel-input-master/country-select.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/plugins/intl-tel-input-master/utils.js')); ?>"></script>

		<!-- INTERNAL jquery transfer js-->
		<script src="<?php echo e(URL::asset('assets/plugins/jQuerytransfer/jquery.transfer.js')); ?>"></script>

		<!-- INTERNAL multi js-->
		<script src="<?php echo e(URL::asset('assets/plugins/multi/multi.min.js')); ?>"></script>

		<!-- INTERNAL Bootstrap-Datepicker js-->
		<script src="<?php echo e(URL::asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')); ?>"></script>

		<!-- INTERNAL Form Advanced Element -->
		<script src="<?php echo e(URL::asset('assets/js/formelementadvnced.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/js/form-elements.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/js/select2.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views/common_pages/hrm/time-attendance/face-att.blade.php ENDPATH**/ ?>