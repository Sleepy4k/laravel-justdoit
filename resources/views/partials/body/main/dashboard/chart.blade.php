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
    @endpush
@endonce