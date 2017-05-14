@extends('frontend.layouts.default')
@section('content')


@include('frontend.includes.slider')


<!-- Main Content -->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn">
                <div class="content-box big ch-item bottom-pad-small">
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-1"><i class="fa fa-rocket"></i></div>
                            <div class="ch-info-back">
                                <i class="fa fa-rocket"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-box-info">
                        <h3>Upcoming Events</h3>
                        <p>
                            Connect with this system and and always update with upcoming events.
                        </p>
                    </div>
                    <div class="border-bottom margin-top30">
                    </div>
                    <div class="border-bottom">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn">
                <div class="content-box big ch-item bottom-pad-small">
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-1"><i class="fa fa-check"></i></div>
                            <div class="ch-info-back">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-box-info">
                        <h3>Recent News</h3>
                        <p>
                            Connect with this system and and always update with recents news.
                        </p>
                    </div>
                    <div class="border-bottom margin-top30">
                    </div>
                    <div class="border-bottom">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn">
                <div class="content-box big ch-item">
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-1"><i class="fa fa-tags"></i></div>
                            <div class="ch-info-back">
                                <i class="fa fa-tags"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-box-info">
                        <h3>Committee</h3>
                        <p>
                            Connect with this system and and know about different organization committee.
                        </p>
                    </div>
                    <div class="border-bottom margin-top30">
                    </div>
                    <div class="border-bottom">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Content -->



<!-- Product Content -->
<div class="product-lead bottom-pad margin-top100">
    <div class="pattern-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 text-center wow fadeInLeft">
                    <br><br><br><br><br><br><br>
                    <img class="app-img" src="{!! asset('frontend/img/about.png') !!}" alt="iPhone5c">
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                    <div class="app-service padding-bottom50">
                        <br><br><br>
                        <h2 class="light">SUST Society</h2>
                        <h4>System for all organization at SUST</h4>
                        <p>
                            A system for all organization where organization can update about their upcoming events, recent news.
                            Also organization can post about their running committee and previous committee.
                            Their is also a Alubum functionality in SUST Society Application.

                        </p>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Product Content -->




<!-- Latest Events -->
<div id="latest-posts" class=" margin-top100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <h2 class="wow fadeIn">Latest Events</h2>
                <h4 class="wow fadeInRight">SuST Society regularly post updates on our Events. Feel free to join with our Community!</h4>
            </div>
        </div>
        <div class="row">
            <div class="padding-top40">

            @if(count($events) != 0)
                @foreach($events as $event)
                <!-- post item -->
                <div class="col-lg-3 col-md-3 col-sm-6 post-item wow fadeInUp">
                    <div class="post-img">
                        <a href="{!! route('event.details', $event->event_meta_data ) !!}"><img alt="" src="{!! asset($event->banner)  !!}" height="200px" width="262px"></a>
                    </div>
                    <div class="post-content blog-post-content">
                        <h4><a href="{!! route('department', $event->dept->id ) !!}"></a>{!! $event->dept->name !!}</h4>
                        <p>
                            {!! strip_tags(str_limit($event->description, 100)) !!}
                        </p>
                    </div>
                </div>
                <!-- /post item -->
                @endforeach
                @else
                    <p class="text-center">No Event Found</p>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- /Latest Events -->
<br><br><br>








<!-- Services -->
<div id="services" class="margin-top80">
    <div class="pattern-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="padding-top40 text-center">
                        <h2 class="light wow fadeIn">Other Services We Provide</h2>
                        <h4 class="light wow fadeInRight">
                             SUST Society is a community. It connects users in one platfrom.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 text-center wow fadeInLeft">
                    <div class="service-box padding-top30 padding-bottom40">
                        <div class="service-box-icon">
                            <a href="#"><img alt="Web Design" src="{!! asset('frontend/img/icons/dept.png') !!}"></a>
                        </div>
                        <div class="service-box-info">
                            <a href="#">
                                <h3 class="padding-top25">Organization Registration</h3>
                            </a>
                            <p>
                                Apply for organization account and connect with SUST SOCIETY
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center wow fadeInUp">
                    <div class="service-box padding-top30 padding-bottom40">
                        <div class="service-box-icon">
                            <a href="#"><img alt="Email Marketing" src="{!! asset('frontend/img/icons/user.png') !!}"></a>
                        </div>
                        <div class="service-box-info">
                            <a href="#">
                                <h3 class="padding-top25">Account Request</h3>
                            </a>
                            <p>
                                Request a account with a given organization account.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center wow fadeInRight">
                    <div class="service-box padding-top30 padding-bottom40">
                        <div class="service-box-icon">
                            <a href="#"><img alt="Corportate Solutions" src="{!! asset('frontend/img/icons/com.png') !!}"></a>
                        </div>
                        <div class="service-box-info">
                            <a href="#">
                                <h3 class="padding-top25">Organization Committee</h3>
                            </a>
                            <p>
                                From this application user can create their own previous and current organization committee.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Services -->









{{--<!-- Latest Notice -->--}}
{{--<div id="latest-posts" class=" margin-top100">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12 col-md-12 text-center">--}}
                {{--<h2 class="wow fadeIn">Latest Notice</h2>--}}
                {{--<h4 class="wow fadeInRight">SUST Society regularly post updates on our notice board. Feel free to join with our Community!</h4>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="padding-top40">--}}
            {{--@if(count($notices) != 0)--}}
                {{--@foreach($notices as $notice)--}}
                        {{--<!-- post item -->--}}
                {{--<div class="col-lg-3 col-md-3 col-sm-6 post-item wow fadeInUp">--}}
                    {{--<div class="post-img">--}}
                        {{--<a href="{!! route('notice.details', $notice->notice_meta_data ) !!}"><img alt="" src="{!! asset($notice->banner)  !!}" height="200px" width="262px"></a>--}}
                    {{--</div>--}}
                    {{--<div class="post-content blog-post-content">--}}
                        {{--<h4><a href="{!! route('department', $notice->dept->id ) !!}"></a>{!! $notice->dept->name !!}</h4>--}}
                        {{--<p>--}}
                            {{--{!! strip_tags(str_limit($notice->description, 100)) !!}--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- /post item -->--}}
                {{--@endforeach--}}
                {{--@else--}}
                    {{--<p class="text-center">No Notice Found</p>--}}
                {{--@endif--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- /Latest Notice -->--}}

























<!-- Our Clients -->
<div class="our-clients">
    <div class="container">
        <div class="row">
            <div class="client">
                <div class="client-logo">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center">
                            <h2 class="wow fadeIn">Organizations</h2>
                            <h4 class="wow fadeInRight">
                                Some of running organization in SUST Society
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="clearfix"></div>
                        <div class="row text-center padding-top40">
                            <div id="client-carousel" class="client-carousel carousel slide">
                                <div class="carousel-inner">


                                    <div class="item active">
                                        @foreach(DB::table('department')->where('status',true)->take(4)->get() as $departmentna)
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item wow fadeIn">
                                            <div class="item-inner"><a href="#"><img width="250px" height="100px" alt="Upportdash" src="{!! asset($departmentna->logo_path) !!}"></a></div>
                                        </div>
                                        @endforeach
                                    </div>


                                    <div class="item">
                                        @foreach(DB::table('department')->where('status',true)->skip(4)->take(4)->get() as $departmentna)
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 item">
                                            <div class="item-inner"><a href="#"><img alt="Upportdash" src="img/clientslogo/04.png"></a></div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                        <div class="clients-title">
                            <h3 class="title">&nbsp;</h3>
                            <div class="carousel-controls pull-right">
                                <a class="prev" href="#client-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                <a class="next" href="#client-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Our Clients -->



<br><br>

@stop
@section('style')
@stop

@section('script')
@stop

