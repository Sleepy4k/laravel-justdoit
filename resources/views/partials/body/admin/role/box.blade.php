<x-navigation::main>
    <x-navigation::tab>
        @if (request()->routeIs('role.index'))
            <x-navigation::tab-item href="#list-data" :trans="trans('page.role.list')" active="active" toggle="tab"/>
            <x-navigation::tab-item href="#create-data" :trans="trans('page.role.create')" toggle="tab"/>
            <x-navigation::tab-item href="#import-data" :trans="trans('page.import.import', ['category' => 'Jabatan'])" toggle="tab"/>
        @else
            <x-navigation::tab-item :href="route('role.index')" :trans="trans('page.page.list')"/>
            <x-navigation::tab-item :href="route('role.index')" :trans="trans('page.role.create')"/>
            <x-navigation::tab-item :href="route('role.index')" :trans="trans('page.import.import', ['category' => 'Jabatan'])"/>
        @endif
    </x-navigation::tab>
    <x-navigation::content>
        @if (request()->routeIs('role.index'))
            <x-navigation::content-item id="list-data" active="active show" class="pt-4 profile-personal-info">
                @includeIf('partials.tables.admin.role')
            </x-navigation::content-item>

            <x-navigation::content-item id="create-data" class="pt-3">
                @includeIf('partials.forms.admin.role.create')
            </x-navigation::content-item>

            <x-navigation::content-item id="import-data" class="pt-3">
                <x-datatable::import :import="route('import', 'role')" :template="route('export', 'role')" translate="Jabatan"/>
            </x-navigation::content-item>
        @else
            <x-navigation::content-item id="edit-data" class="pt-3" active="active show">
                @includeIf('partials.forms.admin.role.edit')
            </x-navigation::content-item>
        @endif
    </x-navigation::content>
</x-navigation::main>

@once
    @push('child-script')
        <script src="{{ asset('js/select2.js') }}"></script>
    @endpush
@endonce