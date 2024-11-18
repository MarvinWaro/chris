<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">For Human Resource</li>

        <!-- Organization Dropdown -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs(['admin_department', 'technical_department']) ? '' : 'collapsed' }}" data-bs-target="#organization-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-building"></i>
                <span>Organization</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="organization-nav" class="nav-content collapse {{ request()->routeIs(['admin_department', 'technical_department']) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin_department') }}" class="{{ request()->routeIs('admin_department') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Admin Department</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('technical_department') }}" class="{{ request()->routeIs('technical_department') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Technical Department</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Organization Dropdown -->

        <!-- Employees Page Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin_employees') ? '' : 'collapsed' }}" href="{{ route('admin_employees') }}">
                <i class="bi bi-people"></i>
                <span>Employees</span>
            </a>
        </li>

    </ul>

</aside>

