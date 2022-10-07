<x-card::basic class="col-xl-12 col-lg-8 col-md-8" card="text-center">
    <x-card::title :title="trans('page.report.box.status')" class="m-t-10"/>
    <x-card::widget class="widget-line-list m-b-15">
        <x-card::widget-item class="border-right" :value="count($farms->where('status', 'hidup'))" span="text-success" :name="trans('page.report.box.hidup')"/>
        <x-card::widget-item class="border-right" :value="count($farms->where('status', 'mati'))" span="text-success" :name="trans('page.report.box.mati')"/>
        <x-card::widget-item class="border-right" :value="count($farms->where('status', 'terjual'))" span="text-success" :name="trans('page.report.box.terjual')"/>
        <x-card::widget-item :value="count($farms->where('status', 'hilang'))" span="text-success" :name="trans('page.report.box.hilang')"/>
    </x-card::widget>
</x-card::basic>