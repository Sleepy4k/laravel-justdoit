<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @includeIf("partials.head.meta")

        <title>
            @isset($aplct->application_name) {{ $aplct->application_name }} @else {{ config("app.name", "Eternak") }} @endisset
        </title>

        @includeIf('partials.head.icon')

        @includeIf("partials.head.css")
    </head>
    <body>
        <x-preload-animation />

        @hasSection ('main-content')
            <x-layout::landing>
                @yield('main-content')
            </x-layout::landing>
        @else
            <x-layout::landing>
                @yield('side-content')
            </x-layout::landing>
        @endif

        @includeIf('partials.script.main')
    </body>
</html>