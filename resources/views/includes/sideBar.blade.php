<nav class="navbar-default navbar-static-side" role="navigation" >
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
               <span>

                   {!!  HTML::image(Auth::user()->profile->photo, 'alt', array( 'width' => 60, 'height' => 60, 'class'=>'img-circle' )) !!}
               </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">&nbsp;</strong>
               </span> <span class="text-muted text-xs block"><strong class="font-bold">{!! Auth::user()->name !!}</strong><b class="caret"></b></span> </span> </a>
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



            <li class="{!! Menu::areActiveRoutes(['department.index', 'department.create']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Society</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('department.index') !!}">
                        <a href="{!!  URL::route( 'department.index') !!}">Society List</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('department.create') !!}">
                        <a href="{!!  URL::route('department.create') !!}">Create New Society</a>
                    </li>
                </ul>
            </li>



            <li class="{!! Menu::areActiveRoutes(['user.student', 'user.teacher']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Society Members</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('user.student') !!}">
                        <a href="{!!  URL::route( 'user.student') !!}">Student List</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('user.teacher') !!}">
                        <a href="{!!  URL::route( 'user.teacher') !!}">Teacher List</a>
                    </li>
                </ul>
            </li>





            <li class="{!! Menu::areActiveRoutes(['album.index', 'album.create']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Photo Album</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('album.index') !!}">
                        <a href="{!!  URL::route( 'album.index') !!}">Album</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('album.create') !!}">
                        <a href="{!!  URL::route( 'album.create') !!}">Create New Album</a>
                    </li>
                </ul>
            </li>


            <li class="{!! Menu::areActiveRoutes(['event.index', 'event.create']) !!}">
                <a href="#"><i class="fa fa-calendar-o"></i> <span class="nav-label">Event</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('event.index') !!}">
                        <a href="{!!  URL::route('event.index') !!}">Events</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('event.create') !!}">
                        <a href="{!!  URL::route('event.create') !!}">Create New Event</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('event.eventFileUpload') !!}">
                        <a href="{!!  URL::route('event.eventFileUpload') !!}">Upload Attachment</a>
                    </li>

                </ul>
            </li>



            <li class="{!! Menu::areActiveRoutes(['committee.index', 'committee.create']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Committee</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('committee.index') !!}">
                        <a href="{!!  URL::route( 'committee.index') !!}">Committee</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('committee.create') !!}">
                        <a href="{!!  URL::route( 'committee.create') !!}">Create New Committee</a>
                    </li>
                </ul>
            </li>



            <li class="{!! Menu::areActiveRoutes(['committeeMemberType.index', 'committeeMemberType.create']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Member Type</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('committeeMemberType.index') !!}">
                        <a href="{!!  URL::route( 'committeeMemberType.index') !!}">Member Type</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('committeeMemberType.create') !!}">
                        <a href="{!!  URL::route( 'committeeMemberType.create') !!}">Create New Type</a>
                    </li>
                </ul>
            </li>



            <li class="{!! Menu::areActiveRoutes(['committeeMemberList.index', 'committeeMemberList.create']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Member List</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('committeeMemberList.index') !!}">
                        <a href="{!!  URL::route( 'committeeMemberList.index') !!}">Committee Member List</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('committeeMemberList.create') !!}">
                        <a href="{!!  URL::route( 'committeeMemberList.create') !!}">Create New List</a>
                    </li>
                </ul>
            </li>






        </ul>
    </div>
</nav>