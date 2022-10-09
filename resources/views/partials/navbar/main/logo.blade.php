<div class="nav-header">
    <a href="{{ route('statistic.index') }}" class="brand-logo">
        @isset($aplct->sidebar_icon)
            @empty(file_exists(public_path('storage/images/'.$aplct->sidebar_icon)))
            <img class="logo-abbr" src="{{ asset('images/favicon.png') }}" alt="{{ config('app.name') }}">
            @else
                <img class="logo-abbr" src="{{ asset('storage/images/'.$aplct->sidebar_icon) }}" alt="{{ config('app.name') }}">
            @endempty
        @else
            <img class="logo-abbr" src="{{ asset('images/favicon.png') }}" alt="{{ config('app.name') }}">
        @endisset
        <div class="brand-title">
            @isset($aplct->sidebar_name)
                {{ $aplct->sidebar_name }}
            @else
                {{ config('app.name') }}
            @endisset
        </div>
    </a>

    <x-navbar-hamburger />
</div>