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
            @if(count($dept->event) != 0)
                @foreach($dept->event->take(10) as $event)
                <!-- post item -->
                    <div class="col-lg-3 col-md-3 col-sm-6 post-item wow fadeInUp">
                        <div class="post-img">
                            <a href="{!! route('event.details', $event->event_meta_data ) !!}"><img alt="" src="{!! asset($event->banner)  !!}" height="200px" width="262px"></a>
                        </div>
                        <div class="post-content blog-post-content">
                            <h4>
                               @if(!Auth::user())
                                    <a href="{!! route('department', $event->dept->id ) !!}"> {!! $event->dept->name !!}  </a>
                                @else
                                    <a href="{!! route('event.details',$event->event_meta_data ) !!}"> {!! str_limit($event->headline,20) !!}  </a>

                                @endif
                              </h4>

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