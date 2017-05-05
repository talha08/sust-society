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
                            Lorem Ipsum is simply dummy text of Lorem the printing and typesettings industry.
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
                            Lorem Ipsum is simply dummy text of Lorem the printing and typesettings industry.
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
                            Lorem Ipsum is simply dummy text of Lorem the printing and typesettings industry.
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
                    <br><br><br><br><br>
                    <img class="app-img" src="{!! asset('http://www.grandtech.com.tw/subsite/ss/images/about.png') !!}" alt="iPhone5c">
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                    <div class="app-service padding-bottom50">
                        <h2 class="light">SUST Society</h2>
                        <h4>We provide all kinds of iPhone application design and development services.</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet.Lorem fermentum diam diam.
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
                            We have a strong team of web design, email marketing and corporate solution.Feel free to get a free quote!!!
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 text-center wow fadeInLeft">
                    <div class="service-box padding-top30 padding-bottom40">
                        <div class="service-box-icon">
                            <a href="#"><img alt="Web Design" src="{!! asset('frontend/img/icons/web-design.png') !!}"></a>
                        </div>
                        <div class="service-box-info">
                            <a href="#">
                                <h3 class="padding-top25">Latest News</h3>
                            </a>
                            <p>
                                Lorem Ipsum is simply dummy text of Lorem the printing and typesettings industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center wow fadeInUp">
                    <div class="service-box padding-top30 padding-bottom40">
                        <div class="service-box-icon">
                            <a href="#"><img alt="Email Marketing" src="{!! asset('frontend/img/icons/email-marketing.png') !!}"></a>
                        </div>
                        <div class="service-box-info">
                            <a href="#">
                                <h3 class="padding-top25">Latest Events</h3>
                            </a>
                            <p>
                                Lorem Ipsum is simply dummy text of Lorem the printing and typesettings industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center wow fadeInRight">
                    <div class="service-box padding-top30 padding-bottom40">
                        <div class="service-box-icon">
                            <a href="#"><img alt="Corportate Solutions" src="{!! asset('frontend/img/icons/corporate-solutions.png') !!}"></a>
                        </div>
                        <div class="service-box-info">
                            <a href="#">
                                <h3 class="padding-top25">Running Society Committee</h3>
                            </a>
                            <p>
                                Lorem Ipsum is simply dummy text of Lorem the printing and typesettings industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Services -->









<!-- Latest Notice -->
<div id="latest-posts" class=" margin-top100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <h2 class="wow fadeIn">Latest Notice</h2>
                <h4 class="wow fadeInRight">SUST Society regularly post updates on our notice board. Feel free to join with our Community!</h4>
            </div>
        </div>
        <div class="row">
            <div class="padding-top40">
            @if(count($notices) != 0)
                @foreach($notices as $notice)
                        <!-- post item -->
                <div class="col-lg-3 col-md-3 col-sm-6 post-item wow fadeInUp">
                    <div class="post-img">
                        <a href="{!! route('notice.details', $notice->notice_meta_data ) !!}"><img alt="" src="{!! asset($notice->banner)  !!}" height="200px" width="262px"></a>
                    </div>
                    <div class="post-content blog-post-content">
                        <h4><a href="{!! route('department', $notice->dept->id ) !!}"></a>{!! $notice->dept->name !!}</h4>
                        <p>
                            {!! strip_tags(str_limit($notice->description, 100)) !!}
                        </p>
                    </div>
                </div>
                <!-- /post item -->
                @endforeach
                @else
                    <p class="text-center">No Notice Found</p>
                @endif


            </div>
        </div>
    </div>
</div>
<!-- /Latest Notice -->

<br><br>

@stop
@section('style')
@stop

@section('script')
@stop

