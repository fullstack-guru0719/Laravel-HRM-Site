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
            <h4 class="page-title">Deleted Meeting List</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="{{url('meeting/meeting-new')}}" class="btn btn-primary "><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Meeting</a>
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
                    <h4 class="card-title">Deleted Meetings History</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="meeting-list">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Meeting Number</th>
                                <th class="border-bottom-0">Start Date</th>
                                <th class="border-bottom-0">End Date</th>
                                <th class="border-bottom-0">Subject</th>
                                <th class="border-bottom-0">Location</th>
                                <th class="border-bottom-0">Attendees</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($meetings as $meeting )
                                <tr>
                                    <td>{{ $meeting[0]->meeting_number}}</td>
                                    <td>
                                        <a href="{{url('meeting/meeting-view'.$meeting[0]->parent_meeting_id)}}" class="d-flex sidebarmodal-collpase">
                                            <span>{!! \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$meeting[0]->start_date)->format('d-m-Y'). ' '. $meeting[0]->start_time !!}</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{url('meeting/meeting-view'.$meeting[0]->parent_meeting_id)}}" class="d-flex sidebarmodal-collpase">
                                            <span>{!! \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$meeting[0]->end_date)->format('d-m-Y'). ' '.$meeting[0]->end_time !!}</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">{!! $meeting[0]->subject !!}</a>
                                    </td>
                                    <td>
                                        <span>{!! $meeting[0]->location !!}</span>
                                    </td>
                                    <td>
                                        <span>"</span>
                                        @foreach($meeting as $child)
                                            <span>{!! $child->user->name !!},</span>
                                        @endforeach
                                            @if ($out_attendees[$child->parent_meeting_id]!=null)
                                                <span>{{ $out_attendees[$child->parent_meeting_id]->out_att_name }}</span>
                                            @endif
                                        <span>"</span>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{url('meeting/meeting-restore/'.$meeting[0]->parent_meeting_id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Restore"><i class="fa fa-mail-reply"></i></a>
                                            <a href="{{url('meeting/meeting-view/'.$meeting[0]->parent_meeting_id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Meeting"><i class="feather feather-eye text-primary"></i></a>
                                            {{-- <a href="{{url('meeting/meeting-edit/'.$meeting[0]->parent_meeting_id)}}" class="action-btns1">
                                                <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit Meeting"></i>
                                            </a> --}}
                                            <a href="{{url('meeting/meeting-empty/'.$meeting[0]->parent_meeting_id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Empty"><i class="feather feather-trash-2 text-danger"></i></a>
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

    <script>
        $(function() {

            $("#meeting-list").dataTable();
        });
    </script>

    <!-- INTERNAL Index js-->
{{--    <script src="{{URL::asset('assets/js/task/meeting-list.js')}}"></script>--}}

@endsection
