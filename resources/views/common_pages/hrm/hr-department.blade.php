@extends('layouts.app')

@section('styles')

    <!-- INTERNAL Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

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
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$department->id}}</td>
                                    <td>{{$department->department_name}}</td>
                                    <td>
                                        <button class="btn btn-primary btn-icon btn-sm" onclick="edit_department({{$department->id}})">
                                            <i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
                                        </button>
                                        <a href="{{url('hrm/department/department-delete/'.$department->id)}}" class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

@endsection('content')

@section('modals')

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
                <form method="POST" action="{{ url('hrm/department/department-new') }}">
                    @csrf
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
                <form method="POST" action="{{ url('hrm/department/department-update') }}">
                    @csrf
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
@endsection('modals')

@section('scripts')
    <!-- INTERNAL Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/hr/hr-department.js')}}"></script>
    <script>
        function edit_department(id) {
            var department_id = id;
            var number = 1;
            var department_name = "";
            var department_arry = @json($departments);
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

@endsection
