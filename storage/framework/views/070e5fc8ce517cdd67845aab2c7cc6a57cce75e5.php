<?php $__env->startSection('styles'); ?>

<!-- Notifications  Css -->
<link href="<?php echo e(URL::asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

<!-- INTERNAl Summernote css -->
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Update Project</h4>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <form method="POST" action="<?php echo e(url('project/project-update')); ?> " enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Project ID:</label>
                                    <input class="form-control" name="p_number" value="<?php echo e($parent->p_number); ?>" readonly required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Project Title:</label>
                                    <input class="form-control" name="p_title" value="<?php echo e($parent->p_title); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Department:</label>
                                    <select name="department_id"  class="form-control custom-select select2"  data-placeholder="Select Department" required>
                                        <option label="Select Department"></option>
                                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo $department->id; ?>" <?php if($parent->department_id==$department->id): ?>
                                                selected
                                            <?php endif; ?>> <?php echo $department->department_name; ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Project Priority:</label>
                                    <select name="p_priority"  class="form-control custom-select select2" data-placeholder="Select Priority" required>
                                        <option label="Select Priority"></option>
                                        <option value="1">High</option>
                                        <option value="2">Medium</option>
                                        <option value="3">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Client:</label>
                                    <input name="client"  class="form-control" value="<?php echo e($parent->client); ?>" data-placeholder="Enter Client" required>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">($)Price:</label>
                                    <input class="form-control" name="p_price" value="<?php echo e($parent->p_price); ?>" placeholder="Enter Price eg:$69.00" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Assigned Team:</label>
                            <select name="user_id[]" id="user_id" class="form-control custom-select select2" multiple="multiple" data-placeholder="Select Employee" required>
                                <option label="Select Employee"></option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo $user->id; ?>"<?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($child->user_id==$user->id): ?>
                                            selected
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>><?php echo $user->name; ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">From:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control date" name="start_date"  value="<?php echo e($parent->start_date); ?>" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">To:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control date" name="end_date"  value="<?php echo e($parent->end_date); ?>" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description:</label>
                            <textarea id="summernote" name="description"><?php echo e($parent->description); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Upload Files:</label>
                            <div class="input-group file-browser">
                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                <label class="input-group-append mb-0">
                                <span class="btn ripple btn-primary">
                                    Browse <input type="file" name="project_files[]" class="file-browserinput"  style="display: none;" multiple>
                                </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="<?php echo e(url('project/index')); ?>" class="btn btn-danger">Close</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>

            </div>
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


<!-- INTERNAL Datepicker js -->
<script src="<?php echo e(URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/input-mask/jquery.maskedinput.js')); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


<!-- Notifications js -->
<script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/select2.js')); ?>"></script>

<!-- INTERNAL Datepicker js -->


<!-- INTERNAL Summernote js  -->
<script src="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>

<script src="<?php echo e(URL::asset('assets/js/custome.js')); ?>"></script>

<!-- INTERNAL Index js-->
<script src="<?php echo e(URL::asset('assets/js/task/task-new.js')); ?>"></script>


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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\DMS\resources\views/common_pages/project-dashboard/project-edit.blade.php ENDPATH**/ ?>