<?php $__env->startSection('styles'); ?>

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Department</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#adddepartmentmodal">Add Department</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Department Summary</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 w-5">#ID</th>
                                <th class="border-bottom-0">Department Name</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($department->id); ?></td>
                                    <td><?php echo e($department->department_name); ?></td>
                                    <td>
                                        <button class="btn btn-primary btn-icon btn-sm" onclick="edit_department(<?php echo e($department->id); ?>)">
                                            <i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
                                        </button>
                                        <a href="<?php echo e(url('hrm/department/department-delete/'.$department->id)); ?>" class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
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

    <!--Add Department Modal -->
    <div class="modal fade"  id="adddepartmentmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Department</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="<?php echo e(url('hrm/department/department-new')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Add Department</label>
                            <input type="text"  name="department_name" class="form-control" placeholder="Department" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
                        <button  class="btn btn-primary" type="submit" >Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Add Department Modal  -->

    <!--Edit Department Modal -->
    <div class="modal fade"  id="editdepartmentmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Department</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="<?php echo e(url('hrm/department/department-update')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Edit Department</label>
                            <input type="text" id="current_department_name"class="form-control" name="current_department_name" placeholder="Department" value="">
                            <input type="text" id="current_department_id" style="display:none" name="current_department_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- End Edit Department Modal  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/hr/hr-department.js')); ?>"></script>
    <script>
        function edit_department(id) {
            var department_id = id;
            var number = 1;
            var department_name = "";
            var department_arry = <?php echo json_encode($departments, 15, 512) ?>;
            department_arry.forEach((element, index) => {
                if(element["id"] == id)
                {
                    number = index+1;
                    department_name = element["department_name"];
                }
            });
            // console.log(number);
            $("#editdepartmentmodal").modal();
            $("#current_department_id").val(id);
            $("#current_department_name").val(department_name);
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\DMS\resources\views/common_pages/hrm/hr-department.blade.php ENDPATH**/ ?>