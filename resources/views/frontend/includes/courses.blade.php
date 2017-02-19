<section class="grey section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4>Recent Events</h4>
                            <p>Listed Below Our Most Popular Courses</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div id="owl-featured" class="owl-custom">
                    @foreach($events as $event)
                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="{!! asset($event->banner)  !!}" height="200px" width="200px" alt="No Image Found">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="{!! route('event.details', $event->event_meta_data ) !!}">{!! $event->headline !!}</a></h4>
                                <div class="shopmeta">
                                    <span class="pull-left">{!! $event->dept->name !!}</span>
                                </div><!-- end shop-meta -->
                            </div><!-- end shop-item-title -->
                            <div class="visible-buttons">
                                <a title="Read More" href="{!! route('event.details', $event->event_meta_data ) !!}"><span class="fa fa-search"></span></a>
                            </div><!-- end buttons -->
                        </div><!-- end relative -->
                    </div><!-- end col -->
                    @endforeach


                    </div><!-- end col -->
                </div><!-- end owl-featured -->
            </div><!-- end container -->
        </section><!-- end section -->