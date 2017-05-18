@extends('frontend.layouts.default')
@section('content')

    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">{!! $title !!}</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li></li>
                                <li><a href="{!! URL::to('/') !!}">Home</a></li>
                                <li><a href="#">Password Change</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel-body">

                    @include('includes.alert')
                    {!! Form::open(array('route' => 'password.doChange', 'class' => 'form-horizontal')) !!}

                    <div class="form-group">
                        {!! Form::label('password', 'New Password*', array('class' => 'col-md-2 control-label')) !!}
                        <div class="col-md-4">
                            {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'New Password','required')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Confirm Password*', array('class' => 'col-md-2 control-label')) !!}
                        <div class="col-md-4">
                            {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password','required')) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {!! Form::submit('Reset Password', array('class' => 'btn btn-success')) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- /Main Content -->


@stop
@section('style')

@stop

@section('script')
@stop

