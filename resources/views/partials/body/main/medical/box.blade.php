<x-navigation::main>
    <x-navigation::tab>
        @if (request()->routeIs('medical.show'))
            <x-navigation::tab-item href="#list-data" :trans="trans('page.medical.list')" active="active" toggle="tab"/>
            <x-navigation::tab-item href="#create-data" :trans="trans('page.medical.create')" toggle="tab"/>
            <x-navigation::tab-item href="#import-data" :trans="trans('page.import.import', ['category' => 'Catatan Kesehatan'])" toggle="tab"/>
        @else
            <x-navigation::tab-item :href="route('medical.show', $medical->livestock_id)" :trans="trans('page.medical.list')"/>
            <x-navigation::tab-item :href="route('medical.show', $medical->livestock_id)" :trans="trans('page.medical.create')"/>
            <x-navigation::tab-item :href="route('medical.show', $medical->livestock_id)" :trans="trans('page.import.import', ['category' => 'Catatan Kesehatan'])"/>
        @endif
    </x-navigation::tab>
    <x-navigation::content>
        @if (request()->routeIs('medical.show'))
            <x-navigation::content-item id="list-data" active="active show" class="pt-4 profile-personal-info">
                @includeIf('partials.tables.main.medical')
            </x-navigation::content-item>

            <x-navigation::content-item id="create-data" class="pt-3">
                @includeIf('partials.forms.main.medical.create')
            </x-navigation::content-item>

            <x-navigation::content-item id="import-data" class="pt-3">
                <x-datatable::import :import="route('import', 'medical')" :template="route('export', 'medical')" translate="Catatan Kesehatan"/>
            </x-navigation::content-item>
        @else
            <x-navigation::content-item id="edit-data" class="pt-3" active="active show">
                @includeIf('partials.forms.main.medical.edit')
            </x-navigation::content-item>
        @endif
    </x-navigation::content>
</x-navigation::main>