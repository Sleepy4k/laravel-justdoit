<x-navigation::main>
    <x-navigation::tab>
        @if (request()->routeIs('menu.index'))
            <x-navigation::tab-item href="#list-data" :trans="trans('page.menu.list')" active="active" toggle="tab"/>
            <x-navigation::tab-item href="#create-data" :trans="trans('page.menu.create')" toggle="tab"/>
            <x-navigation::tab-item href="#import-data" :trans="trans('page.import.import', ['category' => 'Menu'])" toggle="tab"/>
        @else
            <x-navigation::tab-item :href="route('menu.index')" :trans="trans('page.menu.list')"/>
            <x-navigation::tab-item :href="route('menu.index')" :trans="trans('page.menu.create')"/>
            <x-navigation::tab-item :href="route('menu.index')" :trans="trans('page.import.import', ['category' => 'Menu'])"/>
        @endif
    </x-navigation::tab>
    <x-navigation::content>
        @if (request()->routeIs('menu.index'))
            <x-navigation::content-item id="list-data" active="active show" class="pt-4 profile-personal-info">
                @includeIf('partials.tables.system.menu')
            </x-navigation::content-item>

            <x-navigation::content-item id="create-data" class="pt-3">
                @includeIf('partials.forms.system.menu.create')
            </x-navigation::content-item>

            <x-navigation::content-item id="import-data" class="pt-3">
                <x-datatable::import :import="route('import', 'menu')" :template="route('export', 'menu')" translate="Menu"/>
            </x-navigation::content-item>
        @else
            <x-navigation::content-item id="edit-data" class="pt-3" active="active show">
                @includeIf('partials.forms.system.menu.edit')
            </x-navigation::content-item>
        @endif
    </x-navigation::content>
</x-navigation::main>