@extends('layouts.default')
@section('content')




    <div class="wraper container-fluid">

        @include('includes.alert')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title">{!!$title!!}</h3>

                    <span class="pull-right">

                    </span>
                    </div>




                    <div class="panel-body">
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
                                            {!! Form::submit('Change Password', array('class' => 'btn btn-primary')) !!}
                                        </div>
                                    </div>
                                    {!! Form::close() !!}


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>





@stop