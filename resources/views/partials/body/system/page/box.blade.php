<x-navigation::main>
    <x-navigation::tab>
        @if (request()->routeIs('page.index'))
            <x-navigation::tab-item href="#list-data" :trans="trans('page.page.list')" active="active" toggle="tab"/>
            <x-navigation::tab-item href="#create-data" :trans="trans('page.page.create')" toggle="tab"/>
            <x-navigation::tab-item href="#import-data" :trans="trans('page.import.import', ['category' => 'Halaman'])" toggle="tab"/>
        @else
            <x-navigation::tab-item :href="route('page.index')" :trans="trans('page.page.list')"/>
            <x-navigation::tab-item :href="route('page.index')" :trans="trans('page.page.create')"/>
            <x-navigation::tab-item :href="route('page.index')" :trans="trans('page.import.import', ['category' => 'Halaman'])"/>
        @endif
    </x-navigation::tab>
    <x-navigation::content>
        @if (request()->routeIs('page.index'))
            <x-navigation::content-item id="list-data" active="active show" class="pt-4 profile-personal-info">
                @includeIf('partials.tables.system.page')
            </x-navigation::content-item>

            <x-navigation::content-item id="create-data" class="pt-3">
                @includeIf('partials.forms.system.page.create')
            </x-navigation::content-item>

            <x-navigation::content-item id="import-data" class="pt-3">
                <x-datatable::import :import="route('import', 'page')" :template="route('export', 'page')" translate="Halaman"/>
            </x-navigation::content-item>
        @else
            <x-navigation::content-item id="edit-data" class="pt-3" active="active show">
                @includeIf('partials.forms.system.page.edit')
            </x-navigation::content-item>
        @endif
    </x-navigation::content>
</x-navigation::main>