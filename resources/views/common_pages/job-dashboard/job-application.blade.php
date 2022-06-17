@extends('layouts.app')

@section('styles')

    <!-- INTERNAL Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

    <!-- INTERNAl Summernote css -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

    <!-- INTERNAL Datepicker css-->
    <link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Job Applications</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#addjobmodal"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Add New Job</a>
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
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="job-applictaion">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">No</th>
                                <th class="border-bottom-0">Position</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Phone Number</th>
                                <th class="border-bottom-0">Applied On</th>
                                <th class="border-bottom-0">Submitted By</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>
                                    <a href="#">Senior PHP Developer</a>
                                </td>
                                <td>Faith Harris</td>
                                <td>faith@gmail.com</td>
                                <td>+9685321475</td>
                                <td>25-01-2021</td>
                                <td>Faith Harris</td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Accept">
                                            <i class="feather feather-check text-success" ></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>
                                    <a href="#">Fresher Web Designer</a>
                                </td>
                                <td>Austin Bell</td>
                                <td>austin@gmail.com</td>
                                <td>+8653217950</td>
                                <td>20-02-2021</td>
                                <td>Austin Bell</td>
                                <td>
                                    <span class="badge badge-primary">Selected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>
                                    <a href="#">Senior Web Developer</a>
                                </td>
                                <td>Maria Bower</td>
                                <td>maria@gmail.com</td>
                                <td>+9563258417</td>
                                <td>28-02-2021</td>
                                <td>Maria Bower</td>
                                <td>
                                    <span class="badge badge-danger">Rejected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Accept">
                                            <i class="feather feather-check text-success" ></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>
                                    <a href="#">Fresher UI Designer</a>
                                </td>
                                <td>Peter Hill</td>
                                <td>peter@gmail.com</td>
                                <td>+8563249751</td>
                                <td>19-01-2021</td>
                                <td>Peter Hill</td>
                                <td>
                                    <span class="badge badge-primary">Selected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>
                                    <a href="#">SEO Specialist</a>
                                </td>
                                <td>Victoria Lyman</td>
                                <td>victoria@gmail.com</td>
                                <td>+9635826432</td>
                                <td>19-03-2021</td>
                                <td>Victoria Lyman</td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Accept">
                                            <i class="feather feather-check text-success" ></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>
                                    <a href="#">Senior Worpress Developer</a>
                                </td>
                                <td>Adam Quinn</td>
                                <td>adam@gmail.com</td>
                                <td>+9685231572</td>
                                <td>17-01-2021</td>
                                <td>Adam Quinn</td>
                                <td>
                                    <span class="badge badge-primary">Selected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>
                                    <a href="#">Senior Accountant</a>
                                </td>
                                <td>Melanie Coleman</td>
                                <td>melanie@gmail.com</td>
                                <td>+8635291470</td>
                                <td>21-02-2021</td>
                                <td>Melanie Coleman</td>
                                <td>
                                    <span class="badge badge-primary">Selected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>
                                    <a href="#">Fresher Angular Developer</a>
                                </td>
                                <td>Max Wilson</td>
                                <td>max@gmail.com</td>
                                <td>+9986357240</td>
                                <td>30-03-2021</td>
                                <td>Max Wilson</td>
                                <td>
                                    <span class="badge badge-primary">Selected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>
                                    <a href="#">Senior Angular Developer</a>
                                </td>
                                <td>Amelia Russell</td>
                                <td>amelia@gmail.com</td>
                                <td>+9356982472</td>
                                <td>04-04-2021</td>
                                <td>Amelia Russell</td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Accept">
                                            <i class="feather feather-check text-success" ></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>
                                    <a href="#">Fresher Web Designer</a>
                                </td>
                                <td>Justin Metcalfe</td>
                                <td>justin@gmail.com</td>
                                <td>+9685321475</td>
                                <td>17-02-2021</td>
                                <td>Justin Metcalfe</td>
                                <td>
                                    <span class="badge badge-danger">Rejected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Accept">
                                            <i class="feather feather-check text-success" ></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>
                                    <a href="#">Senior Web Developer</a>
                                </td>
                                <td>Sophie Anderson</td>
                                <td>sophie@gmail.com</td>
                                <td>+8674231566</td>
                                <td>22-02-2021</td>
                                <td>Sophie Anderson</td>
                                <td>
                                    <span class="badge badge-primary">Selected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>
                                    <a href="#">Senior Worpress Developer</a>
                                </td>
                                <td>Ryan Young</td>
                                <td>ryan@gmail.com</td>
                                <td>+9685321475</td>
                                <td>18-03-2021</td>
                                <td>Ryan Young</td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Accept">
                                            <i class="feather feather-check text-success" ></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>
                                    <a href="#">Fresher Angular Developer</a>
                                </td>
                                <td>Jennifer Hardacre</td>
                                <td>jennifer@gmail.com</td>
                                <td>+9635826432</td>
                                <td>19-03-2021</td>
                                <td>Jennifer Hardacre</td>
                                <td>
                                    <span class="badge badge-danger">Rejected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Accept">
                                            <i class="feather feather-check text-success" ></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>
                                    <a href="#">Senior PHP Developer</a>
                                </td>
                                <td>Justin Parr</td>
                                <td>justin@gmail.com</td>
                                <td>+9685321475</td>
                                <td>20-03-2021</td>
                                <td>Justin Parr</td>
                                <td>
                                    <span class="badge badge-primary">Selected</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                            <i class="feather feather-x text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#jobapplictionmodal">
                                            <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="feather feather-trash-2 text-danger"></i>
                                        </a>
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                            <i class="feather feather-download  text-secondary"></i>
                                        </a>
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
    <!-- End Row -->

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

    <!-- Add New Job Modal -->
    <div class="modal fade"  id="addjobmodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Job</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Position</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Job Type</label>
                            </div>
                            <div class="col-md-9">
                                <select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Job Type">
                                    <option label="Select Job Type"></option>
                                    <option value="1">Full-Time</option>
                                    <option value="2">Part-Time</option>
                                    <option value="3">Freelancer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Description</label>
                            </div>
                            <div class="col-md-9">
                                <div class="summernote"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Posted Date</label>
                            </div>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Last Date To Apply</label>
                            </div>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label mb-0 mt-2">Close Date</label>
                            </div>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label mb-0 mt-1">Status</label>
                        </div>
                        <div class="col-md-9">
                            <div class="custom-controls-stacked d-md-flex">
                                <label class="custom-control custom-radio success mr-4">
                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option1">
                                    <span class="custom-control-label">Active</span>
                                </label>
                                <label class="custom-control custom-radio success mr-4">
                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                                    <span class="custom-control-label">InActive</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button  class="btn btn-success" onclick="not1()">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add New Job Modal -->

    <!-- Edit Job Modal -->
    <div class="modal fade"  id="jobapplictionmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Job Application</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                            <tr>
                                <td class="form-label mb-0">Position</td>
                                <td>:</td>
                                <td>Senior PHP Developer</td>
                            </tr>
                            <tr>
                                <td class="form-label mb-0">Name</td>
                                <td>:</td>
                                <td>Faith Harris/td>
                            </tr>
                            <tr>
                                <td class="form-label mb-0">Email</td>
                                <td>:</td>
                                <td>faith@gmail.com</td>
                            </tr>
                            <tr>
                                <td class="form-label mb-0">Phone Number</td>
                                <td>:</td>
                                <td>+9685321475</td>
                            </tr>
                            <tr>
                                <td class="form-label mb-0">Applied On</td>
                                <td>:</td>
                                <td>25-01-2021</td>
                            </tr>
                            <tr>
                                <td class="form-label mb-0">Status</td>
                                <td>:</td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label mb-0">Description</td>
                                <td>:</td>
                                <td>
                                    <p class="mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="#" class="btn btn-primary">View Resume</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Job Modal -->

@endsection('modals')

@section('scripts')

    <!-- INTERNAL Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/job/job-application.js')}}"></script>

@endsection
