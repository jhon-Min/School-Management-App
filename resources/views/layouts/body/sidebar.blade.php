@php
$prefix = Request::route()->getPrefix();
@endphp

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Company Name</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">CP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ request()->url() == route('home') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('home') }}">Home</x-menu-item>
                </ul>
            </li>

            <x-menu-title>Profile</x-menu-title>
            <li class="dropdown {{ $prefix == '/profile' ? 'active' : '' }} ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-solid fa-user"></i>
                    <span>Manage Profile</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('profile.index') }}">Profile</x-menu-item>
                    <x-menu-item link="{{ route('profile.change-password') }}">Change Password</x-menu-item>
                </ul>
            </li>

            <x-menu-title>Categories</x-menu-title>
            <li
                class="dropdown {{ Request::is('department') ? 'active' : '' }} {{ Request::is('department/create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-solid fa-building"></i>
                    <span>Department</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('department.index') }}">Lists</x-menu-item>
                    <x-menu-item link="{{ route('department.create') }}">Create</x-menu-item>
                </ul>
            </li>

            <x-menu-title>Management</x-menu-title>
            <li
                class="dropdown {{ Request::is('user') ? 'active' : '' }} {{ Request::is('user/create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-solid fa-users"></i>
                    <span>Manage User</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('user.index') }}">Users</x-menu-item>
                    <x-menu-item link="{{ route('user.create') }}">Create User</x-menu-item>
                </ul>
            </li>

            <x-menu-title>Setup Management</x-menu-title>
            <li class="dropdown {{ $prefix == 'setup/' ? 'active' : '' }} ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-solid fa-table-list"></i>
                    <span>Manage Setup</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('course.index') }}">Courses</x-menu-item>
                    <x-menu-item link="{{ route('course.create') }}">Create Course</x-menu-item>

                    <x-menu-item link="{{ route('shift.index') }}">Shifts</x-menu-item>
                    <x-menu-item link="{{ route('shift.create') }}">Create Shift</x-menu-item>
                </ul>
            </li>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getcodiepie.com/docs" onclick="document.getElementById('logOut').submit()"
                    class="btn btn-danger btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i>
                    Logout</a>

                <form class="d-none" id="logOut" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
    </aside>
</div>
