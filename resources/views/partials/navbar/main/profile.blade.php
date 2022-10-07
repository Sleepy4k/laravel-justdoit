<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="{{ route('landing') }}" role="button" data-toggle="dropdown">
                            @empty(file_exists(public_path('images/country/'.config('language')[app()->getLocale()]['icon'].'.png')))
                                <span style="font-size: 75%">
                                    {{ config('language')[app()->getLocale()]['label'] }}
                                </span>
                            @else
                                <img src="{{ asset('images/country/'.config('language')[app()->getLocale()]['icon'].'.png') }}" class="img-fluid rounded-circle" alt="{{ config('language')[app()->getLocale()]['label'] }}">
                            @endempty
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            @foreach (config('language') as $lang => $language)
                                @if ($lang != app()->getLocale())
                                    <a href="{{ route('landing.lang', $lang) }}" class="dropdown-item">
                                        @empty(file_exists(public_path('images/country/'.$language['icon'].'.png')))
                                            <div class="d-flex flex-direction row">
                                                <span class="ml-2 mt-1">
                                                    {{ $language['label'] }}
                                                </span>
                                            </div>
                                        @else
                                            <div class="d-flex flex-direction row">
                                                <img src="{{ asset('images/country/'.$language['icon'].'.png') }}" class="img-fluid rounded-circle" alt="{{ $language['label'] }}">
                                                <span class="ml-2 mt-1">
                                                    {{ $language['label'] }}
                                                </span>
                                            </div>
                                        @endempty
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="{{ route('landing') }}" role="button" data-toggle="dropdown">
                            @empty(file_exists(public_path('storage/images/'.request()->user()->logo)))
                                <i class="mdi mdi-account"></i>
                            @else
                                <img src="{{ asset('storage/images/'.request()->user()->logo) }}" class="img-fluid rounded-circle" width="75%" height="75%" alt="{{ request()->user()->logo }}">
                            @endempty
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