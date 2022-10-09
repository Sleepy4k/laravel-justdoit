<x-navigation::main>
    <x-navigation::tab>
        @if (request()->routeIs('task.index'))
            <x-navigation::tab-item href="#list-data" :trans="trans('page.task.list')" active="active" toggle="tab"/>
            <x-navigation::tab-item href="#create-data" :trans="trans('page.task.create')" toggle="tab"/>
        @elseif (request()->routeIs('task.show'))
            <x-navigation::tab-item :href="route('task.index')" :trans="trans('page.task.list')"/>
            <x-navigation::tab-item :href="route('task.index')" :trans="trans('page.task.create')"/>
        @else
            <x-navigation::tab-item :href="route('task.index')" :trans="trans('page.task.list')"/>
            <x-navigation::tab-item :href="route('task.index')" :trans="trans('page.task.create')"/>
        @endif
    </x-navigation::tab>
    <x-navigation::content>
        @if (request()->routeIs('task.index'))
            <x-navigation::content-item id="list-data" active="active show" class="pt-4 profile-personal-info">
                @includeIf('partials.tables.main.task')
            </x-navigation::content-item>

            <x-navigation::content-item id="create-data" class="pt-3">
                @includeIf('partials.forms.main.task.create')
            </x-navigation::content-item>
        @elseif (request()->routeIs('task.show'))
            <x-navigation::content-item id="show-data" class="pt-3" active="active show">
                @includeIf('partials.tables.main.task-detail')
            </x-navigation::content-item>
        @else
            <x-navigation::content-item id="edit-data" class="pt-3" active="active show">
                @includeIf('partials.forms.main.task.edit')
            </x-navigation::content-item>
        @endif
    </x-navigation::content>
</x-navigation::main>

@once
    @push('child-script')
        <script src="{{ asset('js/select2.js') }}"></script>
    @endpush
@endonce