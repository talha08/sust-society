@extends('frontend.layouts.default')
@section('content')

    <section class="grey section">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-wrapper">
                        <div class="row second-bread">
                            <div class="col-md-6 text-left">
                                <h1> Event Details</h1>
                            </div><!-- end col -->
                            <div class="col-md-6 text-right">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Event Details</li>
                                    </ol>
                                </div><!-- end bread -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end blog-wrapper -->

                    <div class="blog-wrapper single-blog-wrapper">
                        <div class="blog-title">
                            <h2><a href="#" title="">{!! $event->headline !!}</a></h2>
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
                            <a href="single.html" title=""><img src="{!! asset($event->banner) !!}" alt="" class="img-responsive"></a>
                        </div><!-- end image -->
                        <div class="blog-desc">
                         {!! $event->description !!}
                            <hr class="invis">



                            <p><b>Venue:</b> {!! $event->venue !!} </p>

                            <p><b>Event Start Date:</b> {!! $event->start_time !!} </p>

                            <p><b>Event End Date:</b>  {!! $event->end_time !!} </p>

                            @if($event->open_registration ==1)
                                <p><b>Event Registration:</b> Open </p>
                            @else
                                <p><b>Event Registration:</b> Close </p>
                            @endif


                            <p><b>EventFile:</b></p>
                            @if($event->eventFile->count() != 0)
                                @foreach($event->eventFile as $file)
                                    {!! $file->event_file_title !!}
                                    <a class="btn btn-info btn-xs btn-archive" href="{!! $file->event_file!!}" target="_blank">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </a><br><br/>
                                @endforeach
                            @else
                                <em>No File found.....</em>
                            @endif

                        </div><!-- end desc -->





                    </div><!-- end blog-wrapper -->
                    <hr class="invis">
                </div><!-- end content -->


                @include('frontend.includes.rightsidebar')
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->


@stop
@section('style')
    <style>
        .img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img{
            padding-left: 79px;
        }
    </style>
@stop

@section('script')
@stop
