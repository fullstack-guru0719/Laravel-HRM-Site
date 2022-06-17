<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <!-- Meta data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
        <meta content="Spruko Technologies Private Limited" name="author">
        <meta name="keywords" content="admin dashboard, dashboard ui, backend, admin panel, admin template, dashboard template, admin, bootstrap, laravel, laravel admin panel, php admin panel, php admin dashboard, laravel admin template, laravel dashboard, laravel admin panel"/>

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
        <div class="container" style="padding: 100px 150px 150px 0px">
            <div class="row">
                <div class="col-md-6">
                    <H1 style="border-bottom: 2px solid #000000; width: fit-content">HSW Energy N.V.</H1>
                    <p>Plutostraat 204</p>
                    <p>Paramaribo, Suriname </p>
                    <br>
                    <p><b>Telephone: </b> (+597) 455776</p>
                    <p><b>Email: </b> <a href="#">sales@hswenergy.com</a></p>
                    <p><b>Website: </b> <a href="#">www.hswenergy.com</a></p>
                </div>
                <div class="col-md-6">
                    <div class="container"></div>
                    <img src="{{URL::asset('assets/images/brand/pdf_convert_head.png')}}" class="header-brand-img" alt="HSW ENERGY" style="width:400px;height:180px;">
                </div>
            </div>
            <div style="border-bottom: 2px solid #000000;margin-top: 20px">

            </div>
            <div>
                <br>
                <center><h3 style="border-bottom: 2px solid #000000; width: fit-content">Minutes of Meeting</h3></center>
                <p>Date : {{\Illuminate\Support\Carbon::now()}}</p>
                <p>Subject : Minutes of Meeting</p>
                <br>
                <p>Start Time  : </p>
                <p>End Time  : </p>
                <br>
                <p>designator :</p>
                <br>
                <p> Attendees : </p>
                <br>
                <textarea name="description"  id="summernote" class="summernote" ></textarea>

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
                    height: 300,
                    toolbar:false
                });
            });
        </script>

    </body>
</html>
