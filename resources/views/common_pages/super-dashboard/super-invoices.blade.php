@extends('layouts.app')

@section('styles')

    <!-- Notifications  Css -->
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />

    <!-- INTERNAL Datepicker css-->
    <link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Invoices</h4>
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

    <!-- Row-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive superinvoice-table">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="invoice-list">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 w-5">#NO</th>
                                <th class="border-bottom-0">Company Name</th>
                                <th class="border-bottom-0">Package</th>
                                <th class="border-bottom-0">Invoice ID</th>
                                <th class="border-bottom-0">Amount</th>
                                <th class="border-bottom-0">Invoice Date</th>
                                <th class="border-bottom-0">Pay Date</th>
                                <th class="border-bottom-0">NextPay Date</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">Abcd Pvt Ltd</h6></td>
                                <td>Basic</td>
                                <td>#INV-0478</td>
                                <td class="font-weight-semibold">$19.00</td>
                                <td>12-01-2021</td>
                                <td>14-02-2021</td>
                                <td>14-03-2021</td>
                                <td><span class="badge badge-success-light">Paid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">Croport Pvt Ltd</h6></td>
                                <td>Premium</td>
                                <td>#INV-1245</td>
                                <td class="font-weight-semibold">$39.00</td>
                                <td>21-01-2021</td>
                                <td>15-02-2021</td>
                                <td>15-03-2021</td>
                                <td><span class="badge badge-danger-light">UnPaid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">frecho Pvt Ltd</h6></td>
                                <td>Advanced</td>
                                <td>#INV-5280</td>
                                <td class="font-weight-semibold">$69.00</td>
                                <td>21-02-2021</td>
                                <td>28-02-2021</td>
                                <td>28-03-2021</td>
                                <td><span class="badge badge-success-light">Paid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">kolit Pvt Ltd</h6></td>
                                <td>Enterprise</td>
                                <td>#INV-2876</td>
                                <td class="font-weight-semibold">$139.00</td>
                                <td>05-02-2021</td>
                                <td>10-02-2021</td>
                                <td>10-03-2021</td>
                                <td><span class="badge badge-success-light">Paid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">Movck Pvt Ltd</h6></td>
                                <td>Basic</td>
                                <td>#INV-1986</td>
                                <td class="font-weight-semibold">$19.00</td>
                                <td>05-12-2020</td>
                                <td>10-12-2020</td>
                                <td>10-01-2021</td>
                                <td><span class="badge badge-danger-light">UnPaid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">Loki Pvt Ltd</h6></td>
                                <td>Premium</td>
                                <td>#INV-2689</td>
                                <td class="font-weight-semibold">$39.00</td>
                                <td>11-11-2020</td>
                                <td>20-11-2020</td>
                                <td>20-12-2020</td>
                                <td><span class="badge badge-success-light">Paid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">Kloki Pvt Ltd</h6></td>
                                <td>Advanced</td>
                                <td>#INV-0298</td>
                                <td class="font-weight-semibold">$69.00</td>
                                <td>12-10-2020</td>
                                <td>18-10-2020</td>
                                <td>18-11-2020</td>
                                <td><span class="badge badge-success-light">Paid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">Gomalik Pvt Ltd</h6></td>
                                <td>Enterprise</td>
                                <td>#INV-7618</td>
                                <td class="font-weight-semibold">$139.00</td>
                                <td>12-07-2020</td>
                                <td>22-07-2020</td>
                                <td>22-08-2020</td>
                                <td><span class="badge badge-success-light">Paid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">Mooke Pvt Ltd</h6></td>
                                <td>Basic</td>
                                <td>#INV-4920</td>
                                <td class="font-weight-semibold">$19.00</td>
                                <td>22-06-2020</td>
                                <td>25-06-2020</td>
                                <td>25-07-2020</td>
                                <td><span class="badge badge-danger-light">UnPaid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><h6 class="mb-0 fs-14 font-weight-semibold">Kloki Pvt Ltd</h6></td>
                                <td>Premium</td>
                                <td>#INV-2109</td>
                                <td class="font-weight-semibold">$39.00</td>
                                <td>15-04-2020</td>
                                <td>28-04-2020</td>
                                <td>28-05-2020</td>
                                <td><span class="badge badge-success-light">Paid</span></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-file-text  text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
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

@endsection('modals')

@section('scripts')

    <!-- Notifications js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

    <!-- INTERNAL Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.rowGroup.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/superadmin/superadmin-invoice.js')}}"></script>

@endsection
