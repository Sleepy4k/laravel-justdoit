<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<meta name="author" content="@isset($aplct->application_author) {{ $aplct->application_author }} @else {{ config("meta.author") }} @endisset">
<meta name="keywords" content="@isset($aplct->application_keywords) {{ $aplct->application_keywords }} @else {{ config("meta.keyword") }} @endisset">
<meta name="description" content="@isset($aplct->application_description) {{ $aplct->application_description }} @else {{ config("meta.description") }} @endisset">

<meta property="og:site_name" content="@isset($aplct->application_name) {{ $aplct->application_name }} @else {{ config("app.name", "Eternak") }} @endisset">
<meta property="og:title" content="@isset($aplct->application_name) {{ $aplct->application_name }} @else {{ config("app.name", "Eternak") }} @endisset">
<meta property="og:description" content="@isset($aplct->application_description) {{ $aplct->application_description }} @else {{ config("meta.description") }} @endisset">
<meta property="og:type" content="website">
<meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta property="og:url" content="{{ config('app.url') }}">
<meta property="og:image" content="@isset($aplct->application_icon) @empty(file_exists(public_path('storage/images/'.$aplct->application_icon))) {{ asset('images/favicon.png') }} @else {{ asset('storage/images/'.$aplct->application_icon) }} @endempty @else {{ asset('images/favicon.png') }} @endisset">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="@isset($aplct->application_description) {{ $aplct->application_description }} @else {{ config("meta.description") }} @endisset">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@isset($aplct->application_name) {{ $aplct->application_name }} @else {{ config("app.name", "Eternak") }} @endisset">
<meta name="twitter:image" content="@isset($aplct->application_icon) @empty(file_exists(public_path('storage/images/'.$aplct->application_icon))) {{ asset('images/favicon.png') }} @else {{ asset('storage/images/'.$aplct->application_icon) }} @endempty @else {{ asset('images/favicon.png') }} @endisset">