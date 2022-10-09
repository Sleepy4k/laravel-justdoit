<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        @includeIf('partials.head.meta')

        <title>
            @if (request()->segment(1)) {{ ucfirst(request()->segment(1)) }} | @endif
            @isset($aplct->application_name) {{ $aplct->application_name }} @else {{ config("app.name", "Eternak") }} @endisset
        </title>

        @includeIf('partials.head.icon')

        @includeIf('partials.head.css')
    </head>
    <body class="h-100">
        @hasSection ('main-content')
            <x-layout::auth>
                @yield('main-content')
            </x-layout::auth>
        @endif

        @includeIf('partials.script.main')
    </body>
</html>