@extends('frontend.layouts.default')
@section('content')

    <section class="grey section">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-wrapper">
                        <div class="row second-bread">
                            <div class="col-md-6 text-left">
                                <h1>{!! $title !!}</h1>
                            </div><!-- end col -->
                            <div class="col-md-6 text-right">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Event</li>
                                    </ol>
                                </div><!-- end bread -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end blog-wrapper -->




                    @foreach($events as $event)
                    <div class="blog-wrapper">
                        <div class="blog-title">
                            <h2><a href="{!! route('event.details', $event->event_meta_data) !!}" title="">{!! $event->headline !!}</a></h2>
                            <div class="post-meta">
                                    <span>
                                    <i class="fa fa-user"></i>
                                    <a href="#">Department: {!! $event->dept->name !!}</a>
                                    </span>
                                    <span>
                                    <i class="fa fa-tag"></i>
                                    <a href="#">Venue: {!! $event->venue !!}</a>
                                    </span>
                                    <span>
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">Start Date: {!! $event->start_time !!}</a>
                                    </span>

                            </div>
                        </div><!-- end blog-title -->
                        <div class="blog-image">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{!! asset($event->banner) !!}" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div><!-- end blog-image -->

                        <div class="blog-desc">
                            {{--<div class="post-date">--}}
                                {{--<span class="day">21</span>--}}
                                {{--<span class="month">Feb</span>--}}
                            {{--</div>--}}
                            <p>{!! str_limit($event->description, 100) !!}</p>
                            <a href="{!! route('event.details', $event->event_meta_data) !!}" class="readmore">Read More</a>
                        </div><!-- end desc -->
                    </div><!-- end blog-wrapper -->

                    <hr class="invis">
                    @endforeach

                    <nav class="text-center">
                        {!! $events->render() !!}
                    </nav>

                </div><!-- end content -->

                @include('frontend.includes.rightsidebar')
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->



@stop
@section('style')
    <style>
        .carousel-inner > .item > img, .carousel-inner > .item > a > img{
            padding-left: 45px;
        }
    </style>
@stop

@section('script')
@stop

