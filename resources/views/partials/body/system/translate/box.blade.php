<x-navigation::main>
    <x-navigation::tab>
        @if (request()->routeIs('translate.index'))
            <x-navigation::tab-item href="#list-data" :trans="trans('page.translate.list')" active="active" toggle="tab"/>
            <x-navigation::tab-item href="#create-data" :trans="trans('page.translate.create')" toggle="tab"/>
        @else
            <x-navigation::tab-item :href="route('translate.index')" :trans="trans('page.translate.list')"/>
            <x-navigation::tab-item :href="route('translate.index')" :trans="trans('page.translate.create')"/>
        @endif
    </x-navigation::tab>
    <x-navigation::content>
        @if (request()->routeIs('translate.index'))
            <x-navigation::content-item id="list-data" active="active show" class="pt-4 profile-personal-info">
                @includeIf('partials.tables.system.translate')
            </x-navigation::content-item>

            <x-navigation::content-item id="create-data" class="pt-3">
                @includeIf('partials.forms.system.translate.create')
            </x-navigation::content-item>
        @else
            <x-navigation::content-item id="edit-data" class="pt-3" active="active show">
                @includeIf('partials.forms.system.translate.edit')
            </x-navigation::content-item>
        @endif
    </x-navigation::content>
</x-navigation::main>