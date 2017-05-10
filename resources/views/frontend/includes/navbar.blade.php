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
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="phone-login pull-right">
                    <a><i class="fa fa-phone"></i> Call Us : +880 111-111-111</a>
                    @if(!Auth::user())
                    <a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i> Login</a>
                    <a href="#" data-toggle="modal" data-target="#registrationModal"><i class="fa fa-edit"></i> Registration</a>
                    @else
                        <a href="{!! route('contact') !!}"><i style="color: darkred" class="fa fa-envelope-o"></i>Message Admin</a>
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
                    <a href="{!! URL::to('/') !!}">
                        @if(Auth::user())
                        <img class="logo-color" src="{!! asset(Auth::user()->dept->logo_path) !!}" alt="gallaxy" width="60" height="60">
                        @else
                            <img class="logo-color" src="{!! asset('frontend/img/logos/logo.png') !!}" alt="gallaxy" width="160" height="60">
                        @endif
                    </a>
                </h1>
            </div>
            <!-- /Logo -->



            <!-- Mobile Menu -->
            <div class="mobile navbar-header">
                <a class="navbar-toggle" data-toggle="collapse" href="{!! URL::to('/') !!}">
                    <i class="fa fa-bars fa-2x"></i>
                </a>
            </div>
            <!-- /Mobile Menu -->


            <!-- Menu Start -->
            <nav class="collapse navbar-collapse menu">
                <ul class="nav navbar-nav sf-menu">

                    <li><a href="{!! URL::to('/') !!}">Home</a></li>




                    @if(!Auth::user())
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
                    @endif








                    @if(Auth::user())
                        <li><a href="{!! route('notice') !!}">Notice</a></li>
                        <li><a href="{!! route('albumFront') !!}">Album</a>
                        <li><a href="{!! route('currentCommittee') !!}">Committee</a>
                        <li>
                            <a href="#" class="sf-with-ul">
                               Event
                                <span class="sf-sub-indicator pull-right">
                                                <i class="fa fa-angle-right "></i>
                                                </span>
                            </a>
                            <ul>
                                <li><a href="{!! route('event') !!}"  class="sf-with-ul">Events</a>
                                <li><a href="{!! route('registration.index') !!}" class="sf-with-ul">Event Registration</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{!! route('notice') !!}">Notice</a></li>
                        <li><a href="{!! route('event') !!}">Events</a>


                    @endif










                    @if(Auth::user())
                        @if(!Auth::user()->hasRole('admin'))
                          @if(\Auth::user()->hasRole('student') or \Auth::user()->hasRole('teacher'))

                            <li>
                                <a href="#" class="sf-with-ul">
                                    <b>{!! Auth::user()->name !!} </b> &nbsp;
                                   <span class="sf-sub-indicator pull-right">
                                                <i class="fa fa-angle-right "></i>
                                                </span>
                                </a>
                                <ul>
                                    <li><a href="{!! route('profile') !!}" class="sf-with-ul">Profile</a></li>
                                    <li><a href="{!! route('password.change') !!}" class="sf-with-ul">Change Password</a></li>
                                    <li><a href="{!! route('logout') !!}" class="sf-with-ul">Logout</a></li>
                                </ul>
                            </li>
                            <li style="top: 23px"> <img  alt="" src="{!! asset( Auth::user()->profile->photo) !!}" height="40px" width="40px" class="img-circle"></li>

                           @endif

                        @else
                            <li><a href="{!! route('dashboard') !!}"><i class="fa fa-sign-in"></i> Dashboard</a></li>

                        @endif
                    @endif



                    @if(!Auth::user())
                        <li><a href="{!! route('contact') !!}">Contact</a></li>
                    @endif

                </ul>
            </nav>
            <!-- /Menu -->
        </div>
    </div>
    <!-- /Main Header -->
</header>
<!-- /Header -->


@section('style')

@stop



