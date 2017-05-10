
<!-- Sidebar Start -->
<div class="sidebar col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <!-- Search Widget -->
    <div class="widget search-form">
        <div class="input-group">
            <input type="text" value="Search..." onfocus="if(this.value=='Search...')this.value='';" onblur="if(this.value=='')this.value='Search...';" class="search-input form-control">
                                        <span class="input-group-btn">
                                        <button type="submit" class="subscribe-btn btn"><i class="fa fa-search"></i></button>
                                        </span>
        </div>
        <!-- /input-group -->
    </div>
    <!-- /Search Widget -->

    <!-- Tab -->
    <div class="widget tabs">
        <div id="horizontal-tabs">
            <ul class="tabs">
                <li id="tab1" class="current">Popular</li>
            </ul>
            <div class="contents">
                <div class="tabscontent" id="content1" style="display: block;">

                    <ul class="posts">
                        @foreach($evenImg as $eventNav)
                        <li>
                            <a href="{!! route('event.details', $eventNav->event_meta_data) !!}" title="">
                                <img class="img-thumbnail" src="{!! asset($eventNav->banner) !!}" height="100px" width="100px" alt=""></a>
                            <p><a href="{!! route('event.details', $eventNav->event_meta_data) !!}">  {!! str_limit($eventNav->headline, 150) !!}</a></p>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- /Tab -->


</div>
<!-- Sidebar End -->