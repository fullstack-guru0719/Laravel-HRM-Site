<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <!-- Meta data -->
        <meta charset="UTF-8">

        <!-- Title -->
        <title>DMS-App</title>

        <!-- Bootstrap css -->
        <link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet" />
        <!-- INTERNAl Summernote css -->
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">
        <style>
            p {
                margin-top: 0;
                margin-bottom: 0.3rem;
            }
        </style>

    </head>

    <body class="" >
        <div class="container" style="padding-top: -10px">
            <div class="row">
                <div class="col-md-6">
                    <H1><u>HSW Energy N.V.</u></H1>
                    <p>Plutostraat 204</p>
                    <p>Paramaribo, Suriname (South Am.) </p>
                    <br>
                    <p><b>Telephone: </b> (+597) 455-776</p>
                    <p><b>Email: </b> <a href="#">sales@hswenergy.com</a></p>
                    <p><b>Website: </b> <a href="#">www.hswenergy.com</a></p>
                </div>

                    <img
                        style="width:250px; position: absolute; right: 40px; top: 30px"
                            src="data:image/png;base64,{{$image}}" class="header-brand-img" alt="HSW ENERGY">
{{--                    <img src="{{asset('pdf_convert_head.png')}}" class="header-brand-img" alt="HSW ENERGY" style="width:350px;height:180px;">--}}
                </div>
            </div>
            <div style="border-bottom: 2px solid #000000;margin-top: 20px">

            </div>
            <div>
                <br>
                <h3 style="text-align: center"><u>Minutes of Meeting</u></h3>
                <p>Date : {{\Illuminate\Support\Carbon::now()}}</p>
                <p>Subject : {{$parent->subject}}</p>
                <br>
                <p>Start Time  : {{$parent->start_date . ' '. $parent->start_time}}</p>
                <p>End Time  : {{$parent->end_date . ' '. $parent->end_time}} </p>
                <br>
                <p> Attendees(Registered) :
                    @foreach($children as $child)
                        <span>{{$child->user->name}} </span>
                    @endforeach
                </p>
                <p> Attendees(Out Side) :
                    @foreach($out_attendees as $out_attendee)
                        <span>{{$out_attendee->out_att_name}} </span>
                    @endforeach
                </p>
                <br>
                <P>Description:</P>
                {{-- <textarea name="description"  id="summernote" class="summernote" >
                    {!! $parent->description !!}
                </textarea> --}}

                <div>{!! $parent->description !!}</div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p>End of Meeting</p>
            </div>

        </div>

        <!-- Jquery js-->
        <script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap4 js-->
        <script src="{{URL::asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    // height: 300,
                    toolbar:false
                });
            });
        </script>

    </body>
</html>
