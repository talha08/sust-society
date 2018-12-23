@extends('frontend.layouts.default')
@section('content')

    <!-- Title, Breadcrumb -->
    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Login </h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li></li>
                                <li><a href="{!! URL::to('/') !!}">Home</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Title, Breadcrumb -->




    <!-- Main Content -->
    <div class="content margin-top60 margin-bottom60">
        <div class="container">
            <div class="row">
                <div class="posts-block col-sm-offset-3 col-md-6">


                    <div class="panel panel-color panel-success">

                        <div class="panel-body">
                            <h2 class="text-center">Login</h2>
                            talhaqc@gmail.com
                            <p class="text-cente">
                            Email: <b>talhaqc@gmail.com</b> Pasword: <b>a</b>
                            </p>
                            <!--  Single Post -->
                            @include('includes.alert')
                            {!! Form::open(array('route' => 'login', 'method' => 'post', 'class' => '', 'id'=>'login')) !!}

                            <div class="form-group">
                                {!! Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus', 'required')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required')) !!}
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-lg-12">--}}
                            {{--<div class="text-center">--}}
                            {{--<input type="checkbox" tabindex="3" class="" name="remember" id="remember">--}}
                            {{--<label for="remember">  &nbsp; Remember Me</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="form-control btn btn-success">Login Account</button>
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
    </style>
@stop

@section('script')
@stop
