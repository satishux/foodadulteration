<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">General</li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="dashboard">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Active::route('admin.dashboard', 'active') }}">
                                <a class="animsition-link" href="{{ route('admin.dashboard') }}">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Home</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Active::route(['admin.foods.index', 'admin.foods.create'], 'active open') }}">
                        <a href="javascript:void(0)" data-slug="layout">
                            <i class="site-menu-icon fa fa-leaf" aria-hidden="true"></i>
                            <span class="site-menu-title">Foods</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Active::route('admin.foods.index', 'active') }}">
                                <a class="animsition-link" href="{{ route('admin.foods.index') }}">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">All foods</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Active::route('admin.foods.create', 'active') }}">
                                <a class="animsition-link" href="{{ route('admin.foods.create') }}">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Add new food</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Active::route([ 'admin.categories.index', 'admin.categories.create' ], 'active open') }}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon fa fa-list-alt" aria-hidden="true"></i>
                            <span class="site-menu-title">Categories</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Active::route('admin.categories.index', 'active') }}">
                                <a href="{{ route('admin.categories.index') }}" >
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">All categories</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Active::route('admin.categories.create', 'active') }}">
                                <a class="animsition-link" href="{{ route('admin.categories.create') }}">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Add new category</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-category">Users</li>
                    <li class="site-menu-item has-sub {{ Active::route(['admin.users.index', 'admin.users.adminIndex', 'admin.users.create' ], 'active open') }}">
                        <a href="javascript:void(0)" data-slug="uikit">
                            <i class="site-menu-icon fa fa-users" aria-hidden="true"></i>
                            <span class="site-menu-title">Users</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Active::route('admin.users.index', 'active') }}">
                                <a class="animsition-link" href="{{ route('admin.users.index') }}">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">All users</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Active::route('admin.users.adminIndex', 'active') }}">
                                <a class="animsition-link" href="{{ route('admin.users.adminIndex') }}">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Admins</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Active::route('admin.users.create', 'active') }}">
                                <a class="animsition-link" href="{{ route('admin.users.create') }}">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Create new users</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="{{ route('auth.logout') }}" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="{{ route('auth.logout') }}" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>