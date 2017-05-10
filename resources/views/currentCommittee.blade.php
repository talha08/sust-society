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
                                <li>You are Now on:</li>
                                <li><a href="{!! URL::to('/') !!}">Home</a></li>
                                <li><a href="#">Committee</a></li>

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
                @if($comLists->count() != 0)
                    @foreach($comLists as $com)

                        <div class="col-lg-3">
                            <div class="contact-box center-version">

                                <a href="{!! route('userProfile', $com->user->id) !!}">
                                    {!!  Html::image($com->user->profile->photo, 'alt', array( 'width' => 80, 'height' => 80, 'class'=>'img-circle' )) !!}
                                    <h3 class="m-b-xs"><strong>{!! $com->user->name !!}</strong></h3>
                                    <div class="font-bold">{!! $com->committeMemberType->name !!}</div>
                                </a><br>

                                <div class="contact-box-footer">
                                    <div class="m-t-xs btn-group">
                                        {{--<a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>--}}
                                        {{--<a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>--}}
                                        <a href="{!! route('userProfile', $com->user->id) !!}" class="btn btn-xs btn-white"><i class="fa fa-user-plus 1x"></i> Profile</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    <center> No Member Added Yet </center>
                @endif
            </div>
        </div>
    </div>
    <!-- /Main Content -->





@stop
@section('style')
    <style>
    </style>
@stop

@section('script')
@stop

