<div class="top-bar light-top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a class="admin-logo dark-logo" href="{{url('/user-subjects')}}">
{{--                    <h1>--}}
{{--                        <img alt="" src="assets/img/icon.png" class="logo-icon margin-r-10">--}}
{{--                        <img alt="" src="assets/img/logo-default.png" class="toggle-none hidden-xs">--}}
{{--                    </h1>--}}
                    <h1>OTS</h1>
                </a>
                <div class="left-nav-toggle" >
                    <a  href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
                </div>

                <div class="search-form hidden-xs">
                    <form method="get" action="{{route('search')}}">
                        <input class="form-control" name="search" placeholder="Search for..." type="text">
                        <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col">
                <ul class="list-inline top-right-nav">
{{--                    <li class="dropdown icons-dropdown d-none-m">--}}
{{--                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-envelope"></i> <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div></a>--}}
{{--                        <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">--}}
{{--                            <li>--}}
{{--                                <div class="dropdown-header">--}}
{{--                                    <a class="float-right" href="#"><small>View All</small></a> Messages--}}
{{--                                </div>--}}

{{--                                <div class="scrollDiv">--}}
{{--                                    <div class="notification-list">--}}
{{--                                        <a class="clearfix" href="javascript:%20void(0);">--}}
{{--													<span class="notification-icon">--}}
{{--														<img alt="" class="rounded-circle" src="assets/img/avtar-2.png" width="50">--}}
{{--													</span>--}}
{{--                                            <span class="notification-title">--}}
{{--													John Doe--}}
{{--													<label class="label label-warning float-right">Support</label>--}}
{{--													</span>--}}
{{--                                            <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>--}}
{{--                                            <span class="notification-time">15 minutes ago</span>--}}
{{--                                        </a>--}}

{{--                                        <a class="clearfix" href="javascript:%20void(0);">--}}
{{--													<span class="notification-icon">--}}
{{--													<img alt="" class="rounded-circle" src="assets/img/avtar-3.png" width="50">--}}
{{--													</span>--}}
{{--                                            <span class="notification-title">--}}
{{--													Govindo Doe--}}
{{--													<label class="label label-warning float-right">Support</label>--}}
{{--													</span>--}}
{{--                                            <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>--}}
{{--                                            <span class="notification-time">15 minutes ago</span>--}}
{{--                                        </a>--}}

{{--                                        <a class="clearfix" href="javascript:%20void(0);">--}}
{{--													<span class="notification-icon">--}}
{{--													<img alt="" class="rounded-circle" src="assets/img/avtar-4.png" width="50">--}}
{{--													</span>--}}
{{--                                            <span class="notification-title">--}}
{{--													Megan Doe--}}
{{--													<label class="label label-warning float-right">Support</label>--}}
{{--													</span>--}}
{{--                                            <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>--}}
{{--                                            <span class="notification-time">15 minutes ago</span>--}}
{{--                                        </a>--}}

{{--                                        <a class="clearfix" href="javascript:%20void(0);">--}}
{{--													<span class="notification-icon">--}}
{{--													<img alt="" class="rounded-circle" src="assets/img/avtar-5.png" width="50">--}}
{{--													</span>--}}
{{--                                            <span class="notification-title">--}}
{{--													Hritik Doe--}}
{{--													<label class="label label-warning float-right">Support</label>--}}
{{--													</span>--}}
{{--                                            <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>--}}
{{--                                            <span class="notification-time">15 minutes ago</span>--}}
{{--                                        </a>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="dropdown icons-dropdown d-none-m">--}}
{{--                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i> <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div></a>--}}
{{--                        <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">--}}
{{--                            <li>--}}
{{--                                <div class="dropdown-header">--}}
{{--                                    <a class="float-right" href="#"><small>View All</small></a> Notifications--}}
{{--                                </div>--}}
{{--                                <div class="scrollDiv">--}}
{{--                                    <div class="notification-list">--}}

{{--                                        <a class="clearfix" href="javascript:%20void(0);">--}}
{{--													<span class="notification-icon">--}}
{{--														<i class="icon-cloud-upload text-primary"></i>--}}
{{--													</span>--}}
{{--                                            <span class="notification-title">Upload Complete</span>--}}
{{--                                            <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>--}}
{{--                                            <span class="notification-time">15 minutes ago</span>--}}
{{--                                        </a>--}}

{{--                                        <a class="clearfix" href="javascript:%20void(0);">--}}
{{--													<span class="notification-icon">--}}
{{--														<i class="icon-info text-warning"></i>--}}
{{--													</span>--}}
{{--                                            <span class="notification-title">Storage Space low</span>--}}
{{--                                            <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>--}}
{{--                                            <span class="notification-time">15 minutes ago</span>--}}
{{--                                        </a>--}}

{{--                                        <a class="clearfix" href="javascript:%20void(0);">--}}
{{--													<span class="notification-icon">--}}
{{--														<i class="icon-check text-success"></i>--}}
{{--													</span>--}}
{{--                                            <span class="notification-title">Project Task Complete</span>--}}
{{--                                            <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>--}}
{{--                                            <span class="notification-time">15 minutes ago</span>--}}
{{--                                        </a>--}}

{{--                                        <a class="clearfix" href="javascript:%20void(0);">--}}
{{--													<span class="notification-icon">--}}
{{--														<i class=" icon-graph text-danger"></i>--}}
{{--													</span>--}}
{{--                                            <span class="notification-title">CPU Usage</span>--}}
{{--                                            <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>--}}
{{--                                            <span class="notification-time">15 minutes ago</span>--}}
{{--                                        </a>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="dropdown d-none-m">--}}
{{--                        <a class="right-sidebar-toggle" href="javascript:%20void(0);"><i class="fa fa-align-right"></i></a>--}}
{{--                    </li>--}}
                    <li class="dropdown avtar-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img alt="" class="rounded-circle" src="assets/img/avtar-2.png" width="30">
                            <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                        </a>
                        <ul class="dropdown-menu top-dropdown">
                            <li>
                                <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i> Activities</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-user"></i> Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-settings"></i> Settings</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="pull-right">
                                    <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sign out
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
