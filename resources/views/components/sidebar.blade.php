<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">MBS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('home') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Master</span></a>
                <ul class="dropdown-menu">

                    <li>
                        <a class="nav-link" href="{{ route('header.index') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('about.index') }}">about</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('footer.index') }}">footer</a>
                    </li>
                </ul>
            </li>


        </ul>
    </aside>
</div>
