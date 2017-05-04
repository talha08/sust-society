<!-- Header -->
<header id="header">



    <!-- Header Top Bar -->
    <div class="top-bar">
        <div class="slidedown collapse">
            <div class="container">
                <div class="pull-left">
                    <ul class="social pull-left">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="phone-login pull-right">
                    <a><i class="fa fa-phone"></i> Call Us : +880 111-111-111</a>
                    @if(!Auth::user())
                    <a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i> Login</a>
                    <a href="#" data-toggle="modal" data-target="#registrationModal"><i class="fa fa-edit"></i> Registration</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /Header Top Bar -->





    <!-- Main Header -->
    <div class="main-header">
        <div class="container">
            <!-- TopNav -->
            <div class="topnav navbar-header">
                <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                    <i class="fa fa-angle-down icon-current"></i>
                </a>
            </div>
            <!-- /TopNav-->


            <!-- Logo -->
            <div class="logo pull-left">
                <h1>
                    <a href="index.html">
                        <img class="logo-color" src="{!! asset('frontend/img/logos/logo.png') !!}" alt="gallaxy" width="160" height="60">
                    </a>
                </h1>
            </div>
            <!-- /Logo -->



            <!-- Mobile Menu -->
            <div class="mobile navbar-header">
                <a class="navbar-toggle" data-toggle="collapse" href=".html">
                    <i class="fa fa-bars fa-2x"></i>
                </a>
            </div>
            <!-- /Mobile Menu -->


            <!-- Menu Start -->
            <nav class="collapse navbar-collapse menu">
                <ul class="nav navbar-nav sf-menu">

                    <li><a href="{!! route('welcome') !!}">Home</a></li>



                    <li>
                        <a href="#">
                            Society
                                    <span class="sf-sub-indicator">
                                    <i class="fa fa-angle-down"></i>
                                    </span>
                        </a>
                        <ul>
                            @foreach($department as $dept)
                                <li><a href="{!! route('department', $dept->id) !!}">{!! $dept->name !!}</a></li>
                            @endforeach
                            <li><a href="{!! route('society') !!}" style="color: darkgreen"> See All Society</a></li>
                        </ul>
                    </li>




                    <li><a href="{!! route('notice') !!}">Notice</a></li>
                    <li><a href="{!! route('event') !!}">Events</a></li>
                    <li><a href="{!! route('contact') !!}">Contact</a></li>

                    @if(Auth::user())
                    <ul class="nav navbar-nav navbar-right">
                       <li><a class="btn btn-primary" href="{!! route('dashboard') !!}"><i class="fa fa-sign-in"></i> Dashboard</a></li>
                    </ul>
                    @endif

                </ul>
            </nav>
            <!-- /Menu -->
        </div>
    </div>
    <!-- /Main Header -->
</header>
<!-- /Header -->


