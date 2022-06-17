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
            <h4 class="page-title">Leave Settings</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addleavemodal">Add Leave Type</a>
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
                <div class="card-header  border-0">
                    <h4 class="card-title">Leaves Types</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-leavestypes">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Leaves Type</th>
                                <th class="border-bottom-0 text-center">No.of Leaves</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Casual Leaves</td>
                                <td class="text-center font-weight-semibold">14</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1"  data-toggle="modal" data-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sick Leaves</td>
                                <td class="text-center font-weight-semibold">07</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1"  data-toggle="modal" data-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Maternity Leaves</td>
                                <td class="text-center font-weight-semibold">20</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1"  data-toggle="modal" data-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Paternity Leaves</td>
                                <td class="text-center font-weight-semibold">00</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1"  data-toggle="modal" data-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Annual Leaves</td>
                                <td class="text-center font-weight-semibold">00</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1"  data-toggle="modal" data-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Unpaid Leaves</td>
                                <td class="text-center font-weight-semibold">00</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1"  data-toggle="modal" data-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Other Leaves</td>
                                <td class="text-center font-weight-semibold">00</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1"  data-toggle="modal" data-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
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

@endsection('content')

@section('modals')

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

    <!-- Add leave Modal -->
    <div class="modal fade"  id="addleavemodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Leaves</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Type Of Leaves</label>
                        <input class="form-control" placeholder="Text">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Number Of Days</label>
                        <input class="form-control" placeholder="Numbers">
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button  class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add leave Modal -->

    <!-- Add leave Modal -->
    <div class="modal fade"  id="editleavemodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Leaves</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Type Of Leaves</label>
                        <input class="form-control" placeholder="Text">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Number Of Days</label>
                        <input class="form-control" placeholder="Numbers">
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button  class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add leave Modal -->

@endsection('modals')

@section('scripts')

    <!-- INTERNAL Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/hr/hr-leaves.js')}}"></script>

@endsection
