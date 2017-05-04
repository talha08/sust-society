@extends('frontend.layouts.default')
@section('content')

    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Single Event</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are Now on:</li>
                                <li><a href="{!! route('welcome') !!}">Home</a></li>
                                <li><a href="#">Events</a></li>
                                <li>{!! str_limit($event->headline, 20) !!}..</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Main Content start-->
    <div class="content margin-top60 margin-bottom60">
        <div class="container">
            <div class="row">

                <!-- Blog Posts -->
                <div class="posts-block col-lg-8 col-md-8 col-sm-8 col-xs-12">

                            <!-- Blog Post 1 -->
                    <article class="post hentry">
                        <div class="post-image">
                            <a href="{!! asset($event->banner) !!}" data-rel="prettyPhoto">
                                <span class="img-hover"></span>
                                <span class="fullscreen"><i class="fa fa-plus"></i></span>
                                <img src="{!! asset($event->banner) !!}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <header class="post-header">
                            <h2><a href="{!! route('event.details',$event->event_meta_data) !!}" title="dd"> {!! $event->headline !!}</a></h2>
                            <div class="blog-entry-meta">

                                <div class="blog-entry-meta-author">
                                    <i class="fa fa-user"></i>
                                    <span class="blog-entry-meta-author">Department: {!! $event->dept->name !!}</span>
                                </div>

                                <div class="blog-entry-meta-tags">
                                    <i class="fa fa-tags"></i>
                                    <a href="#">Venue: {!! $event->venue !!}</a>,
                                </div>

                                <div class="blog-entry-meta-date">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="blog-entry-meta-date-day">Start Date: {!! $event->start_time !!}</span>
                                </div>

                            </div>



                        </header>
                        <div class="post-content">
                            <p>
                                {!! $event->description !!}
                            </p>
                        </div>


                        <blockquote>
                            @if($event->eventFile->count() != 0)
                                <p><b>Event Atrtachment:</b></p>
                                @foreach($event->eventFile as $file)
                                    {!! $event->event_file_title !!}
                                    <a class="btn btn-info btn-xs btn-archive" href="{!! $event->event_file!!}" target="_blank">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </a><br><br/>
                                @endforeach
                            @else
                                <em>No File found.....</em>
                            @endif
                        </blockquote>

                    </article>
                    <!-- /Blog Post 1 -->






                </div>
                <!-- /Blog Posts -->
                @include('frontend.includes.rightsidebar')

            </div>
        </div>
    </div>
    <!-- /Main Content end-->




@stop
@section('style')
    <style>

    </style>
@stop

@section('script')
@stop

