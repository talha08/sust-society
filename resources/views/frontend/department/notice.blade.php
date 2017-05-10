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
            @if(count($dept->notice) != 0)
                @foreach($dept->notice->take(4) as $notice)
                <!-- post item -->
                    <div class="col-lg-3 col-md-3 col-sm-6 post-item wow fadeInUp">
                        <div class="post-img">
                            <a href="{!! route('notice.details', $notice->notice_meta_data ) !!}"><img alt="" src="{!! asset($notice->banner)  !!}" height="200px" width="262px"></a>
                        </div>
                        <div class="post-content blog-post-content">
                            <h4>
                                @if(!Auth::user())
                                    <a href="{!! route('department', $notice->dept->id ) !!}"> {!! $notice->dept->name !!}  </a>
                                @else
                                    <a href="{!! route('notice.details',$notice->notice_meta_data ) !!}"> {!! str_limit($notice->headline,20) !!}  </a>

                                @endif
                            </h4>
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