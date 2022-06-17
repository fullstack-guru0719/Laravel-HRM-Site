@extends('layouts.app')

@section('styles')

    <link  href="{{URL::asset('assets/css/custom.css')}}" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />


    <!-- Notifications  Css -->
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />


    <!-- INTERNAL Time picker css -->
    <link href="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />
   <link href="{{URL::asset('assets/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet" />



    <!-- INTERNAl Summernote css -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">


    <link  href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Update Meeting</h4>
        </div>

    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <form id="create_form" method="POST" action="{{ url('meeting/meeting-update') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div style="margin: 0px 20px; border-bottom: 1px solid #000;"><h4>Date, Time, Location & Subject</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Start Date & Time:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="feather feather-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <input class="form-control " name="parent_id" type="text" value="{{ $parent->parent_meeting_id }}" hidden>

                                                    <input class="form-control date" id="date" name="start_date" type="text" value="{{ $start_date }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="wd-150 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <span class="feather feather-clock"></span>
                                                            </div>
                                                        </div><!-- input-group-prepend -->
                                                        <input class="form-control timepicker" name="start_time" value="{{ $parent->start_time }}"  type="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">End Date & Time:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="feather feather-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <input class="form-control date" name="end_date" value="{{ $end_date }}" type="text" required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="wd-150 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <span class="feather feather-clock"></span>
                                                            </div>
                                                        </div><!-- input-group-prepend -->
                                                        <input class="form-control timepicker"  name="end_time" value="{{ $parent->end_time }}" type="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Location:</label>
                                <div class="form-group">
                                    <input class="form-control" name="location" value="{{ $parent->location }}" >
                                    <input class="form-control" name="current_meeting_id" value="{{ $parent->id }}" readonly hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Department:</label>
                                <div class="form-group">
                                    <select name="department_id"  class="form-control custom-select select2"  data-placeholder="Select Department" >
                                        <option label="Select Department"></option>
                                        @foreach($departments as $department)

                                            <option value="{{$department->id}}" @if ($parent->department_id==$department->id)
                                                selected
                                            @endif>{!! $department->department_name !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Subject:</label>
                                <div class="form-group">
                                    <input name="subject" class="form-control" value="{{ $parent->subject }}" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Type:</label>
                                <div class="form-group">
                                    <select name="type"  class="form-control custom-select select2" data-placeholder="Select Type" >
                                        <option label="Select Employee"></option>
                                        <option value="General Meeting" @if ($parent->type=="General Meeting")
                                            selected
                                        @endif>General Meeting</option>
                                        <option value="Toolbox Meeting"@if ($parent->type=="Toolbox Meeting")
                                            selected
                                        @endif>Toolbox Meeting</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div style="margin: 0px 20px; border-bottom: 1px solid #000;"><h4>Attendees</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-11">
                                <label class="form-label" for="default-select-multi">Name(Registered)</label>
                                <div class="mb-1">
                                    <select name="user_id[]" class="select2 form-select" multiple="multiple" id="user_id">
                                        @foreach($users as $user)
                                            
                                            <option value="{{$user->id}}"@foreach ($children as $child )
                                                    @if ($child->user_id==$user->id)
                                                        selected
                                                    @endif
                                                @endforeach>{!! $user->name !!}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div  class="col-md-11" id="out_attendees" >
                                <div  class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Name (Internal)</label>
                                        <div class="form-group">
                                            <input name="out_att_name" id="out_att_name" class="form-control" placeholder="FirstName, LastName" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email Address (External)</label>
                                        <div class="form-group">
                                            <input name="out_att_email" id="out_att_email" class="form-control" placeholder="Email Address" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-end col-md-1 d-flex justify-content-center mb-4 px-0">
                                <a  class="btn btn-success" onclick="add_attendee()"><i class="fa fa-plus"></i> </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card">
                    <div style="margin: 0px 20px; border-bottom: 1px solid #000;"><h4>Text Editor & Audio Recorder</h4></div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="form-label">Description:</label>
                                <textarea name="description" id="summernote">{{ $parent->description }}</textarea>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-label">Record Audio</label>
                            <div class="row">
                                <div class=" col-md-6">
                                    <div class="row container ">
                                        <div class="col-md-3">
                                            <a class="btn btn-white" id="recordButton"><i class="fa fa-play"></i> </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="btn btn-white" id="pauseButton" disabled><i class="fa fa-pause"></i> </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="btn btn-white" id="stopButton" disabled><i class="fa fa-stop"></i> </a>
                                        </div>
                                        <div class="col-md-3">
                                     
                                        </div>
                                    </div>
                                    <div id="formats">Format: start recording to see sample rate</div>
                                    <p><strong>Recordings:</strong></p>
                                    <ol id="recordingsList"></ol>

                                </div>
                                {{-- <div class="col-md-6">
                                    <img src="{{URL::asset('assets/images/second.gif')}}" />
                                </div> --}}
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-label">Upload Scanned MOM or audio recording, if available</label>
                            <div class="input-group file-browser">
                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                                <label class="input-group-append mb-0">
                                <span class="btn ripple btn-primary">
                                    Browse <input type="file" name="meeting_files[]" class="file-browserinput"  style="display: none;" multiple>
                                </span>
                                </label>
                            </div>
                            @error('meeting_files')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="card-footer text-right">
                            <button id="btn_save" type="submit" class="btn btn-success">Update</button>
                            <a href="{{ url('meeting/index') }}" class="btn btn-danger ">Close</a>
                            <a href="#" class="btn btn-danger " onclick="not1()"><i class="si si-share"> Share</i></a>
                        </div>
                    </div>

                </div>
            </form>

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

    <script src="{{URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>


    <!-- INTERNAL Summernote js  -->
    <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

    <script src="{{URL::asset('assets/js/custome.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <!-- INTERNAL Index js-->

    <script src="{{URL::asset('assets/record/recorder.js')}}"></script>
    <script src="{{URL::asset('assets/record/app.js')}}"></script>


  {{-- <script>
   $('.timepicker').timepicker({
        // timeFormat: 'h:mm p',
        interval: 30,
        // minTime: '08:00',
        // maxTime: '10:00',
        // defaultTime: '9',
        // startTime: '80:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });
  </script> --}}

    <script>
        let n_item = 0;
        function add_attendee() {
            n_item++;
            console.log(n_item);
            // e.preventDefault();
            $("#out_attendees").append('<div class="row">\n' +
                '                                <div class="col-md-6">\n' +
                '                                    <label class="form-label">Name (External)</label>\n' +
                '                                    <div class="form-group">\n' +
                `                                        <input class="form-control" id="out_att_name${n_item}" placeholder="FirstName, LastName" required>\n` +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                                <div class="col-md-6">\n' +
                '                                    <label class="form-label">Email Address(External)</label>\n' +
                '                                    <div class="form-group">\n' +
                `                                       <input class="form-control" id="out_att_email${n_item}" placeholder="Email Address" required>\n` +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                            </div>');

        }
        $("#btn_save").on('click',function() {
            var out_att_name = $("#out_att_name").val();
            var out_att_email= $("#out_att_email").val();
            for(i=1;i<n_item+1;i++)
            {
                out_att_name += ','+ $("#out_att_name"+i).val();
                out_att_email += ','+ $("#out_att_email"+i).val();
            }
            $("#out_att_name").val(out_att_name);
            $("#out_att_email").val(out_att_email);
            // $("#create_form").submit();

        });



    </script>

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
