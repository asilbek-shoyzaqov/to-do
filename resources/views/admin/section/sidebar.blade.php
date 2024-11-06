<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">To-Do{{--<img alt="image" src="https://taqu.edu.uz/assets/img/ramz/logonew1.svg" class="header-logo" />--}}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">User {{ auth()->user()->name }}</li>
            <li class="dropdown">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Admin Panel</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="compass"></i><span>My Tasks</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route ('admin.my-tasks.create') }}">Add Task</a></li>
                    <li><a class="nav-link" href="{{ route ('admin.my-tasks.index') }}">Manage Tasks</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
