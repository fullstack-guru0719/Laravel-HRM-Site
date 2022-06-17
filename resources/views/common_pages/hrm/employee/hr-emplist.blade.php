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
            <h4 class="page-title">Employees</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="{{url('hrm/employee/hr-addemployee')}}" class="btn btn-primary mr-3">Add New Employee</a>
                    <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row-->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="mt-0 text-left"> <span class="font-weight-semibold">Total Employees</span>
                                <h3 class="mb-0 mt-1 text-success">5,678</h3>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="icon1 bg-success-transparent my-auto  float-right"> <i class="las la-users"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="mt-0 text-left"> <span class="font-weight-semibold">Total Male Employees</span>
                                <h3 class="mb-0 mt-1 text-primary">3,876</h3>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="icon1 bg-primary-transparent my-auto  float-right"> <i class="las la-male"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="mt-0 text-left"> <span class="font-weight-semibold">Total Female Employees</span>
                                <h3 class="mb-0 mt-1 text-secondary">1,396</h3> </div>
                        </div>
                        <div class="col-5">
                            <div class="icon1 bg-secondary-transparent my-auto  float-right"> <i class="las la-female"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="mt-0 text-left"> <span class="font-weight-semibold">Total New Employees</span>
                                <h3 class="mb-0 mt-1 text-danger">398</h3> </div>
                        </div>
                        <div class="col-5">
                            <div class="icon1 bg-danger-transparent my-auto  float-right"> <i class="las la-user-friends"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Employees List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 w-5">No</th>
                                <th class="border-bottom-0">Emp Name</th>
                                <th class="border-bottom-0 w-10">#Emp ID</th>
                                <th class="border-bottom-0">Department</th>
                                <th class="border-bottom-0">Designation</th>
                                <th class="border-bottom-0">Phone Number</th>
                                <th class="border-bottom-0">Join Date</th>
                                <th class="border-bottom-0">At work</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Faith Harris</h6>
                                            <p class="text-muted mb-0 fs-12">faith@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#2987</td>
                                <td>Designing Department</td>
                                <td>Web Designer</td>
                                <td>+9685321475</td>
                                <td>05-05-2017</td>
                                <td>3 yrs 1 mons 13 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Austin Bell</h6>
                                            <p class="text-muted mb-0 fs-12">austin@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#4987</td>
                                <td>Development Department</td>
                                <td>Angular Developer</td>
                                <td>+8653217950</td>
                                <td>02-01-2018</td>
                                <td>3 yrs 0 mons 25 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Maria Bower</h6>
                                            <p class="text-muted mb-0 fs-12">maria@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#6729</td>
                                <td>Marketing Department</td>
                                <td>Marketing analyst</td>
                                <td>+9563258417</td>
                                <td>02-08-2019</td>
                                <td>2 yrs 3 mons 23 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Peter Hill</h6>
                                            <p class="text-muted mb-0 fs-12">peter@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#2098</td>
                                <td>IT Department</td>
                                <td>Testor</td>
                                <td>+8563249751</td>
                                <td>01-01-2020</td>
                                <td>1 yrs 0 mons 25 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Victoria	Lyman</h6>
                                            <p class="text-muted mb-0 fs-12">victoria@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#1025</td>
                                <td>Managers Department</td>
                                <td>General Manager</td>
                                <td>+9635826432</td>
                                <td>05-05-2021</td>
                                <td>0 yrs 0 mons 20 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Adam	Quinn</h6>
                                            <p class="text-muted mb-0 fs-12">adam@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#3262</td>
                                <td>Accounts Department</td>
                                <td>Accountant</td>
                                <td>+9685231572</td>
                                <td>05-05-2020</td>
                                <td>0 yrs 8 mons 20 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Melanie Coleman</h6>
                                            <p class="text-muted mb-0 fs-12">melanie@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#3489</td>
                                <td>Application Department</td>
                                <td>App Designer</td>
                                <td>+8635291470</td>
                                <td>15-02-2019</td>
                                <td>1 yrs 11 mons 10 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Max	Wilson</h6>
                                            <p class="text-muted mb-0 fs-12">max@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#3698</td>
                                <td>Development Department</td>
                                <td>PHP Developer</td>
                                <td>+9986357240</td>
                                <td>05-05-2020</td>
                                <td>0 yrs 9 mons 20 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Amelia Russell</h6>
                                            <p class="text-muted mb-0 fs-12">amelia@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#5612</td>
                                <td>Designing Department</td>
                                <td>UX Designer</td>
                                <td>+9356982472</td>
                                <td>01-05-2018</td>
                                <td>2 yrs 9 mons 25 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Justin Metcalfe</h6>
                                            <p class="text-muted mb-0 fs-12">justin@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#0245</td>
                                <td>Designing Department</td>
                                <td>Web Designer</td>
                                <td>+9685321475</td>
                                <td>05-05-2017</td>
                                <td>3 yrs 1 mons 13 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Sophie Anderson</h6>
                                            <p class="text-muted mb-0 fs-12">faith@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#3467</td>
                                <td>Development Department</td>
                                <td>Java Developer</td>
                                <td>+8674231566</td>
                                <td>025-08-2020</td>
                                <td>0 yrs 4 mons 0 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Ryan	Young</h6>
                                            <p class="text-muted mb-0 fs-12">ryan@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#2987</td>
                                <td>Designing Department</td>
                                <td>Ui Designer</td>
                                <td>+9685321475</td>
                                <td>05-05-2017</td>
                                <td>3 yrs 1 mons 13 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Jennifer	Hardacre</h6>
                                            <p class="text-muted mb-0 fs-12">jennifer@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#9365</td>
                                <td>Technical Department</td>
                                <td>Supporter</td>
                                <td>+9685321475</td>
                                <td>03-09-2019</td>
                                <td>1 yrs 2 mons 25 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Justin Parr</h6>
                                            <p class="text-muted mb-0 fs-12">justin@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#3109</td>
                                <td>Application Department</td>
                                <td>App Developer</td>
                                <td>+9685321475</td>
                                <td>12-12-2020</td>
                                <td>0 yrs 01 mons 13 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Julia Hodges</h6>
                                            <p class="text-muted mb-0 fs-12">julia@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#2987</td>
                                <td>Development Department</td>
                                <td>Java Developer</td>
                                <td>+8659357241</td>
                                <td>04-04-2020</td>
                                <td>0 yrs 9 mons 21 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
                                        <i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Michael Sutherland</h6>
                                            <p class="text-muted mb-0 fs-12">michael@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>#2987</td>
                                <td>Accounts Department</td>
                                <td>Accountant</td>
                                <td>+8866449975</td>
                                <td>15-10-2018</td>
                                <td>2 yrs 2 mons 10 days</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-primary btn-icon btn-sm"  href="{{url('hr-empview')}}">
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

    <!-- INTERNAL Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/hr/hr-emp.js')}}"></script>

@endsection
