<section class="grey section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h4>Upcoming Notice</h4>
                    <p>Listed Below Our Most Popular Courses</p>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <div id="owl-featured" class="owl-custom">
            @if(count($dept->notice) != 0)
                @foreach($dept->notice->take(10) as $dept_notice)
                    <div class="owl-featured">
                        <div class="shop-item-list entry">
                            <div class="">
                                <img src="{!! URL::asset($dept_notice->banner) !!}" alt="">
                                <div class="magnifier">
                                </div>
                            </div>
                            <div class="shop-item-title clearfix">
                                <h4><a href="{!! route('notice.details', $dept_notice->notice_meta_data ) !!}">{!! $dept_notice->headline !!}</a></h4>
                            </div><!-- end shop-item-title -->
                            <div class="visible-buttons">
                                <a title="Read More" href="{!! route('notice.details', $dept_notice->notice_meta_data ) !!}"><span class="fa fa-search"></span></a>
                            </div><!-- end buttons -->
                        </div><!-- end relative -->
                    </div><!-- end col -->
                @endforeach
            @else
                <p class="text-center">No Notice Found</p>
            @endif

        </div><!-- end owl-featured -->
    </div><!-- end container -->
</section><!-- end section -->