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




            @if( Auth::user()->hasRole('dept_admin'))
                <li>
                    <a href="{!!route('department.edit',Auth::user()->dept->id)!!}">
                        <i class="fa fa-tasks"></i>
                        <span>Edit {!! Auth::user()->dept->name !!}  </span>
                    </a>
                </li>
            @endif


            <li class="{!! Menu::areActiveRoutes(['album.index', 'album.create']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Photo Album</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('album.index') !!}">
                        <a href="{!!  URL::route( 'album.index') !!}">Album</a>
                    </li>

                    @if(Auth::user()->hasRole('dept_admin'))
                    <li class="{!! Menu::isActiveRoute('album.create') !!}">
                        <a href="{!!  URL::route( 'album.create') !!}">Create New Album</a>
                    </li>
                     @endif

                </ul>
            </li>








            @if( Auth::user()->hasRole('admin'))
                <li class="{!! Menu::areActiveRoutes(['department.index', 'department.create','department.inactive']) !!}">
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Organization</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{!! Menu::isActiveRoute('department.index') !!}">
                            <a href="{!!  URL::route( 'department.index') !!}">Active Org. List</a>
                        </li>
                        <li class="{!! Menu::isActiveRoute('department.inactive') !!}">
                            <a href="{!!  URL::route( 'department.inactive') !!}">Inactive Org. Listt</a>
                        </li>

                        <li class="{!! Menu::isActiveRoute('department.create') !!}">
                            <a href="{!!  URL::route('department.create') !!}">Create New Org.</a>
                        </li>
                    </ul>
                </li>
            @endif


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



            @if(Auth::user()->hasRole('dept_admin'))
            <li class="{!! Menu::areActiveRoutes(['slider.index', 'slider.create']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Slide</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('slider.index') !!}">
                        <a href="{!!  URL::route('slider.index') !!}">Slider</a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('slider.create') !!}">
                        <a href="{!!  URL::route('slider.create') !!}">New Slide</a>
                    </li>
                </ul>
            </li>





            <li class="{!! Menu::areActiveRoutes(['event.index', 'event.create','event.eventFileUpload']) !!}">
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


                <li class="{!! Menu::areActiveRoutes(['notice.index', 'notice.create','notice.eventFileUpload']) !!}">
                    <a href="#"><i class="fa fa-calendar-o"></i> <span class="nav-label">Notice</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{!! Menu::isActiveRoute('notice.index') !!}">
                            <a href="{!!  URL::route('notice.index') !!}">Notices</a>
                        </li>

                        <li class="{!! Menu::isActiveRoute('notice.create') !!}">
                            <a href="{!!  URL::route('notice.create') !!}">Create New Notice</a>
                        </li>

                        <li class="{!! Menu::isActiveRoute('notice.noticeFileUpload') !!}">
                            <a href="{!!  URL::route('notice.noticeFileUpload') !!}">Upload Attachment</a>
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

            @endif




            <li class="{!! Menu::areActiveRoutes(['committee.index', 'committee.create']) !!}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Committee</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{!! Menu::isActiveRoute('committee.index') !!}">
                        <a href="{!!  URL::route( 'committee.index') !!}">Committee</a>
                    </li>

                    @if(Auth::user()->hasRole('dept_admin'))
                        <li class="{!! Menu::isActiveRoute('committee.create') !!}">
                            <a href="{!!  URL::route( 'committee.create') !!}">Create New Committee</a>
                        </li>
                    @endif

                </ul>
            </li>







            {{--<li class="{!! Menu::areActiveRoutes(['registration.index']) !!}">--}}
                {{--<a href="#"><i class="fa fa-calendar-o"></i> <span class="nav-label">Registration</span> <span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li class="{!! Menu::isActiveRoute('registration.index') !!}">--}}
                        {{--<a href="{!!  URL::route('registration.index') !!}">Open Events</a>--}}
                    {{--</li>--}}

                {{--</ul>--}}
            {{--</li>--}}




















        </ul>
    </div>
</nav>