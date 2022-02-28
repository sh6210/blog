<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ env('APP_URL') }}" class="brand-link">
        <img src="{{asset('admin-panel/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Hamilton</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{--menu-open--}}">
                    <a href="#" class="nav-link {{--active--}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>User<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user.index')}}" class="nav-link {{--active--}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{--menu-open--}}">
                    <a href="#" class="nav-link {{--active--}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Student<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('student.index')}}" class="nav-link {{--active--}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('student.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{--menu-open--}}">
                    <a href="#" class="nav-link {{--active--}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>School<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('school.index')}}" class="nav-link {{--active--}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('school.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>