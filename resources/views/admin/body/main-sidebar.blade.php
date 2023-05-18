<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Marshaller of D.G.C.A </li>

                    <!-- Users-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Users">
                            <div class="pull-left"><i class="ti-user"></i><span class="right-nav-text">Users</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Users" class="collapse" data-parent="#sidebarnav">
                             <li> <a href="{{ route('admin.all') }}">Admin List</a> </li>
                            <li> <a href="{{ route('employee.all') }}">Employees List</a> </li>
                        </ul>
                    </li>

                    <!-- Arrival Plans-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Arrival">
                            <div class="pull-left"><i class="ti-palette"></i></i><span class="right-nav-text">Arrival Plans</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Arrival" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('all.plan')}}">Arrival Plans List</a> </li>
                        </ul>
                    </li>

                    <!-- Reports-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Reports">
                            <div class="pull-left"><i class="fa fa-book"></i><span class="right-nav-text">Reports</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Reports" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('report.plan') }}">Arrival Plan Report</a></li>
                        </ul>
                    </li>

                    <!-- Gallary-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Gallary">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">Gallary</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Gallary" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('all.gallary')}}">Gallary Images</a></li>
                        </ul>
                    </li>

                    <!-- Contact-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Contact">
                            <div class="pull-left"><i class="ti-comments"></i></i><span class="right-nav-text">Contact Info</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Contact" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('contact.message') }}">Contact Messages</a></li>
                            <li><a href="{{ route('contact.quirey') }}">Contact Quires</a></li>
                        </ul>
                    </li>

                    <!-- Privacy Page-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Privacy">
                            <div class="pull-left"><i class="ti-comments"></i></i><span
                                    class="right-nav-text">Privacy Page</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Privacy" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('Privacy.index') }}">Privacy List</a></li>
                        </ul>
                    </li>

                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Settings</li>
                    <!-- Profile-->
                    <li><a href="{{ route('admin.profile') }}"><i class="ti-user"></i><span class="right-nav-text">Profile</span></a> </li>
                    <!-- Change Password-->
                    <li><a href="{{ route('change.password') }}"><i class="ti-settings"></i><span class="right-nav-text">Change Password</span></a></li>
                    <!-- Logout-->
                    <li><a class="dropdown-item" href="{{ route('admin.logout') }}" ><i class="text-info ti-lock"></i>Logout</a>  </li>
                    <br><hr>
                </ul>
            </div>
        </div>
    <!-- Left Sidebar End-->