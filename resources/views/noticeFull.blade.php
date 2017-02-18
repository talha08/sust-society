@extends('frontend.layouts.default')
@section('content')

    <section class="grey section">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-wrapper">
                        <div class="row second-bread">
                            <div class="col-md-6 text-left">
                                <h1> Notice Details</h1>
                            </div><!-- end col -->
                            <div class="col-md-6 text-right">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Notice Details</li>
                                    </ol>
                                </div><!-- end bread -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end blog-wrapper -->

                    <div class="blog-wrapper single-blog-wrapper">
                        <div class="blog-title">
                            <h2><a href="#" title="">{!! $notice->headline !!}</a></h2>
                            <div class="post-meta">
                                    <span>
                                    <i class="fa fa-user"></i>
                                    <a href="#">Department: {!! $notice->dept->name !!}</a>
                                    </span>
                            </div>
                        </div><!-- end blog-title -->
                        <div class="blog-image">
                            <a href="single.html" title=""><img src="{!! asset($notice->banner) !!}" alt="" class="img-responsive"></a>
                        </div><!-- end image -->
                        <div class="blog-desc">
                            {!! $notice->description !!}
                            <hr class="invis">

                            <p><b>Notice File:</b></p>
                            @if($notice->noticeFile->count() != 0)
                                @foreach($notice->noticeFile as $file)
                                    {!! $file->notice_file_title !!}
                                    <a class="btn btn-info btn-xs btn-archive" href="{!! $file->notice_file!!}" target="_blank">
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
