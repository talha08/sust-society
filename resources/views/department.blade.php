@extends('frontend.layouts.default')
@section('content')
    @include('frontend.department.slider')
    {{--@include('frontend.department.happyStudents')--}}
    @include('frontend.department.about')
    @include('frontend.department.event')
    <br>
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

