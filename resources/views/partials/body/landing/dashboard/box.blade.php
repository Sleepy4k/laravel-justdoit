<x-card::basic class="col-lg-3 col-sm-6" card="stat-widget-two">
    <x-card::content :name="trans('page.report.card.total')" :value="count($farms->where('status', '!=', 'terjual')->where('status', '!=', 'hilang'))"/>
</x-card::basic>

<x-card::basic class="col-lg-3 col-sm-6" card="stat-widget-two">
    <x-card::content :name="trans('page.report.card.female')" :value="count($farms->where('status', '!=', 'terjual')->where('status', '!=', 'hilang')->where('gender', 'betina'))"/>
</x-card::basic>

<x-card::basic class="col-lg-3 col-sm-6" card="stat-widget-two">
    <x-card::content :name="trans('page.report.card.male')" :value="count($farms->where('status', '!=', 'terjual')->where('status', '!=', 'hilang')->where('gender', 'jantan'))"/>
</x-card::basic>

<x-card::basic class="col-lg-3 col-sm-6" card="stat-widget-two">
    <x-card::content :name="trans('page.report.card.male')" :value="count($farms->where('status', 'terjual')->where('status', '!=', 'hilang'))"/>
</x-card::basic>