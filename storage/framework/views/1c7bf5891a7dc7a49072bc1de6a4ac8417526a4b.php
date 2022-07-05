<?php $__env->startSection('styles'); ?>

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Daterangepicker css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/daterangepicker/daterangepicker.css')); ?>">


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Awards</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addawardmodal">Add New Award</a>
                    <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-award">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 w-5">No</th>
                                <th class="border-bottom-0 w-5">#Emp ID</th>
                                <th class="border-bottom-0">Emp Name</th>
                                <th class="border-bottom-0">Designation</th>
                                <th class="border-bottom-0 text-center">Attendance</th>
                                <th class="border-bottom-0">Award Type</th>
                                <th class="border-bottom-0">Gift Type</th>
                                <th class="border-bottom-0">Date</th>
                                <th class="border-bottom-0">Award Information</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>#2987</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/1.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Faith Harris</h6>
                                            <p class="text-muted mb-0 fs-12">faith@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Web Designer</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.85" data-thickness="3" data-color="#0dcd94">
                                        <div class="chart-circle-value text-success fs-12">85%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Employee of the Month Award</td>
                                <td><span class="badge badge-primary-light">Cash</span></td>
                                <td>01-02-2021</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>#4987</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/9.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Austin Bell</h6>
                                            <p class="text-muted mb-0 fs-12">austin@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Angular Developer</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.58" data-thickness="3" data-color="#f34932">
                                        <div class="chart-circle-value text-orange fs-12">58%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Best Team Player Award</td>
                                <td><span class="badge badge-orange-light">Trophy</span></td>
                                <td>15-01-2021</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>#6729</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/2.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Maria Bower</h6>
                                            <p class="text-muted mb-0 fs-12">maria@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Marketing analyst</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.90" data-thickness="3" data-color="#0dcd94">
                                        <div class="chart-circle-value text-success fs-12">90%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Best Attendance Award</td>
                                <td><span class="badge badge-success-light">Momento</span></td>
                                <td>13-12-2020</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>#2098</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/10.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Peter Hill</h6>
                                            <p class="text-muted mb-0 fs-12">peter@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Testor</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.78" data-thickness="3" data-color="#f34932 ">
                                        <div class="chart-circle-value text-orange fs-12">78%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Most Improved Performer</td>
                                <td><span class="badge badge-orange-light">Trophy</span></td>
                                <td>05-11-2020</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>#1025</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/3.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Victoria Lyman</h6>
                                            <p class="text-muted mb-0 fs-12">victoria@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>General Manager</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.48" data-thickness="3" data-color="#45aaf2">
                                        <div class="chart-circle-value text-info fs-12">48%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">The Motivator</td>
                                <td><span class="badge badge-success-light">Momento</span></td>
                                <td>21-09-2020</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>#3262</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/11.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Adam Quinn</h6>
                                            <p class="text-muted mb-0 fs-12">adam@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Accountant</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.32" data-thickness="3" data-color="#f11541">
                                        <div class="chart-circle-value text-danger fs-12">32%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Stand out Performer</td>
                                <td><span class="badge badge-primary-light">Cash</span></td>
                                <td>18-08-2020</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>#3489</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/4.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Melanie Coleman</h6>
                                            <p class="text-muted mb-0 fs-12">melanie@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>App Designer</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.82" data-thickness="3" data-color="#0dcd94">
                                        <div class="chart-circle-value text-success fs-12">82%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Work Anniversary Award</td>
                                <td><span class="badge badge-orange-light">Trophy</span></td>
                                <td>15-07-2020</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>#3698</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/12.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Max Wilson</h6>
                                            <p class="text-muted mb-0 fs-12">max@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>PHP Developer</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.78" data-thickness="3" data-color="#0dcd94">
                                        <div class="chart-circle-value text-success fs-12">78%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Most Creative Award</td>
                                <td><span class="badge badge-success-light">Momento</span></td>
                                <td>12-05-2020</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>#5612</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/5.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Amelia Russell</h6>
                                            <p class="text-muted mb-0 fs-12">amelia@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>UX Designer</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.49" data-thickness="3" data-color="#45aaf2">
                                        <div class="chart-circle-value text-info fs-12">49%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Character Award</td>
                                <td><span class="badge badge-orange-light">Trophy</span></td>
                                <td>22-04-2020</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>#0245</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/13.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Justin Metcalfe</h6>
                                            <p class="text-muted mb-0 fs-12">justin@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Web Designer</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.66" data-thickness="3" data-color="#f34932">
                                        <div class="chart-circle-value text-orange fs-12">66%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Sales Award</td>
                                <td><span class="badge badge-primary-light">Cash</span></td>
                                <td>05-03-2020</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>#3467</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/users/6.jpg')); ?>)"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Sophie Anderson</h6>
                                            <p class="text-muted mb-0 fs-12">faith@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Java Developer</td>
                                <td>
                                    <div class="chart-circle chart-circle-xs" data-value="0.75" data-thickness="3" data-color="#0dcd94">
                                        <div class="chart-circle-value text-success fs-12">75%</div>
                                    </div>
                                </td>
                                <td class="font-weight-semibold">Customer Service Award</td>
                                <td><span class="badge badge-orange-light">Trophy</span></td>
                                <td>15-01-2020</td>
                                <td>Congratulations</td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm" href="#" data-toggle="modal" data-target="#editawardmodal">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
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

    <!-- End AddAward Modal -->
    <div class="modal fade"  id="addawardmodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Award Details</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Employee ID</label>
                                <input type="text" class="form-control" placeholder="ID">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Employee Email</label>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" placeholder="Designation">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Award Types</label>
                                <select name="projects"  class="form-control custom-select select2" data-placeholder="Choose One">
                                    <option label="Choose One"></option>
                                    <option value="1">Employee of the Month Award</option>
                                    <option value="2">Work Anniversary Award</option>
                                    <option value="3">Teamwork Award</option>
                                    <option value="4">Sales Award</option>
                                    <option value="5">Most Creative Award</option>
                                    <option value="6">Leadership Award</option>
                                    <option value="7">Character Award</option>
                                    <option value="8">Innovation Award</option>
                                    <option value="9">Customer Service Award</option>
                                    <option value="10">Top Performer Award</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Gift Types</label>
                                <select name="projects"  class="form-control custom-select select2" data-placeholder="Choose One">
                                    <option label="Choose One"></option>
                                    <option value="1">Cash</option>
                                    <option value="2">Trophy</option>
                                    <option value="3">Momento</option>
                                    <option value="4">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date:</label>
                        <div class="input-group">
                            <input type="text" name="singledaterange"  class="form-control" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="bx bx-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Award Description:</label>
                        <textarea class="form-control" rows="3" placeholder="enter the description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="ml-auto">
                        <a href="#" class="btn btn-outline-primary" data-dismiss="modal">close</a>
                        <a href="#" class="btn btn-primary">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End AddAward Modal  -->

    <!-- End EditAward Modal -->
    <div class="modal fade"  id="editawardmodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Award Details</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Employee ID</label>
                                <input type="text" class="form-control" placeholder="ID" value="#2987">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control" placeholder="Name" value="Faith Harris">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Employee Email</label>
                                <input type="text" class="form-control" placeholder="Email" value="faith@gmail.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" placeholder="Designation" value="Web Designer">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Award Types</label>
                                <select name="projects"  class="form-control custom-select select2" data-placeholder="Choose One">
                                    <option label="Choose One"></option>
                                    <option value="1" selected>Employee of the Month Award</option>
                                    <option value="2">Work Anniversary Award</option>
                                    <option value="3">Teamwork Award</option>
                                    <option value="4">Sales Award</option>
                                    <option value="5">Most Creative Award</option>
                                    <option value="6">Leadership Award</option>
                                    <option value="7">Character Award</option>
                                    <option value="8">Innovation Award</option>
                                    <option value="9">Customer Service Award</option>
                                    <option value="10">Top Performer Award</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Gift Types</label>
                                <select name="projects"  class="form-control custom-select select2" data-placeholder="Choose One">
                                    <option label="Choose One"></option>
                                    <option value="1" selected>Cash</option>
                                    <option value="2">Trophy</option>
                                    <option value="3">Momento</option>
                                    <option value="4">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date:</label>
                        <div class="input-group">
                            <input type="text" name="singledaterange"  class="form-control" placeholder="select dates"/>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="bx bx-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Award Description:</label>
                        <textarea class="form-control" rows="3" placeholder="enter the description">Congratulations</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="ml-auto">
                        <a href="#" class="btn btn-outline-primary" data-dismiss="modal">close</a>
                        <a href="#" class="btn btn-primary">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End EditAward Modal  -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/date-picker/jquery-ui.js')); ?>"></script>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Daterangepicker js-->
    <script src="<?php echo e(URL::asset('assets/plugins/daterangepicker/moment.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/daterangepicker/daterangepicker.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/hr/hr-award.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\hrm\hr-award.blade.php ENDPATH**/ ?>