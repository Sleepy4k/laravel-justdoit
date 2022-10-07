@extends('layouts.landing')

@section('side-content')
    <div class="ml-3 mr-3 mt-3">
        <div class="l-head clearfix">
            <div class="inner row">
                @includeIf('partials.body.landing.dashboard.box')
            </div>
        </div>
    
        <div class="inner cover">
            <div class="row">
                @includeIf('partials.body.landing.dashboard.chart')
            </div>
        </div>
    </div>

    <div class="l-foot">
        <div class="inner text-center">
            <x-landing-copyright/>
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