<x-navigation::main>
    <x-navigation::tab>
        <x-navigation::tab-item href="#public-profile" :trans="trans('page.company.list')" active="active" toggle="tab"/>
        <x-navigation::tab-item href="#public-setting" :trans="trans('page.company.edit')" toggle="tab"/>
    </x-navigation::tab>
    <x-navigation::content>
        <x-navigation::content-item id="public-profile" active="active show" class="pt-4 profile-personal-info">
            @includeIf('partials.tables.setting.company')
        </x-navigation::content-item>
        
        <x-navigation::content-item id="public-setting" class="pt-3">
            @includeIf('partials.forms.setting.company.setting')
        </x-navigation::content-item>
    </x-navigation::content>
</x-navigation::main>