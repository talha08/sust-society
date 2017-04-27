@extends('frontend.layouts.default')
@section('content')

    <div class="row login-wrapper">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">

                        <div class="col-lg-12">

                            @include('includes.alert')

                            {!! Form::open(array('route' => 'login', 'method' => 'post', 'class' => 'form-horizontal m-t-40', 'id'=>'login-form')) !!}


                                <div class="form-group">
                                    {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'type'=>'text','autofocus', 'required')) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text', 'required')) !!}
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember">  &nbsp; Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="form-control btn btn-default">Login Account</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a data-toggle="modal" href="#myModal2"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}






                            {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'class' => 'form-horizontal m-t-40', 'id'=>'register-form')) !!}



                                <div class="form-group">
                                    {!!Form::select('dept_id', $dept_id, '',array('class' => 'select2 form-control', 'autofocus','placeholder' => 'Select Society ....',))!!}
                                </div><br/>


                                <div class="form-group">
                                    {!!Form::select('user_type', $user_type, '',array('class' => 'select2 form-control', 'autofocus','placeholder' => 'Select Your Designation...',))!!}
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
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="form-control btn btn-default btn-block">Register an Account</button>
                                        </div>
                                    </div>
                                </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <br><br><br><br>

    <!-- Modal For reset -->
    <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                    <small class="font-bold">Recover Your account with your email</small>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    {!! Form::open(array('action' => 'RemindersController@postEmail', 'method' => 'post')) !!}
                    {!! Form::email('email', '', array('class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email Address', 'autocomplete'=>'off',  'required')) !!}
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    {!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

@stop
@section('style')
@stop

@section('script')
@stop

