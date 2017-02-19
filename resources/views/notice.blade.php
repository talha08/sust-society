@extends('frontend.layouts.default')
@section('content')

    <section class="grey section">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                    <div class="blog-wrapper">
                        <div class="row second-bread">
                            <div class="col-md-6 text-left">
                                <h1>Notice</h1>
                            </div><!-- end col -->
                            <div class="col-md-6 text-right">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Notice</li>
                                    </ol>
                                </div><!-- end bread -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end blog-wrapper -->




                    @foreach($notices as $notice)
                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <h2><a href="{!! route('notice.details',$notice->notice_meta_data) !!}" title="">{!! $notice->headline !!}</a></h2>
                                <div class="post-meta">
                                      <span>
                                          <i class="fa fa-user"></i>
                                          <a href="#">Department: {!! $notice->dept->name !!}</a>
                                    </span>
                                </div>
                            </div><!-- end blog-title -->
                            <div class="blog-image">

                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="{!! asset($notice->banner) !!}" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div><!-- end blog-image -->

                            <div class="blog-desc">

                                <p> {!! str_limit($notice->description, 150) !!}</p>
                                <a href="{!! route('notice.details',$notice->notice_meta_data) !!}" class="readmore">Read More</a>
                            </div><!-- end desc -->
                        </div><!-- end blog-wrapper -->

                        <hr class="invis">
                    @endforeach

                    <nav class="text-center">
                        {!! $notices->render() !!}
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

