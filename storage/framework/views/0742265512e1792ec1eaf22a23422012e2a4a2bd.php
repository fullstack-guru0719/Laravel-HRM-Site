<?php $__env->startSection('styles'); ?>

    <!-- INTERNAL Ratings css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/rating/css/ratings.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/rating/css/rating-themes.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Employee Profile</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="<?php echo e(url('hrm/employee/hr-addemployee')); ?>" class="btn btn-primary mr-3">Add New Employee</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-3 col-md-12 col-lg-12">
            <div class="card box-widget widget-user">
                <div class="card-body text-center">
                    <div class="widget-user-image mx-auto text-center">
                        <img  class="avatar avatar-xxl brround rounded-circle" alt="img" src="<?php echo e(URL::asset('assets/images/users/1.jpg')); ?>">
                    </div>
                    <div class="pro-user mt-3">
                        <h5 class="pro-user-username text-dark mb-1 fs-16"><?php echo e($current_employee->first_name . ' '.$current_employee->last_name); ?></h5>
                        <h6 class="pro-user-desc text-muted fs-12"><?php echo e($current_employee->designation); ?></h6>
                    </div>
                    <div class="star-ratings start-ratings-main mb-0 clearfix">
                        <div class="stars stars-example-fontawesome star-sm">
                            <select id="example-fontawesome" name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected>4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="card">
                <div class="card-header  border-0">
                    <div class="card-title">Statistics-2022</div>
                </div>
                <div class="card-body">
                    <div class="row mb-7">
                        <div class="col-4 text-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.89" data-thickness="5" data-color="#3366ff">
                                <div class="chart-circle-value text-primary">89</div>
                            </div>
                            <h6 class="fs-14 font-weight-semibold mt-3">Attendance</h6>
                        </div>
                        <div class="col-4 text-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.23" data-thickness="5" data-color="#fe7f00">
                                <div class="chart-circle-value text-secondary">23</div>
                            </div>
                            <h6 class="fs-14 font-weight-semibold mt-3">Projects</h6>
                        </div>
                        <div class="col-4 text-center">
                            <div class="chart-circle chart-circle-sm" data-value="0.67" data-thickness="5" data-color="#0dcd94">
                                <div class="chart-circle-value text-success">67%</div>
                            </div>
                            <h6 class="fs-14 font-weight-semibold mt-3">Performance</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mg-b-5">
                        <h6 class="">This Week</h6>
                        <h6 class="font-weight-bold mb-1">01</h6>
                    </div>
                    <div class="progress progress-sm mb-5">
                        <div class="progress-bar bg-danger w-10"></div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mg-b-5">
                        <h6 class="">This Month</h6>
                        <h6 class="font-weight-bold mb-1">05</h6>
                    </div>
                    <div class="progress progress-sm mb-5">
                        <div class="progress-bar bg-info w-30"></div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mg-b-5">
                        <h6 class="">This Year</h6>
                        <h6 class="font-weight-bold mb-1">22</h6>
                    </div>
                    <div class="progress progress-sm mb-5">
                        <div class="progress-bar bg-warning w-50"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-md-12 col-lg-12">
            <div class="tab-menu-heading hremp-tabs p-0 ">
                <div class="tabs-menu1">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class="ml-4"><a href="#tab5" class="active"  data-toggle="tab">Personal Details</a></li>
                        <li><a href="#tab6"  data-toggle="tab">Company Details</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                <form method="POST" id="em_form" action="<?php echo e(url('hrm/employee/employee-update')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="tab-content">               
                        <div class="tab-pane active" id="tab5">
                            <div class="card-body">
                                <h4 class="mb-4 font-weight-bold">Basic</h4>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">User Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control mb-md-0 mb-5" name="first_name" value="<?php echo e($current_employee->first_name); ?>">
                                                    <input type="text" class="form-control mb-md-0 mb-5" name="current_employee_id" value="<?php echo e($current_employee->id); ?>" hidden readonly>
                                                    <span class="text-muted"></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"  name="last_name" value="<?php echo e($current_employee->last_name); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Phone Number</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="phone_number" value="<?php echo e($current_employee->phone_number); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Emergency Contact Number</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="contact_number" value="<?php echo e($current_employee->contact_number); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Date Of Birth</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control fc-datepicker" name="birthday"  value="<?php echo e($current_employee->birthday); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Gender</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="custom-controls-stacked d-md-flex">
                                                <label class="custom-control custom-radio mr-4">
                                                    <input type="radio" class="custom-control-input" name="gender" value="Male" <?php if($current_employee->gender=="Male"): ?>
                                                        checked
                                                    <?php endif; ?>>
                                                    <span class="custom-control-label">Male</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="gender" value="Female" <?php if($current_employee->gender=="Female"): ?>
                                                    checked
                                                    <?php endif; ?>>
                                                    <span class="custom-control-label">Female</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Marital Status</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="marital_status"  class="form-control custom-select select2">
                                                <option label="Select"></option>
                                                <option value="Single" <?php if($current_employee->marital_status=="Single"): ?>
                                                    selected
                                                    <?php endif; ?>>Single</option>
                                                <option value="Married"<?php if($current_employee->marital_status=="Married"): ?>
                                                    selected
                                                    <?php endif; ?>>Married</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Blood Group</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="projects"  class="form-control custom-select select2">
                                                <option value="0">A+</option>
                                                <option value="1" selected>B+</option>
                                                <option value="2">O+</option>
                                                <option value="3">AB+</option>
                                                <option value="4">A-</option>
                                                <option value="5">B-</option>
                                                <option value="6">O-</option>
                                                <option value="7">AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Email</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="email" value="<?php echo e($current_employee->birthday); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Present Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea rows="3" class="form-control" name="present_address"><?php echo e($current_employee->present_address); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Permanent Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea rows="3" class="form-control" name="permanet_address"><?php echo e($current_employee->permanet_address); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Upload Photo</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                    <span class="btn ripple btn-primary">
                                                        Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-5 mt-7 font-weight-bold">Account Login</h4>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Employee Email</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="employee email" value="<?php echo e($current_employee->em_email); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Password</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control"  name="em_password" value="<?php echo e($current_employee->em_password); ?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Employee ID</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="em_number" value="<?php echo e($current_employee->em_number); ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Department</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="department_id"  class="form-control custom-select select2"  data-placeholder="Select Department" required>
                                                <option label="Select Department"></option>
                                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo $department->id; ?>" <?php if($current_employee->department_id==$department->id): ?>
                                                        selected
                                                    <?php endif; ?>> <?php echo $department->department_name; ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Designation</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="designation" value="<?php echo e($current_employee->designation); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Date Of Joining</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control fc-datepicker"  name="join_date" value="<?php echo e($current_employee->join_date); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Resignation Date</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control fc-datepicker"  name="resignation_date" value="<?php echo e($current_employee->resignation_date); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Termination Date</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control fc-datepicker"  name="termination_date" value="<?php echo e($current_employee->termination_date); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Credit Leaves
                                                <span class="form-help" data-toggle="tooltip" data-placement="top" title="Unused leaves for the Employee">?</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="credit_leaves" value="<?php echo e($current_employee->credit_leaves); ?>">
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-5 mt-7 font-weight-bold">Salary</h4>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Type</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select select2" name="salary_type">
                                                <option value="0" <?php if($current_employee->salary_type==0): ?>
                                                    selected
                                                <?php endif; ?>>Full-Time</option>
                                                <option value="1" <?php if($current_employee->salary_type==1): ?>
                                                    selected
                                                <?php endif; ?>>Part-Time</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Salary</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="salary_amount" value="<?php echo e($current_employee->salary_amount); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-7">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Status:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <label class="custom-switch">
                                                <input type="checkbox" name="status" class="custom-switch-input" <?php if($current_employee->status=="on"): ?>
                                                    checked
                                                <?php endif; ?>>
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Active/Inactive</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab7">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Account Holder</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Name" value="Faith Harris">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Account Number</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Number" value="36985214704">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Bank Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Name" value="ABCD Bank">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Branch Location</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Location" value="Little Rock Arkansas">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Bank Code (IFSC)
                                                <span class="form-help" data-toggle="tooltip" data-placement="top" title="Bank Identify Number in your Country">?</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="Code" value="ABC0002189">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Tax Payer ID (PAN)
                                                <span class="form-help" data-toggle="tooltip" data-placement="top" title="Taxpayer Identification Number Used in your Country">?</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  placeholder="ID No">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab8">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Resume</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">ID Proof</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Offer Letter</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Joining Letter</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Agreement Letter</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label mb-0 mt-2">Experience Letter</div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group file-browser">
                                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                                <label class="input-group-append mb-0">
                                                                        <span class="btn ripple btn-light">
                                                                            Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
                                                                        </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" text-right">
                        <button onclick="click_submit()" class="btn btn-primary">Update</button>
                        <a href="#" class="btn btn-danger">Cancle</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>

    <!--Change password Modal -->
    <div class="modal fade"  id="changepasswordnmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" placeholder="password" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" placeholder="password" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Confirm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Change password Modal  -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAl Rating js-->
    <script src="<?php echo e(URL::asset('assets/plugins/rating/js/jquery.barrating.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/rating/js/custom-ratings.js')); ?>"></script>

    <!-- INTERNAL  Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/date-picker/jquery-ui.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/hr/hr-empview.js')); ?>"></script>

    <script>
        function click_submit(){
            $('#em_form').submit();
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views/common_pages/hrm/employee/hr-empview.blade.php ENDPATH**/ ?>