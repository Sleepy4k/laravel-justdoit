<x-card::basic class="col-xl-12 col-lg-8 col-md-8">
    <x-chart::init class="row">
        <x-chart::basic class="col-xl-12 col-lg-8" chart="report-medical-data"/>
    </x-chart::init>
</x-card::basic>

@once
    @push('child-script')
        <script src="{{ asset('js/highchart.js') }}"></script>
        <script type="text/javascript">createChart(chart = 'report-medical-data',type = 'line',title = '@lang('page.dashboard.chart.title')',subTitle = '@lang('page.dashboard.chart.sub_title')',xAxisCategories = {!! json_encode(config("chart.categories")) !!},yAxisTitle = '@lang('page.dashboard.chart.value')',seriesData = [{name: '@lang('page.report.chart.weight')', data: {!! json_encode($chart_weight) !!}}, {name: '@lang('page.report.chart.height')', data: {!! json_encode($chart_height) !!}}, {name: '@lang('page.report.chart.lenght')', data: {!! json_encode($chart_lenght) !!}}]);</script>
    @endpush
@endonce