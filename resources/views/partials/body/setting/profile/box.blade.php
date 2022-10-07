<x-navigation::main>
    <x-navigation::tab>
        <x-navigation::tab-item href="#public-profile" :trans="trans('page.profile.list')" active="active" toggle="tab"/>
        <x-navigation::tab-item href="#public-setting" :trans="trans('page.profile.edit.profile')" toggle="tab"/>
        <x-navigation::tab-item href="#public-password" :trans="trans('page.profile.edit.password')" toggle="tab"/>
    </x-navigation::tab>
    <x-navigation::content>
        <x-navigation::content-item id="public-profile" active="active show" class="pt-4 profile-personal-info">
            @includeIf('partials.tables.setting.profile')
        </x-navigation::content-item>
        
        <x-navigation::content-item id="public-setting" class="pt-3">
            @includeIf('partials.forms.setting.profile.setting')
        </x-navigation::content-item>
        
        <x-navigation::content-item id="public-password" class="pt-3">
            @includeIf('partials.forms.setting.profile.password')
        </x-navigation::content-item>
    </x-navigation::content>
</x-navigation::main>