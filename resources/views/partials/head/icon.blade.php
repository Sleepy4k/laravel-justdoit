@isset($aplct->application_icon)
    @empty(file_exists(public_path('storage/images/'.$aplct->application_icon)))
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    @else
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/images/'.$aplct->application_icon) }}">
    @endempty
@else
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
@endisset