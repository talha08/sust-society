@extends('frontend.layouts.default')
@section('content')




    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">User/Organization Registration</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li></li>
                                <li><a href="{!! route('welcome') !!}">Home</a></li>
                                <li><a href="#">Register</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Main Content -->
    <div class="content margin-top60 margin-bottom60">
        <div class="container">
            <div class="row">
                <div class="posts-block col-sm-offset-2 col-md-8">
                    <div class="panel panel-color panel-success">

                        <div class="panel-body"><br>
                            <h2 class="text-center"><span id="formHeading">User Account or </span><a class="btn btn-success" id="formOption" onclick="formToggle()" href="#"><button type="button" class="btn btn-success">Organization Account</button></a></h2><br>

                        @include('includes.alert')
                       <!--User Signup form-->

                      <div class="col-sm-offset-1 col-md-10">
                          {!! Form::open(array('route' => 'user.store', 'method' => 'post','class' => 'form-horizontal', 'id'=>'login_form')) !!}

                          <div class="form-group">
                              {!!Form::select('dept_id', $dept_id, '',array('class' => 'select2 form-control', 'autofocus','placeholder' => 'Select Organization ....',))!!}
                          </div>


                          <div class="form-group">
                              {!!Form::select('user_type', $user_type, '',array('class' => 'select2 form-control', 'autofocus','placeholder' => 'Select Your Designation...',))!!}
                          </div>

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
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <button type="submit" class="form-control btn btn-success btn-block">Request For User Account</button>
                                  </div>
                              </div>
                          </div>
                          <br><br>
                          {!! Form::close() !!}
                      <!--/user Signup form-->







                          <!--Dept. Signup form-->
                          {!! Form::open(array('route' => 'department.request', 'method' => 'post','class' => 'form-horizontal', 'id'=>'signup_form', 'files'=>true)) !!}



                          <h4 style="color: green"><em>Admin Details:</em></h4>

                          <div class="form-group ">
                              {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Full Name', 'autofocus', 'required')) !!}
                          </div>

                          <div class="form-group ">
                              {!! Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus', 'required')) !!}
                          </div>

                          <div class="form-group">
                              {!!Form::select('user_type', $user_type, '',array('class' => 'select2 form-control', 'autofocus','placeholder' => 'Select Your Designation...',))!!}
                          </div>

                          <div class="form-group ">
                              {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required')) !!}
                          </div>

                          <div class="form-group ">
                              {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password', 'required')) !!}
                          </div>


                          <hr> <h4 style="color: green"><em>Organization Details:</em></h4>
                          <div class="form-group">
                              {!!Form::text('dept_name', '',array('class' => 'form-control','placeholder' =>  'Organization Name', 'required'))!!}
                          </div>

                          <div class="form-group">
                              {!!Form::textarea('dept_description', '',array('class' => ' form-control','placeholder' =>  'Organization Description...', 'required'))!!}
                          </div>

                          <fieldset>
                              <label>Upload Organization Logo:</label>
                              <br/>
                              <img class="preview frame" id="preview" alt=" "  height="50px" width="50px" src="{!!asset('/upload/logo.png')!!}">
                              <br/>
                              <br/>
                              <input type="file" name="image" id="imgInp" onchange="loadFile(event);">
                          </fieldset>


                          <div class="form-group">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <button type="submit" class="form-control btn btn-success btn-block">Request For Organization Account</button>
                                  </div>
                              </div>
                          </div>
                          <br><br>
                          {!! Form::close() !!}
                      </div>

                        </div>
                    </div>

                    <!--  /Single Post -->
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content end-->


@stop
@section('style')
    <style>

        .panel-body{
            background: whitesmoke;
        }
        .panel{
            border-color: teal;
        }


        fieldset {
            border:0;
            margin-bottom:20px;
        }

        input {
            display:block;
        }

        img.preview {
            width:50px;
            height:50px;
            clear:both;
            margin:10px 0;
        }
    </style>
@stop

@section('script')
    {!! Html::script('js/photo_upload.js') !!}
    <script>

        // Form toggles between login and sign up, 0 for login and 1 for signup
        var formType = 0;

        function formToggle() {
            // flip function for formType value
            formType++;
            formType = formType % 2;

            // If it's a signup form
            if (formType === 1) {

                // Hide login elements
                $("#login_form").slideUp(250);
                $('#login_validation_errors').slideUp(250);

                // Modify text based elements for signup
                $("#formHeading").fadeOut(250, function () {
                    $(this).text("Organization Account or ").fadeIn(250);
                });
                $("#formOption").fadeOut(250, function () {
                    $(this).text("User Account").fadeIn(250);
                });

                // Show signup elements
                $("#signup_form").slideDown(250);

            }

            // If it's a login form
            if (formType === 0) {

                // Hide signup elements
                $("#signup_form").slideUp(250);
                $('#signup_validation_errors').slideUp(250);

                // Modify text based elements
                $("#formHeading").fadeOut(250, function () {
                    $(this).text("User Account or ").fadeIn(250);
                });
                $("#formOption").fadeOut(250, function () {
                    $(this).text("Organization Account").fadeIn(250);
                });

                // Show Login elements
                $('#login_form').slideDown(250);
            }

        };

    </script>
@stop




