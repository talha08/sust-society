@extends('frontend.layouts.default')
@section('content')
    @include('frontend.department.slider')


    @include('frontend.department.about')
    @include('frontend.department.event')

    @include('frontend.department.notice')



@stop
@section('style')
    <style>
        #myCarousel img {
            height: 325px;
        }
    </style>
@stop

@section('script')
@stop

