<!-- Latest Notice -->

<div id="latest-posts" class=" margin-top100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <h2 class="wow fadeIn">About {!! $dept->name !!}</h2>
                <h4 class="wow fadeInRight">SUST Society regularly post updates on our notice board. Feel free to join with our Community!</h4>
            </div>
        </div>

        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="content-widget">

                    <div class="media-element">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">


                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{!! asset('frontend/img/blog/02.jpg') !!}" alt="" class="img-responsive">
                                </div>

                                @if($slider->count() != 0)
                                    @foreach($slider as $slide)
                                        <div class="item">
                                            <img src="{!!asset($slide->album_photo)!!}" height="200px" width="400px" alt="" class="img-responsive">
                                        </div>
                                    @endforeach
                                @endif

                            </div>

                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- end blog-image -->
                </div><!-- end content-widget -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="content-widget">

                    <div class="tabbed-widget">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">About us</a></li>
                            <li><a data-toggle="tab" href="#menu1">Contact</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <p>{!! $dept->description or "Not Update Yet" !!}</p>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <p>{!! $dept->contact or "Not Update Yet" !!}</p>
                            </div>
                        </div>
                    </div><!-- end tabbed-widget -->
                </div><!-- end content-widget -->
            </div><!-- end col -->

        </div>
    </div>
</div>
<!-- /Latest Notice -->

<br><br>









