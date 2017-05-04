@extends('frontend.layouts.default')
@section('content')

        <!-- Title, Breadcrumb -->
        <div class="breadcrumb-wrapper">
            <div class="pattern-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                            <h2 class="title">Single Notice</h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                            <div class="breadcrumbs pull-right">
                                <ul>
                                    <li>You are Now on:</li>
                                    <li><a href="{!! route('welcome') !!}">Home</a></li>
                                    <li><a href="#">Notice</a></li>
                                    <li>{!! str_limit($notice->headline, 20) !!}..</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Title, Breadcrumb -->



<!-- Main Content -->
<div class="content margin-top60 margin-bottom60">
    <div class="container">
        <div class="row">
            <div class="posts-block col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <!--  Single Post -->
                <article class="post hentry">
                    <div class="post-image">
                        <a href="{!! asset($notice->banner) !!}" data-rel="prettyPhoto">
                            <span class="img-hover"></span>
                            <span class="fullscreen"><i class="fa fa-plus"></i></span>
                            <img src="{!! asset($notice->banner) !!}" alt="" class="img-responsive">
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
                        {!! $notice->description, 350 !!}
                    </div>

                    <blockquote>

                    @if($notice->noticeFile->count() != 0)
                       <p><b>Notice File:</b></p>
                        @foreach($notice->noticeFile as $file)
                            {!! $file->notice_file_title !!}
                            <a class="btn btn-info btn-xs btn-archive" href="{!! $file->notice_file!!}" target="_blank">
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </a><br><br/>
                        @endforeach
                    @else
                        <em>No File found.....</em>
                    @endif
                    </blockquote>

                </article>
                <!--  /Single Post -->
            </div>



            <!-- Sidebar -->
            @include('frontend.includes.rightsidebar')
            <!-- /Sidebar -->

        </div>
    </div>
</div>
<!-- Main Content end-->




@stop
@section('style')
@stop

@section('script')
@stop
