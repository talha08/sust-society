@extends('frontend.layouts.default')
@section('content')




    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">User Registration</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are Now on:</li>
                                <li><a href="{!! route('welcome') !!}">Home</a></li>
                                <li><a href="#">Register</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row login-wrapper">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel-body">
                            @include('includes.alert')
                            {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'class' => 'form-horizontal m-t-40', 'id'=>'register-form')) !!}

                                <br><br>
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
                                            <button type="submit" class="form-control btn btn-success btn-block">Register an Account</button>
                                        </div>
                                    </div>
                                </div>
                <br><br>
                            {!! Form::close() !!}

                    </div>
            </div>
        </div>
    </div>


@stop
@section('style')
@stop

@section('script')
@stop

