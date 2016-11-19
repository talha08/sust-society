<nav class="navbar-default navbar-static-side" role="navigation" >
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
               <span>
               <img alt="image" class="img-circle" src="{!! asset('img/profile_small.jpg') !!}" />
               </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">&nbsp;</strong>
               </span> <span class="text-muted text-xs block"><strong class="font-bold">David Williams</strong><b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{!! route('profile') !!}">Profile</a></li>
                        <li><a href="{!! route('password.change') !!}">Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="{!! route('logout') !!}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>


            <li class="{!! Menu::areActiveRoutes(['album.index', 'album.create']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Photo Album</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('album.index') !!}">
                        <a href="{!!  URL::route( 'album.index') !!}">Your Album</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('album.create') !!}">
                        <a href="{!!  URL::route( 'album.create') !!}">Create New Album</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
            </li>






        </ul>
    </div>
</nav>