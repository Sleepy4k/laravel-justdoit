<h3 class="l-head-brand" style="padding:10px 5px; width:100%; text-align: left">
    @isset($aplct->application_name) {{ $aplct->application_name }} @else {{ config("app.name", "Eternak") }} @endisset
    <span style="float:right; position:relative; top:8px; font-size:15px;">
        @auth
            <a href="{{ route('statistic.index') }}" class="link" style="margin-right: 10px">
                @lang('page.landing.dashboard')
            </a>
        @else
            <a href="{{ route('login.index') }}" class="link" style="margin-right: 10px">
                @lang('page.landing.signin')
            </a>
            <a href="{{ route('register.index') }}" class="link">
                @lang('page.landing.register')
            </a>
        @endauth
    </span>
</h3>