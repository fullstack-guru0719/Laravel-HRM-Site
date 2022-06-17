<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <!-- Meta data -->
        <meta charset="UTF-8">

        <!-- Title -->
        <title>DMS-App</title>

        <!-- Bootstrap css -->
        <link href="<?php echo e(URL::asset('assets/plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet" />
        <!-- INTERNAl Summernote css -->
        <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.css')); ?>">
        <style>
            p {
                margin-top: 0;
                margin-bottom: 0.3rem;
            }
        </style>

    </head>

    <body class="" >
        <div class="container" style="padding-top: 40px">
            <div class="row">
                <div class="col-md-6">
                    <H1><u>HSW Energy N.V.</u></H1>
                    <p>Plutostraat 204</p>
                    <p>Paramribo, Suriname </p>
                    <br>
                    <p><b>Telephone: </b> (+597)455776</p>
                    <p><b>Email: </b> <a href="#">sales@hswenrgy.com</a></p>
                    <p><b>Website: </b> <a href="#">www.hswenergy.com</a></p>
                </div>

                    <img
                        style="width:300px; position: absolute; right: 40px; top: 100px"
                            src="data:image/png;base64,<?php echo e($image); ?>" class="header-brand-img" alt="HSW ENERGY">

                </div>
            </div>
            <div style="border-bottom: 2px solid #000000;margin-top: 20px">

            </div>
            <div>
                <br>
                <h3 style="text-align: center"><u>Minutes of Meeting</u></h3>
                <p>Date : <?php echo e(\Illuminate\Support\Carbon::now()); ?></p>
                <p>Subject : <?php echo e($parent->subject); ?></p>
                <br>
                <p>Start Time  : <?php echo e($parent->start_date . ' '. $parent->start_time); ?></p>
                <p>End Time  : <?php echo e($parent->end_date . ' '. $parent->end_time); ?> </p>
                <br>
                <p>designator :</p>
                <br>
                <p> Attendees(Registered) :
                    <?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span><?php echo e($child->user->name); ?> </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
                <p> Attendees(Out Side) :
                    <?php $__currentLoopData = $out_attendees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $out_attendee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span><?php echo e($out_attendee->out_att_name); ?> </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
                <br>
                <P>Description</P>
                

                <div><?php echo $parent->description; ?></div>

                <br>
                <p>End of Meeting</p>
            </div>

        </div>

        <!-- Jquery js-->
        <script src="<?php echo e(URL::asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
        <!-- Bootstrap4 js-->
        <script src="<?php echo e(URL::asset('assets/plugins/bootstrap/popper.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/plugins/summernote/summernote-bs4.js')); ?>"></script>

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
<?php /**PATH E:\practice_by_++\DMS\resources\views/meeting-convert-pdf.blade.php ENDPATH**/ ?>