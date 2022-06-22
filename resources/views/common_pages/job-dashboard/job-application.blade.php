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
        {{-- <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#addjobmodal"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Add New Job</a>
                    <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div> --}}
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
                                @foreach ($job_users as $job_user )
                                <tr>
                                    <td>{{ $job_user->job_user_number }}</td>
                                    <td>
                                        <a href="#">{{ $job_user->job->job_position }}</a>
                                    </td>
                                    <td>{{ $job_user->name }}</td>
                                    <td>{{ $job_user->email }}</td>
                                    <td>{{ $job_user->phone_number }}</td>
                                    <td>{{ $job_user->created_at }}</td>
                                    <td>{{ $job_user->name }}</td>
                                    <td>
                                        @if ($job_user->status==0)
                                            <span class="badge badge-warning">Pending</span>
                                            @elseif ($job_user->status==1)
                                                <span class="badge badge-primary">Selected</span>
                                            @else
                                                <span class="badge badge-danger">Rejected</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ url('job/job-application-accept/'.$job_user->id) }}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Accept">
                                                <i class="feather feather-check text-success" ></i>
                                            </a>
                                            <a href="{{ url('job/job-application-reject/'.$job_user->id) }}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Rejected">
                                                <i class="feather feather-x text-danger"></i>
                                            </a>
                                            {{-- <a href="{{ url('job/job-application-view/'.$job_user->id) }}" class="action-btns1" >
                                                <i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
                                            </a> --}}
                                            <a href="{{ url('job/job-application-delete/'.$job_user->id) }}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="feather feather-trash-2 text-danger"></i>
                                            </a>
                                            <a href="{{ url('job/job-application-download/'.$job_user->id) }}" class="action-btns" data-toggle="tooltip" data-placement="top" title="Download Resume">
                                                <i class="feather feather-download  text-secondary"></i>
                                            </a>
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
    <!-- End Row -->

@endsection('content')

@section('modals')



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
