@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">

                    @foreach($comLists as $com)

                        <div class="col-lg-3">
                            <div class="contact-box center-version">

                                <a href="profile.html">
                                    <img alt="image" class="img-circle" src="{!! asset('img/a2.jpg') !!}">
                                    <h3 class="m-b-xs"><strong>{!! $com->user->name !!}</strong></h3>
                                    <div class="font-bold">{!! $com->committeMemberType->name !!}</div>
                                </a>

                                <div class="contact-box-footer">
                                    <div class="m-t-xs btn-group">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                        <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

            </div>
        </div>
    </div>
@stop

@section('style')
@stop

@section('script')
@stop

