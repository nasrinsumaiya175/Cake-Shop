<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <!-- Logo and Brand Text -->
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <span class="text-truncate" data-i18n="Dashboards">Dashboards</span>
            </a>
        </li>

        <!-- User List -->
        <li class="menu-item">
            <a href="{{ route('dashboard.alluser') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <span class="text-truncate" data-i18n="All User List">All User List</span>
            </a>
        </li>

        <!-- Edit User -->
        <li class="menu-item">
            @if(isset($user))
            <a href="{{ route('dashboard.edituser', $user->id) }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <span class="text-truncate" data-i18n="Edit User">Profile</span>
            </a>
            @endif
        </li>
    </ul>

</aside>