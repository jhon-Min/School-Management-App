<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index-2.html">CodiePie</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index-2.html">CP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('home') }}">Home</x-menu-item>
                </ul>
            </li>

            <x-menu-title>Management</x-menu-title>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-solid fa-users"></i>
                    <span>Manage User</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>

                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
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
