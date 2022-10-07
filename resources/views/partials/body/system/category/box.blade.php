<x-navigation::main>
    <x-navigation::tab>
        @if (request()->routeIs('category.index'))
            <x-navigation::tab-item href="#list-data" :trans="trans('page.category.list')" active="active" toggle="tab"/>
            <x-navigation::tab-item href="#create-data" :trans="trans('page.category.create')" toggle="tab"/>
            <x-navigation::tab-item href="#import-data" :trans="trans('page.import.import', ['category' => 'Kategori'])" toggle="tab"/>
        @else
            <x-navigation::tab-item :href="route('category.index')" :trans="trans('page.category.list')"/>
            <x-navigation::tab-item :href="route('category.index')" :trans="trans('page.category.create')"/>
            <x-navigation::tab-item :href="route('category.index')" :trans="trans('page.import.import', ['category' => 'Kategori'])"/>
        @endif
    </x-navigation::tab>
    <x-navigation::content>
        @if (request()->routeIs('category.index'))
            <x-navigation::content-item id="list-data" active="active show" class="pt-4 profile-personal-info">
                @includeIf('partials.tables.system.category')
            </x-navigation::content-item>

            <x-navigation::content-item id="create-data" class="pt-3">
                @includeIf('partials.forms.system.category.create')
            </x-navigation::content-item>

            <x-navigation::content-item id="import-data" class="pt-3">
                <x-datatable::import :import="route('import', 'category')" :template="route('export', 'category')" translate="Kategori"/>
            </x-navigation::content-item>
        @else
            <x-navigation::content-item id="edit-data" class="pt-3" active="active show">
                @includeIf('partials.forms.system.category.edit')
            </x-navigation::content-item>
        @endif
    </x-navigation::content>
</x-navigation::main>