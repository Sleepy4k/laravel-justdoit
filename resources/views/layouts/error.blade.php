<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        @includeIf("partials.head.meta")

        <title>
            @hasSection ('title') @yield('title') | @endif
            @isset($aplct->application_name) {{ $aplct->application_name }} @else {{ config("app.name", "Eternak") }} @endisset
        </title>

        @includeIf('partials.head.icon')

        @includeIf("partials.head.css")
    </head>
    <body class="h-100">
        <x-layout::error>
            <x-error::card icon="triangle-exclamation" class="form-input-content text-center" code_class="error-text font-weight-bold" title_class="mt-4"/>
        </x-layout::error>

        <script src="https://kit.fontawesome.com/740c5cc09f.js" crossorigin="anonymous"></script>
    </body>
</html>