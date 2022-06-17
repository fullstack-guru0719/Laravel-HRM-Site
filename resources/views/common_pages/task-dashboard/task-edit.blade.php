@extends('layouts.app')

@section('styles')

<!-- Notifications  Css -->
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

<!-- INTERNAl Summernote css -->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

@endsection

@section('content')

<!--Page header-->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Edit Task</h4>
    </div>
</div>
<!--End Page header-->

<!-- Row -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <form method="POST" action="{{url('task/task-update')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Task ID</label>
                                <input class="form-control" value="{{ $current_task->id }} " name="current_task_id" required readonly hidden>

                                <input class="form-control" value="{{ $current_task->t_number }} " name="t_number" required readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Task Title</label>
                                <input class="form-control" value="{{ $current_task->t_title }}" name="t_title" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Department:</label>
                                <select name="department_id"  class="form-control custom-select select2" data-placeholder="Select Department" required>
                                    <option label="Select Department"></option>
                                    @foreach($departments as $department)
                                        <option value="{!! $department->id !!}"@if ($current_task->department_id==$department->id)
                                            selected
                                        @endif>{!! $department->department_name!!}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Assign To:</label>
                                <select name="user_id"  class="form-control custom-select select2" data-placeholder="Select Employee" required>
                                    <option label="Select Employee"></option>
                                    @foreach($users as $user)
                                        <option value="{!! $user->id !!}" @if ($current_task->user_id==$user->id)
                                            selected
                                        @endif>{!! $user->name !!}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Task Priority:</label>
                        <select name="t_priority"  class="form-control custom-select select2" required>
                            <option label="Select Priority"></option>
                            <option value="1" @if ($current_task->t_priority==1)
                                selected
                            @endif>High</option>
                            <option value="2" @if ($current_task->t_priority==2)
                                selected
                            @endif>Medium</option>
                            <option value="3"@if ($current_task->t_priority==3)
                                selected
                            @endif>Low</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">From:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div><input  name="start_date" value="{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$current_task->start_date)->format('d-m-Y')  }}" class="form-control date" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">To:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div><input  name="end_date" class="form-control date" value="{{  \Illuminate\Support\Carbon::createFromFormat('Y-m-d',$current_task->end_date)->format('d-m-Y')}}" type="text" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description:</label>
                        <textarea name="description" id="summernote"  required>{{ $current_task->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Attachment:</label>
                        <div class="input-group file-browser">
                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                            <label class="input-group-append mb-0">
                            <span class="btn ripple btn-primary">
                                Browse <input type="file" name="task_files[]" class="file-browserinput"  style="display: none;" multiple>
                            </span>
                            </label>
                        </div>
                    </div>
                    <div class="custom-controls-stacked d-md-flex">
                        <label class="form-label mt-1 mr-5">Work Status :</label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="task_status" value="1" @if ($current_task->status==1)
                                checked
                            @endif>
                            <span class="custom-control-label">Completed</span>
                        </label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="task_status" value="2" @if ($current_task->status==2)
                            checked
                        @endif>
                            <span class="custom-control-label">Not Started</span>
                        </label>
                        <label class="custom-control custom-radio success">
                            <input type="radio" class="custom-control-input" name="task_status" value="3" @if ($current_task->status==3)
                            checked
                        @endif>
                            <span class="custom-control-label">In Progress</span>
                        </label>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('task/index') }}" class="btn btn-danger btn-lg">Close</a>
                    <button type="submit" class="btn btn-success btn-lg" >Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- End Row-->

@endsection('content')

@section('modals')


@endsection('modals')

@section('scripts')


 <!-- INTERNAL Timepicker js -->
 <script src="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
 <script src="{{URL::asset('assets/plugins/time-picker/toggles.min.js')}}"></script>


 <!-- INTERNAL Datepicker js -->
 <script src="{{URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
 <script src="{{URL::asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


 <!-- Notifications js -->
 <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
 <script src="{{URL::asset('assets/js/select2.full.min.js')}}"></script>
 <script src="{{URL::asset('assets/js/select2.js')}}"></script>

 <!-- INTERNAL Datepicker js -->
 {{-- <script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script> --}}

 <!-- INTERNAL Summernote js  -->
 <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

 <script src="{{URL::asset('assets/js/custome.js')}}"></script>

 <!-- INTERNAL Index js-->
 <script src="{{URL::asset('assets/js/task/task-new.js')}}"></script>


 <script>
    $(document).ready(function() {
        $('.date').datetimepicker({
            format: 'DD-MM-YYYY',
            locale: 'en'
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
                fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82'],
                toolbar: [
                ['style', ['clear','bold', 'italic', 'underline']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['view', ['codeview']]
                ],
                height: 300,       
            });
    });
</script>
@endsection
