<x-navigation::main>
    <x-navigation::tab>
        <x-navigation::tab-item href="#list-account" :trans="trans('page.application.list')" active="active" toggle="tab"/>
        <x-navigation::tab-item href="#edit-account" :trans="trans('page.application.edit')" toggle="tab"/>
    </x-navigation::tab>
    <x-navigation::content>
        <x-navigation::content-item id="list-account" active="active show" class="pt-4 profile-personal-info">
            @includeIf('partials.tables.system.application')
        </x-navigation::content-item>
        
        <x-navigation::content-item id="edit-account" class="pt-3">
            @includeIf('partials.forms.system.application.edit')
        </x-navigation::content-item>
    </x-navigation::content>
</x-navigation::main>