@extends('frontend.layouts.default')
@section('content')

    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Recent Notice</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li></li>
                                <li><a href="{!! URL::to('/') !!}">Home</a></li>
                                <li><a href="#">Notices</a></li>

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

                    @foreach($notices as $notice)
                    <!-- Blog Post 1 -->
                    <article class="post hentry">
                        <div class="post-image">
                            <a href="{!! asset($notice->banner) !!}" data-rel="prettyPhoto">
                                <span class="img-hover"></span>
                                <span class="fullscreen"><i class="fa fa-plus"></i></span>
                            <img src="{!! asset($notice->banner) !!}" alt="" width="800px" class="img-responsive">
                            </a>
                        </div>
                        <header class="post-header">
                            <h2><a href="{!! route('notice.details',$notice->notice_meta_data) !!}" title="dd"> {!! $notice->headline !!}</a></h2>
                            <div class="blog-entry-meta">
                                <div class="blog-entry-meta-date">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="blog-entry-meta-date-day">Created at: {!! $notice->created_at !!},</span>
                                </div>
                                <div class="blog-entry-meta-author">
                                    <i class="fa fa-user"></i>
                                    <span class="blog-entry-meta-author">Department: {!! $notice->dept->name !!}</span>
                                </div>
                            </div>
                        </header>
                        <div class="post-content">
                            <p>
                                {!! strip_tags(str_limit($notice->description, 350)) !!}
                            </p>
                        </div>
                        <footer class="post-footer">
                            <a class="btn btn-color" href="{!! route('notice.details',$notice->notice_meta_data) !!}" class="readmore">Read More</a>
                        </footer>
                    </article>
                    <!-- /Blog Post 1 -->


                    <!-- Star-->
                    <div class="star">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="star-divider">
                                    <div class="star-divider-icon">
                                        <i class=" fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Star -->
                    @endforeach

                    <!-- /Star -->
                    <ul class="pager">
                        {!! $notices->render() !!}
                    </ul>

                </div>
                <!-- /Blog Posts -->
        @include('frontend.includes.rightsidebarNotice')

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

