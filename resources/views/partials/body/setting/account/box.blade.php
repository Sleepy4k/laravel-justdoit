<x-navigation::main>
    <x-navigation::tab>
        @if (request()->routeIs('account.index'))
            <x-navigation::tab-item href="#list-data" :trans="trans('page.account.list')" active="active" toggle="tab"/>
            <x-navigation::tab-item href="#create-data" :trans="trans('page.account.create')" toggle="tab"/>
            <x-navigation::tab-item href="#import-data" :trans="trans('page.import.import', ['category' => 'Akun'])" toggle="tab"/>
        @else
            <x-navigation::tab-item :href="route('account.index')" :trans="trans('page.account.list')"/>
            <x-navigation::tab-item :href="route('account.index')" :trans="trans('page.account.create')"/>
            <x-navigation::tab-item :href="route('account.index')" :trans="trans('page.import.import', ['category' => 'Akun'])"/>
        @endif
    </x-navigation::tab>
    <x-navigation::content>
        @if (request()->routeIs('account.index'))
            <x-navigation::content-item id="list-data" active="active show" class="pt-4 profile-personal-info">
                @includeIf('partials.tables.setting.account')
            </x-navigation::content-item>

            <x-navigation::content-item id="create-data" class="pt-3">
                @includeIf('partials.forms.setting.account.create')
            </x-navigation::content-item>

            <x-navigation::content-item id="import-data" class="pt-3">
                <x-datatable::import :import="route('import', 'account')" :template="route('export', 'account')" translate="Akun"/>
            </x-navigation::content-item>
        @else
            <x-navigation::content-item id="edit-data" class="pt-3" active="active show">
                @includeIf('partials.forms.setting.account.edit')
            </x-navigation::content-item>
        @endif
    </x-navigation::content>
</x-navigation::main>