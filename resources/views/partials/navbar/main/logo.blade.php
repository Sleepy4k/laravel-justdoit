<div class="nav-header">
    <a href="{{ route('statistic.index') }}" class="brand-logo">
        @foreach ($cmpny as $cmpn)
            @if ($cmpn->id == request()->user()->company)
                @empty(file_exists(public_path('storage/images/'.$cmpn->logo)))
                    <img class="logo-abbr" src="{{ asset('images/favicon.png') }}" alt="{{ config('app.name') }}">
                @else
                    @isset($aplct->sidebar_icon)
                        @empty(file_exists(public_path('storage/images/'.$aplct->sidebar_icon)))
                            <img class="logo-abbr" src="{{ asset('storage/images/'.$cmpn->logo) }}" alt="{{ $cmpn->logo }}">
                        @else
                            <img class="logo-abbr" src="{{ asset('storage/images/'.$aplct->sidebar_icon) }}" alt="{{ config('app.name') }}">
                        @endempty
                    @else
                        <img class="logo-abbr" src="{{ asset('images/favicon.png') }}" alt="{{ config('app.name') }}">
                    @endisset
                @endempty

                <div class="brand-title">
                    @isset($aplct->sidebar_name)
                        @isset($cmpn->name)
                            {{ $cmpn->name }}
                        @else
                            {{ $aplct->sidebar_name }}
                        @endisset
                    @else
                        @isset($cmpn->name)
                            {{ $cmpn->name }}
                        @else
                            {{ config('app.name') }}
                        @endisset
                    @endisset
                </div>
            @endif
        @endforeach
    </a>

    <x-navbar-hamburger />
</div>