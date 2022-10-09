<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @includeIf("partials.head.meta")

        <title>
            @if (request()->segment(3)) {{ ucfirst(request()->segment(3)) }} | @endif
            @isset($aplct->application_name) {{ $aplct->application_name }} @else {{ config("app.name", "Eternak") }} @endisset
        </title>

        @includeIf('partials.head.icon')

        @includeIf("partials.head.css")
    </head>
    <body>
        <x-preload-animation />

        <x-layout::main>
            @includeIf('partials.navbar.main.logo')

            @includeIf('partials.navbar.main.profile')

            @includeIf('partials.sidebar.main')

            @hasSection ('main-content')
                @yield('main-content')
            @endif

            <x-footer-copyright/>
        </x-layout::main>

        @includeIf('partials.script.main')
    </body>
</html>