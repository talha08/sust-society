<header class="header">
    <div class="container">
        <div class="hovermenu ttmenu">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="logo">
                        <a class="navbar-brand" href="#"><img src="{!! URL::asset('frontend/images/sust.png') !!}"  style="padding-bottom: 12px" height="50px" alt=""></a>
                    </div>
                </div><!-- end navbar-header -->




                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{!! route('welcome') !!}">Home</a></li>
                        {{--<li><a href="page-about.html">About</a></li>--}}

                        <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Society <b class="fa fa-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="ttmenu-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="box">
                                                    <ul>
                                                      @foreach($department as $dept)
                                                            <li><a href="{!! route('department', $dept->id) !!}">{!! $dept->name !!}</a></li>
                                                      @endforeach
                                                    </ul>
                                                </div><!-- end box -->
                                            </div><!-- end col -->

                                            <div class="col-md-6">
                                                <div class="box">
                                                    <ul>
                                                        <li><a href="{!! route('society') !!}" style="color: yellow"> See All Society</a></li>
                                                    </ul>
                                                </div><!-- end box -->
                                            </div><!-- end col -->


                                        </div><!-- end row -->
                                    </div><!-- end ttmenu-content -->
                                </li>
                            </ul>

                        <li><a href="{!! route('notice') !!}">Notice</a></li>
                        <li><a href="{!! route('event') !!}">Events</a></li>
                        <li><a href="{!! route('contact') !!}">Contact</a></li>
                    </ul><!-- end nav navbar-nav -->


                    <ul class="nav navbar-nav navbar-right">
                       @if(Auth::user())
                            <li><a class="btn btn-primary" href="{!! route('dashboard') !!}"><i class="fa fa-sign-in"></i> Dashboard</a></li>
                       @else
                            <li><a class="btn btn-primary" href="{!! route('user.create') !!}"><i class="fa fa-sign-in"></i> Register Now</a></li>
                       @endif
                    </ul>

                </div><!--/.nav-collapse -->
            </div><!-- end navbar navbar-default clearfix -->
        </div><!-- end menu 1 -->
    </div><!-- end container -->
</header><!-- end header -->