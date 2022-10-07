@extends('layouts.main')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">
            @includeIf('partials.navbar.main.route')
            
            <div class="row">
                @includeIf('partials.body.main.report.box')
            </div>

            <div class="row">
                @includeIf('partials.body.main.report.card')
            </div>

            <div class="row">
                @includeIf('partials.body.main.report.chart')
            </div>
        </div>
    </div>
@endsection

@once
    @push('addon-script')
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        
        @stack('child-script')
    @endpush
@endonce