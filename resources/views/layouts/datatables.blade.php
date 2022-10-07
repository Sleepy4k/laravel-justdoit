<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @includeIf("partials.head.meta")

        <title>
            @isset($aplct->application_name) {{ $aplct->application_name }} @else {{ config("app.name", "Benjamin4k") }} @endisset
        </title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <style>
            body {margin: 20px}
        </style>
    </head>
    <body>
        <table class="table table-bordered table-condensed table-striped">
            @yield('table')
        </table>
    </body>
</html>