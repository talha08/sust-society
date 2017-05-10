@extends('frontend.layouts.default')
@section('content')
    @include('frontend.department.slider')


    @include('frontend.department.about')


    <!-- Slogan -->
    <div class="slogan margin-top100 bottom-pad-small">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    @if(!Auth::user())
                        <div class="slogan-content">
                            <div class="col-lg-10 col-md-10 wow fadeInLeft">
                                <h2 class="slogan-title">Found a reason to Join with us? Lets's start!</h2>
                            </div>
                            <div class="col-lg-2 col-md-2 wow fadeInRight">
                                <div class="get-started wow fadeIn">
                                    <a href="{!! route('user.create') !!}" class="btn-special btn-grey pull-right">Join</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @else
                        <div class="slogan-content">
                            <div class="col-lg-10 col-md-10 wow fadeInLeft">
                                <h2 class="slogan-title">Want to register yourself on recent events!</h2>
                            </div>
                            <div class="col-lg-2 col-md-2 wow fadeInRight">
                                <div class="get-started wow fadeIn">
                                    <a href="{!! route('registration.index') !!}" class="btn-special btn-grey pull-right">Register</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /Slogan -->



    @include('frontend.department.event')

    @include('frontend.department.notice')



@stop
@section('style')
    {{--<style>--}}
        {{--#myCarousel img {--}}
            {{--height: 325px;--}}
        {{--}--}}
    {{--</style>--}}
@stop

@section('script')
@stop

