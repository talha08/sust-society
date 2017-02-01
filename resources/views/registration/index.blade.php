@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
                @if($regis->count() != 0)
                    @foreach($regis as $reg)

                        <div class="col-lg-6">
                            <div class="contact-box center-version">

                                <a href="{!! route('registration.show',$reg->id ) !!}">
                                    {!!  Html::image($reg->banner, 'alt', array( 'width' => 200, 'height' => 200 )) !!}
                                    <h3 class="m-b-xs"><strong>{!! $reg->headline !!}</strong></h3>
                                    <div class="font-bold">Venue - {!! $reg->venue !!}</div>
                                    <div class="font-bold">Start at - {!! $reg->start_time !!}</div>
                                    <div class="font-bold">End at - {!! $reg->end_time !!}</div>
                                </a>

                                <div class="contact-box-footer">
                                    <div class="m-t-xs btn-group">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Details </a>
                                        <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Register </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    No Member Added Yet
                @endif

            </div>
        </div>
    </div>
@stop



@section('style')
    <style>
        .contact-box.center-version > a img {
            width: 400px;
            height: 200px;
            margin-top: 5px;
            margin-bottom: 10px;
        }
    </style>
@stop

@section('script')
@stop

