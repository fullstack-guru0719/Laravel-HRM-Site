<?php $__env->startSection('styles'); ?>

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/rowGroup.bootstrap4.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Sweet-alert css -->
    <link href="<?php echo e(URL::asset('assets/plugins/sweet-alert/sweetalert.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Role Access</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!--Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive role-table">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="superrole-list">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 w-5 text-center">NO</th>
                                <th class="border-bottom-0">Role Name</th>
                                <th class="border-bottom-0">Dashboard</th>
                                <th class="border-bottom-0 text-center">Super Admin</th>
                                <th class="border-bottom-0 text-center">Admin</th>
                                <th class="border-bottom-0 text-center">HR</th>
                                <th class="border-bottom-0 text-center">User</th>
                                <th class="border-bottom-0 text-center">Agent</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Attendance List</td>
                                <td>1. HR Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Change Leave Policy</td>
                                <td>1. HR Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Update Office Times</td>
                                <td>1. HR Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Edit Attendance</td>
                                <td>2. Employee Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>Modify Leaves</td>
                                <td>2. Employee Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Task List</td>
                                <td>3. Task Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td>Running Task</td>
                                <td>3. Task Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td>OnHold Task</td>
                                <td>3. Task Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">9</td>
                                <td>Assign Task</td>
                                <td>3. Task Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">10</td>
                                <td>Edit Task</td>
                                <td>3. Task Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">11</td>
                                <td>New Project</td>
                                <td>3. Task Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">12</td>
                                <td>Project List</td>
                                <td>4. Project Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">13</td>
                                <td>Edit Project</td>
                                <td>4. Project Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">14</td>
                                <td>New Project</td>
                                <td>4. Project Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">15</td>
                                <td>Client List</td>
                                <td>5. Client Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">16</td>
                                <td>New Client</td>
                                <td>5. Client Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">17</td>
                                <td>Edit Client</td>
                                <td>5. Client Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">18</td>
                                <td>Job List</td>
                                <td>6. Job Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">19</td>
                                <td>Job Applications</td>
                                <td>6. Job Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">20</td>
                                <td>Edit Job</td>
                                <td>6. Job Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">21</td>
                                <td>New Job</td>
                                <td>6. Job Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">22</td>
                                <td>Apply Job</td>
                                <td>6. Job Dashboard</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">23</td>
                                <td>Ticket Lists</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">24</td>
                                <td>Active Tickets</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">25</td>
                                <td>Closed Tickets</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">26</td>
                                <td>New Ticket</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">27</td>
                                <td>Delete Ticket</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">28</td>
                                <td>Re-open Ticket</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">29</td>
                                <td>Knowledge List</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">30</td>
                                <td>New Knowledge</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">31</td>
                                <td>Edit Knowledge</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">32</td>
                                <td>Delete Knowledge</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">33</td>
                                <td>Category List</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">34</td>
                                <td>New Category</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">35</td>
                                <td>Edit Category</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">36</td>
                                <td>Delete Category</td>
                                <td>7. Support System</td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Sweet-alert js  -->
    <script src="<?php echo e(URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>"></script>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.rowGroup.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/superadmin/superadmin-role.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\super-dashboard\super-role.blade.php ENDPATH**/ ?>