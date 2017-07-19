{{--<!-- Latest Notice -->--}}

{{--<div id="latest-posts" class=" margin-top100">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12 col-md-12 text-center">--}}
                {{--<h2 class="wow fadeIn">About {!! $dept->name !!}</h2>--}}
                {{--<h4 class="wow fadeInRight">SUST Society regularly post updates on our notice board. Feel free to join with our Community!</h4>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<br>--}}
        {{--<br>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6">--}}
                {{--<div class="content-widget">--}}

                    {{--<div class="media-element">--}}
                        {{--<div id="myCarousel" class="carousel slide" data-ride="carousel">--}}


                            {{--<div class="carousel-inner" role="listbox">--}}
                                {{--<div class="item active">--}}
                                    {{--<img src="{!! asset('frontend/img/blog/02.jpg') !!}"  height="200px" width="600px" alt="" class="img-responsive">--}}
                                {{--</div>--}}

                                {{--@if($slider->count() != 0)--}}
                                    {{--@foreach($slider as $slide)--}}
                                        {{--<div class="item">--}}
                                            {{--<img src="{!!asset($slide->album_photo)!!}" height="200px" width="600px" alt="" class="img-responsive">--}}
                                        {{--</div>--}}
                                    {{--@endforeach--}}
                                {{--@endif--}}

                            {{--</div>--}}

                            {{--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">--}}
                                {{--<br> <br><br> <br><br> <br>--}}
                                {{--<span class="fa fa-angle-left" aria-hidden="true"></span>--}}
                                {{--<span class="sr-only">Previous</span>--}}
                            {{--</a>--}}
                            {{--<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">--}}
                                {{--<br> <br><br> <br><br> <br>--}}
                                {{--<span class="fa fa-angle-right" aria-hidden="true"></span>--}}
                                {{--<span class="sr-only">Next</span>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</div><!-- end blog-image -->--}}
                {{--</div><!-- end content-widget -->--}}
            {{--</div><!-- end col -->--}}

            {{--<div class="col-md-6">--}}
                {{--<div class="content-widget">--}}

                    {{--<div class="tabbed-widget">--}}
                        {{--<ul class="nav nav-tabs">--}}
                            {{--<li class="active"><a data-toggle="tab" href="#home">About us</a></li>--}}
                            {{--<li><a data-toggle="tab" href="#menu1">Contact</a></li>--}}
                        {{--</ul>--}}

                        {{--<div class="tab-content">--}}
                            {{--<div id="home" class="tab-pane fade in active">--}}
                                {{--<br>--}}
                                {{--<p>{!! $dept->description or "Not Update Yet" !!}</p>--}}
                            {{--</div>--}}
                            {{--<div id="menu1" class="tab-pane fade">--}}
                                {{--<br>--}}
                                {{--<p>{!! $dept->contact or "Not Update Yet" !!}</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- end tabbed-widget -->--}}
                {{--</div><!-- end content-widget -->--}}
            {{--</div><!-- end col -->--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- /Latest Notice -->--}}







<!-- Latest Events -->
<div id="latest-posts" class=" margin-top100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <h2 class="wow fadeIn">About {!! $dept->name !!}</h2>
                <h4 class="wow fadeInRight">Contact Information and Organization Motivation</h4>
            </div>
        </div>


        <div class="row">

                <div class="tab">
                    <div class="tabbed-widget">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-newspaper-o" aria-hidden="true"></i> About us</a></li>
                            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-map-marker" aria-hidden="true"></i> Contact</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tabs_item tab-pane fade in active">
                                <br>
                                <img src="{!! asset($dept->logo_path) !!}">
                                <h4>{!! $dept->name !!}</h4>
                                <p>{!! $dept->description or "Not Update Yet" !!}</p>
                            </div>
                            <div id="menu1" class="tabs_item tab-pane fade">
                                <br>
                                <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=SUST%2C%20University%20Avenue%2C%20Sylhet%2C%20Bangladesh&key=AIzaSyA8GcRMANrzrCfoXsQICNsXvRTyWu5k9l0" allowfullscreen></iframe>
                                <h4>{!! $dept->name !!} Contact Information</h4>
                                <p><i  style="color: slateblue" class="fa fa-phone-square fa-2x" aria-hidden="true"></i> {!! $dept->phone or "Not Update Yet" !!}</p>
                                <p><i style="color: yellowgreen" class="fa fa-envelope fa-2x" aria-hidden="true"></i>  {!! $dept->email or "Not Update Yet" !!}</p>
                                <p><i style="color: tomato" class="fa fa-fax fa-2x" aria-hidden="true"></i>  {!! $dept->fax or "Not Update Yet" !!}</p>
                                <p><i style="color: red" class="fa fa-map-marker fa-2x" aria-hidden="true"></i>  {!! $dept->location or "Not Update Yet" !!}</p>
                            </div>
                        </div>
                    </div><!-- end tabbed-widget -->
                </div> <!-- / tab -->


        </div>
    </div>
</div>
<!-- /Latest Events -->


<style>

    .tab {
        padding-top: 50px;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
        background: #fff;
        width: 70%;
        margin: 0 auto;
        font-family: 'Roboto', sans-serif;
        line-height: 1.5;
        font-weight: 300;
        color: #888;
        -webkit-font-smoothing: antialiased;
    }

    .tabs_item h4 {
        font-weight: bold;
        color: #87d3b7;
        font-size: 20px;
    }
    .tabs_item img {
        width: 200px;
        height: 200px;
        float: left;
        margin-right: 30px;
    }

    iframe{
        width: 400px;
        height: 300px;
        float: left;
        margin-right: 30px;
    }


</style>


