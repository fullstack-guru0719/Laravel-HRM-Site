<?php $__env->startSection('styles'); ?>

    <!-- Notifications  Css -->
    <link href="<?php echo e(URL::asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet" />

    <!-- INTERNAl Summernote css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.css')); ?>">

    <!-- INTERNAL Datepicker css-->
    <link href="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Edit Job</h4>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" id="em_form" action="<?php echo e(url('job/job-update')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Company Name</label>
                                    <input class="form-control" placeholder="Name" value="<?php echo e($current_job->company_name); ?>" name="company_name">
                                    <input class="form-control" placeholder="Name" value="<?php echo e($current_job->id); ?>" name="current_job_id" readonly required hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Job Position</label>
                                    <input class="form-control" placeholder="Name" value="<?php echo e($current_job->job_position); ?>" name="job_position">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Job Category</label>
                                    <select  class="form-control custom-select select2" name="job_category">
                                        <option label="Select Job Category"></option>
                                        <option value="PHP Developer" <?php if($current_job->job_category=="PHP Developer"): ?>
                                            selected
                                        <?php endif; ?>>PHP Developer</option>
                                        <option value="UX Designer" <?php if($current_job->job_category=="UX Designer"): ?>
                                            selected
                                        <?php endif; ?>>UX Designer</option>
                                        <option value="UI Designer" <?php if($current_job->job_category=="UI Designer"): ?>
                                            selected
                                        <?php endif; ?>>UI Designer</option>
                                        <option value="SEO Specialist" <?php if($current_job->job_category=="SEO Specialist"): ?>
                                            selected
                                        <?php endif; ?>>SEO Specialist</option>
                                        <option value="Wordpress Developer" <?php if($current_job->job_category=="Wordpress Developer"): ?>
                                            selected
                                        <?php endif; ?>>Wordpress Developer</option>
                                        <option value="Accountant" <?php if($current_job->job_category=="Accountant"): ?>
                                            selected
                                        <?php endif; ?>>Accountant</option>
                                        <option value="Software Engineer" <?php if($current_job->job_category=="Software Engineer"): ?>
                                            selected
                                        <?php endif; ?>>Software Engineer</option>
                                        <option value="Angular Developer" <?php if($current_job->job_category=="Angular Developer"): ?>
                                            selected
                                        <?php endif; ?>>Angular Developer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Job Type:</label>
                                    <select  class="form-control custom-select select2" data-placeholder="Select Job Type" name="job_type">
                                        <option label="Select Job Type"></option>
                                        <option value="Full-Time" <?php if($current_job->job_type=="Full-Time"): ?>
                                            selected
                                        <?php endif; ?>>Full-Time</option>
                                        <option value="Part-Time" <?php if($current_job->job_type=="Part-Time"): ?>
                                            selected
                                        <?php endif; ?>>Part-Time</option>
                                        <option value="Freelancer" <?php if($current_job->job_type=="Freelancer"): ?>
                                            selected
                                        <?php endif; ?>>Freelancer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">No.of Vacancy</label>
                                    <input class="form-control" placeholder="Number" value="<?php echo e($current_job->no_of_vacancy); ?>" name="no_of_vacancy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Experiences</label>
                                    <select  class="form-control custom-select select2" data-placeholder="Select Experience" name="experiences">
                                        <option label="Select Experience"></option>
                                        <option value="Fresher" <?php if($current_job->experiences=="Fresher"): ?>
                                            selected
                                        <?php endif; ?>>Fresher</option>
                                        <option value="1 yr" <?php if($current_job->experiences=="1 yr"): ?>
                                            selected
                                        <?php endif; ?>>1 yr</option>
                                        <option value="2 yrs" <?php if($current_job->experiences=="2 yrs"): ?>
                                            selected
                                        <?php endif; ?>>2 yrs</option>
                                        <option value="3 yrs" <?php if($current_job->experiences=="3 yrs"): ?>
                                            selected
                                        <?php endif; ?>>3 yrs</option>
                                        <option value="4 yrs" <?php if($current_job->experiences=="4 yrs"): ?>
                                            selected
                                        <?php endif; ?>>4 yrs</option>
                                        <option value="5 yrs" <?php if($current_job->experiences=="5 yrs"): ?>
                                            selected
                                        <?php endif; ?>>5 yrs</option>
                                        <option value="5 yrs" <?php if($current_job->experiences=="5 yrs"): ?>
                                            selected
                                        <?php endif; ?>>6 yrs</option>
                                        <option value="5 yrs" <?php if($current_job->experiences=="5 yrs"): ?>
                                            selected
                                        <?php endif; ?>>7 yrs</option>
                                        <option value="8 yrs" <?php if($current_job->experiences=="8 yrs"): ?>
                                            selected
                                        <?php endif; ?>>8 yrs</option>
                                        <option value="9 yrs" <?php if($current_job->experiences=="9 yrs"): ?>
                                            selected
                                        <?php endif; ?>>9 yrs</option>
                                        <option value="10 yrs" <?php if($current_job->experiences=="10 yrs"): ?>
                                            selected
                                        <?php endif; ?>>10 yrs</option>
                                        <option value="10+ yrs" <?php if($current_job->experiences=="10+ yrs"): ?>
                                            selected
                                        <?php endif; ?>>10+ yrs</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Posted Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control fc-datepicker" name="posted_date" value="<?php echo e($current_job->posted_date); ?>" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Date To Apply</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control fc-datepicker" name="last_apply_date" value="<?php echo e($current_job->last_apply_date); ?>" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Close Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="feather feather-calendar"></i>
                                            </div>
                                        </div><input class="form-control fc-datepicker" name="close_date" value="<?php echo e($current_job->close_date); ?>" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Select Gender:</label>
                                    <select  class="form-control custom-select select2" data-placeholder="Select Gender" name="gender">
                                        <option label="Select Gender"></option>
                                        <option value="Male" <?php if($current_job->close_date=="Male"): ?>
                                            selected
                                        <?php endif; ?>>Male</option>
                                        <option value="Female" <?php if($current_job->close_date=="Female"): ?>
                                            selected
                                        <?php endif; ?>>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Salary Form</label>
                                    <input class="form-control" placeholder="$0.00" value="<?php echo e($current_job->salary_type); ?>" name="salary_type">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Salary To</label>
                                    <input class="form-control" placeholder="$0.00" value="<?php echo e($current_job->salary_amount); ?>" name="salary_amount">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enter City:</label>
                                    <input class="form-control" placeholder="City" value="<?php echo e($current_job->city); ?>" name="city">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enter State:</label>
                                    <input class="form-control" placeholder="State" value="<?php echo e($current_job->state); ?>" name="state">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enter Country:</label>
                                    <input class="form-control" placeholder="Country" value="<?php echo e($current_job->country); ?>" name="country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Enter Education Level:</label>
                                    <input class="form-control" placeholder="Education Level" value="<?php echo e($current_job->education_level); ?>" name="education_level">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description:</label>
                            <textarea class="summernote" name="description"><?php echo $current_job->description; ?></textarea>
                        </div>
                        <div class="custom-controls-stacked d-md-flex">
                            <label class="form-label mt-1 mr-5">Status :</label>
                            <label class="custom-control custom-radio success mr-4">
                                <input type="radio" class="custom-control-input" name="status" value="1" <?php if($current_job->description==1): ?>
                                    checked
                                <?php endif; ?>>
                                <span class="custom-control-label">Active</span>
                            </label>
                            <label class="custom-control custom-radio success mr-4">
                                <input type="radio" class="custom-control-input" name="status" value="0" <?php if($current_job->description==0): ?>
                                checked
                            <?php endif; ?>>
                                <span class="custom-control-label">InActive</span>
                            </label>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="<?php echo e(url('job/job-list')); ?>" class="btn btn-danger btn-lg">Close</a>
                        <button type="submit"  class="btn btn-success btn-lg" >Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Notifications js -->
    <script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/job/job-apply.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views/common_pages/job-dashboard/job-edit.blade.php ENDPATH**/ ?>