<x-navigation::main>
    <x-navigation::tab>
        @if (request()->routeIs('livestock.index'))
            <x-navigation::tab-item href="#list-data" :trans="trans('page.farm.list')" active="active" toggle="tab"/>
            <x-navigation::tab-item href="#create-data" :trans="trans('page.farm.create')" toggle="tab"/>
            <x-navigation::tab-item href="#import-data" :trans="trans('page.import.import', ['category' => 'Data Ternak'])" toggle="tab"/>
        @elseif (request()->routeIs('livestock.show'))
            <x-navigation::tab-item :href="route('livestock.index')" :trans="trans('page.farm.list')"/>
            <x-navigation::tab-item :href="route('livestock.index')" :trans="trans('page.farm.create')"/>
            <x-navigation::tab-item :href="route('livestock.index')" :trans="trans('page.import.import', ['category' => 'Data Ternak'])"/>
        @else
            <x-navigation::tab-item :href="route('livestock.index')" :trans="trans('page.farm.list')"/>
            <x-navigation::tab-item :href="route('livestock.index')" :trans="trans('page.farm.create')"/>
            <x-navigation::tab-item :href="route('livestock.index')" :trans="trans('page.import.import', ['category' => 'Data Ternak'])"/>
        @endif
    </x-navigation::tab>
    <x-navigation::content>
        @if (request()->routeIs('livestock.index'))
            <x-navigation::content-item id="list-data" active="active show" class="pt-4 profile-personal-info">
                @includeIf('partials.tables.main.farm')
            </x-navigation::content-item>

            <x-navigation::content-item id="create-data" class="pt-3">
                @includeIf('partials.forms.main.farm.create')
            </x-navigation::content-item>

            <x-navigation::content-item id="import-data" class="pt-3">
                <x-datatable::import :import="route('import', 'farm')" :template="route('export', 'farm')" translate="Data Ternak"/>
            </x-navigation::content-item>
        @elseif (request()->routeIs('livestock.show'))
            <x-navigation::content-item id="show-data" class="pt-3" active="active show">
                @includeIf('partials.tables.main.farm-detail')
            </x-navigation::content-item>
        @else
            <x-navigation::content-item id="edit-data" class="pt-3" active="active show">
                @includeIf('partials.forms.main.farm.edit')
            </x-navigation::content-item>
        @endif
    </x-navigation::content>
</x-navigation::main>

@once
    @push('child-script')
        <script src="{{ asset('js/select2.js') }}"></script>
    @endpush
@endonce