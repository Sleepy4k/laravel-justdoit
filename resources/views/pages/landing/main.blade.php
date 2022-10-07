@extends('layouts.landing')

@once
    @push('addon-css')
        <link rel="stylesheet" href="{{ asset('fonts/family-quicksand.css') }}">
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    @endpush
@endonce

@section('main-content')
    <div class="l-head clearfix">
        <div class="inner">
            @includeIf('partials.navbar.landing.main')
        </div>
    </div>

    <div class="inner cover">
        <x-landing-description/>
    </div>

    <div class="l-foot">
        <div class="inner">
            <x-landing-copyright/>
        </div>
    </div>
@endsection