<x-card::basic class="col-xl-12 col-lg-8 col-md-8">
    <x-chart::init class="row">
        <x-chart::basic class="col-xl-12 col-lg-12" chart="dashboard-total-data"/>
    </x-chart::init>
</x-card::basic>

<x-card::basic class="col-xl-12 col-lg-8 col-md-8">
    <x-chart::init class="row">
        <x-chart::basic class="col-xl-12 col-lg-12" chart="dashboard-status-data"/>
    </x-chart::init>
</x-card::basic>

@once
    @push('child-script')
        <script src="{{ asset('js/highchart.js') }}"></script>
        <script type="text/javascript">createChart(chart = 'dashboard-total-data',type = 'line',title = '@lang('page.dashboard.total.title')',subTitle = '@lang('page.dashboard.total.sub_title')',xAxisCategories = {!! json_encode(config("chart.categories")) !!},yAxisTitle = '@lang('page.dashboard.total.value')',seriesData = [{name: '@lang('page.dashboard.total.livestock')', data: {!! json_encode($chart_total) !!}}]);</script>
        <script type="text/javascript">createChart(chart = 'dashboard-status-data',type = 'line',title = '@lang('page.dashboard.status.title')',subTitle = '@lang('page.dashboard.status.sub_title')',xAxisCategories = {!! json_encode(config("chart.categories")) !!},yAxisTitle = '@lang('page.dashboard.status.value')',seriesData = [{name: '@lang('page.dashboard.status.live')', data: {!! json_encode($chart_hidup) !!}}, {name: '@lang('page.dashboard.status.death')', data: {!! json_encode($chart_mati) !!}}, {name: '@lang('page.dashboard.status.sold')', data: {!! json_encode($chart_terjual) !!}}, {name: '@lang('page.dashboard.status.missing')', data: {!! json_encode($chart_hilang) !!}}]);</script>
    @endpush
@endonce