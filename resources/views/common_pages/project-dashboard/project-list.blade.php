@extends('layouts.app')

@section('styles')

    <!-- Notifications  Css -->
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

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
            <h4 class="page-title">Project List</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="{{url('/project/project-new')}}" class="btn btn-primary" ><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Project</a>
                 </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-2 col-lg-6 col-md-12">
            <div class="card">
                <a href="#">
                    <div class="card-body text-center">
                        <span class="avatar avatar-lg bradius fs-20 bg-primary-transparent">{!! sizeof($all_parent_ids) !!}</span>
                        <h5 class="mb-0 mt-3">Total Projects</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-12">
            <div class="card">
                <a href="#">
                    <div class="card-body text-center">
                        <span class="avatar avatar-lg bradius fs-20 bg-orange-transparent">33</span>
                        <h5 class="mb-0 mt-3">Pending Projects</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-12">
            <div class="card">
                <a href="#">
                    <div class="card-body text-center">
                        <span class="avatar avatar-lg bradius fs-20 bg-secondary-transparent">56</span>
                        <h5 class="mb-0 mt-3">Ongoing Projects</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-12">
            <div class="card">
                <a href="#">
                    <div class="card-body text-center">
                        <span class="avatar avatar-lg bradius fs-20 bg-info-transparent">08</span>
                        <h5 class="mb-0 mt-3">Not Started Projects</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-12">
            <div class="card">
                <a href="#">
                    <div class="card-body text-center">
                        <span class="avatar avatar-lg bradius fs-20 bg-success-transparent">35</span>
                        <h5 class="mb-0 mt-3">Completed Projects</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-2 col-lg-6 col-md-12">
            <div class="card">
                <a href="#">
                    <div class="card-body text-center">
                        <span class="avatar avatar-lg bradius fs-20 bg-danger-transparent">{{ sizeof($canceled_parent_ids) }}</span>
                        <h5 class="mb-0 mt-3">Deleted Projects</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Row-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Projects History</h4>
                    <div class="ml-auto">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search....." type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-light br-tl-0 br-bl-0" >
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="project-list">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Project Number</th>
                                <th class="border-bottom-0">Project Title</th>
                                <th class="border-bottom-0">Client</th>
                                <th class="border-bottom-0">Team</th>
                                <th class="border-bottom-0">Priority</th>
                                <th class="border-bottom-0">Start Date</th>
                                <th class="border-bottom-0">Deadline</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{!! $project[0]->p_number !!}</td>
                                    <td>
                                        <a href="{{url('project/project-view/'.$project[0]->parent_project_id)}}" class="d-flex sidebarmodal-collpase">
                                            <span class="bg-primary dot-label1 mr-2 mt-1"></span>
                                            <span>{!! $project[0]->p_title !!}</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">{!! $project[0]->client !!}</a>
                                    </td>
                                    <td>
                                        <span>"</span>
                                            @foreach($project as $child)
                                                <span>{!! $child->user->name !!},</span>
                                            @endforeach
                                        <span>"</span>
                                    </td>
                                    <td>
                                        @if($project[0]->p_priority == 1)
                                            <span class="badge badge-danger-light">High</span>
                                        @elseif($project[0]->p_priority == 2) 
                                            <span class="badge badge-warning-light">Medium</span>
                                        @else<span class="badge badge-success-light">Low</span></td>
                                        @endif
                                    </td>
                                    <td>{!! \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$project[0]->start_date )->format('d-m-Y') !!}</td>
                                    <td>{!! \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$project[0]->end_date )->format('d-m-Y') !!}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{url('project/project-view/'.$project[0]->parent_project_id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Project"><i class="feather feather-eye text-primary"></i></a>
                                            <a href="{{url('project/project-edit/'.$project[0]->parent_project_id)}}" class="action-btns1">
                                                <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit Project"></i>
                                            </a>
                                            <a href="{{url('project/project-delete/'.$project[0]->parent_project_id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Project"><i class="feather feather-trash-2 text-danger"></i></a>
                                        </div>
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

@endsection('modals')

@section('scripts')

    <!-- Notifications js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>

    <!--INTERNAL Chart js -->
    <script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

    <!-- INTERNAL Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- INTERNAL Summernote js  -->
    <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/project/meeting-list.js')}}"></script>
    <script src="{{URL::asset('assets/js/project/project-sidemenuchart.js')}}"></script>

    <script>
        $(function() {

            $("#project-list").dataTable();
        });
    </script>

@endsection
