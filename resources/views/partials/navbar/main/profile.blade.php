<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="{{ route('landing') }}" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('profile.index') }}" class="dropdown-item">
                                <i class="icon-user"></i>
                                <span class="ml-2">
                                    @lang('page.landing.profile')
                                </span>
                            </a>
                            <a href="{{ route('logout.index') }}" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">
                                    @lang('page.landing.signout')
                                </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>