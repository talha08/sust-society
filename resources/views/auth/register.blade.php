<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUST Society | Sign Up </title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/plugins/bootstrapSocial/bootstrap-social.css') !!}
            <!-- Toastr style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    {!! Html::style('css/plugins/toastr/toastr.min.css') !!}
</head>
<body class="gray-bg">
<div class="loginColumns animated fadeInDown">
    <div class="row">
        <div class="col-md-6">
            <h2 class="font-bold">Welcome to SUST Society</h2>
            <p>
                Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
            <p>
                When an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <p>
                <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
            </p>
        </div>
        <div class="col-md-6">
            <div class="ibox-content">
                <div class="panel-heading">
                    <h2 class="text-center m-t-10"><strong>Sign Up</strong> </h2>
                </div>
                @include('includes.alert')
                {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'class' => 'form-signin')) !!}

                <div class="form-group">
                    {!!Form::select('dept_id', $dept_id, '',array('class' => 'select2', 'autofocus'))!!}
                </div><br/>

                <div class="form-group ">
                        {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Full Name', 'autofocus', 'required')) !!}
                </div>

                <div class="form-group ">
                        {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus', 'required')) !!}
                </div>


                <div class="form-group ">
                        {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required')) !!}
                </div>

                <div class="form-group ">
                        {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password', 'required')) !!}
                </div>

                {!! Form::submit('Log in', array('class' => 'btn btn-primary block full-width m-b', 'type'=>'submit')) !!}






                <p class="text-muted text-center">
                    <small>Already have an account?</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="{!! route('login') !!}">Login</a><br><br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Copyright &copy; SUST Society
        </div>
        <div class="col-md-6 text-right">
            <small> &copy; 2015 - <?php echo date("Y") ?></small>
        </div>
    </div>
</div>


<!-- End of Modal -->
<!-- Mainly scripts -->
{!! Html::script('js/jquery-2.1.1.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
        <!-- toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
{!! Html::script('js/plugins/toastr/toastr.min.js') !!}
@include('includes.toastr')

    <script type="text/javascript">

            jQuery(document).ready(function() {




                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });


                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker2').datepicker();

                // Time Picker
                jQuery('#timepicker3').timepicker({minuteStep: 15});


            });

    $(".select2").select2({
        width: '100%',
        theme: "classic"
    });

</script>


</body>
</html>