<div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
    <div class="widget">
        <div class="searchform">
            <form>
                <input type="text" class="form-control" placeholder="What you are looking for?">
            </form>
        </div><!-- end newsletter -->
    </div><!-- end widget -->

    <div class="widget">
        <div class="widget-title">
            <h4>Subscribe Us</h4>
            <hr>
        </div>

        <div class="newsletter">
            <p>Subscribe to our weekly Newsletter and stay tuned and get more freebies.</p>
            <form>
                <input type="text" class="form-control" placeholder="Enter your email here...">
                <input type="submit" value="Subscribe Now!" class="btn btn-primary btn-block" />
            </form>
        </div><!-- end newsletter -->
    </div><!-- end widget -->

    <div class="widget">
        <div class="widget-title">
            <h4>Recent Events</h4>
            <hr>
        </div>

        <ul class="popular-courses">
           @foreach($evenImg as $eventNav)
            <li>
                <a href="{!! route('event.details', $eventNav->event_meta_data) !!}" title=""><img class="img-thumbnail" src="{!! asset($eventNav->banner) !!}" height="100px" width="100px" alt=""></a>
            </li>
           @endforeach
        </ul>
    </div><!-- end widget -->

</div><!-- end col -->