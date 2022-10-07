@extends('layouts.main')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">
            @includeIf('partials.navbar.main.route')

            <div class="row">
                @includeIf('partials.body.setting.company.card')
            </div>

            <div class="row">
                @includeIf('partials.body.setting.company.box')
            </div>
        </div>
    </div>
@endsection

@once
    @push('addon-script')
        <script src="{{ asset('js/image-preview.js') }}"></script>
    @endpush
@endonce