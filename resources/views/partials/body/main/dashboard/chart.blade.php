<x-card::basic class="col-xl-12 col-lg-8 col-md-8">
    <x-chart::init class="row">
        <x-chart::basic class="col-xl-6 col-lg-8" chart="dashboard-total-data"/>
        <x-chart::basic class="col-xl-6 col-lg-8" chart="dashboard-status-data"/>
    </x-chart::init>
</x-card::basic>

<x-card::basic class="col-xl-12 col-lg-8 col-md-8">
    <x-chart::init class="row">
        <x-chart::basic class="col-xl-6 col-lg-8" chart="dashboard-gender-data"/>
        <x-chart::basic class="col-xl-6 col-lg-8" chart="dashboard-medical-data"/>
    </x-chart::init>
</x-card::basic>

@once
    @push('child-script')
        <script src="{{ asset('js/highchart.js') }}"></script>
        <script type="text/javascript">createChart(chart = 'dashboard-total-data',type = 'line',title = '@lang('page.dashboard.total.title')',subTitle = '@lang('page.dashboard.total.sub_title')',xAxisCategories = {!! json_encode(config("chart.categories")) !!},yAxisTitle = '@lang('page.dashboard.total.value')',seriesData = [{name: '@lang('page.dashboard.total.livestock')', data: {!! json_encode($chart_total) !!}}]);</script>
        <script type="text/javascript">createChart(chart = 'dashboard-status-data',type = 'line',title = '@lang('page.dashboard.status.title')',subTitle = '@lang('page.dashboard.status.sub_title')',xAxisCategories = {!! json_encode(config("chart.categories")) !!},yAxisTitle = '@lang('page.dashboard.status.value')',seriesData = [{name: '@lang('page.dashboard.status.live')', data: {!! json_encode($chart_hidup) !!}}, {name: '@lang('page.dashboard.status.death')', data: {!! json_encode($chart_mati) !!}}, {name: '@lang('page.dashboard.status.sold')', data: {!! json_encode($chart_terjual) !!}}, {name: '@lang('page.dashboard.status.missing')', data: {!! json_encode($chart_hilang) !!}}]);</script>
        <script type="text/javascript">createChart(chart = 'dashboard-gender-data',type = 'line',title = '@lang('page.dashboard.gender.title')',subTitle = '@lang('page.dashboard.gender.sub_title')',xAxisCategories = {!! json_encode(config("chart.categories")) !!},yAxisTitle = '@lang('page.dashboard.gender.value')',seriesData = [{name: '@lang('page.dashboard.gender.male')', data: {!! json_encode($chart_jantan) !!}},{name: '@lang('page.dashboard.gender.female')', data: {!! json_encode($chart_betina) !!}}]);</script>
        <script type="text/javascript">createChart(chart = 'dashboard-medical-data',type = 'line',title = '@lang('page.dashboard.chart.title')',subTitle = '@lang('page.dashboard.chart.sub_title')',xAxisCategories = {!! json_encode(config("chart.categories")) !!},yAxisTitle = '@lang('page.dashboard.chart.value')',seriesData = [{name: '@lang('page.report.chart.weight')', data: {!! json_encode($chart_weight) !!}}, {name: '@lang('page.report.chart.height')', data: {!! json_encode($chart_height) !!}}, {name: '@lang('page.report.chart.lenght')', data: {!! json_encode($chart_lenght) !!}}]);</script>
    @endpush
@endonce