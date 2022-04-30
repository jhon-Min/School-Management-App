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

            <x-menu-title>Categories</x-menu-title>

            <li class="dropdown">
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

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-solid fa-users"></i>
                    <span>Manage User</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('user-manage.index') }}">Users</x-menu-item>

                    <x-menu-item link="{{ route('user-manage.create') }}">Create User</x-menu-item>
                </ul>
            </li>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getcodiepie.com/docs" onclick="document.getElementById('logOut').submit()"
                    class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i>
                    Documentation</a>

                <form class="d-none" id="logOut" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
    </aside>
</div>
