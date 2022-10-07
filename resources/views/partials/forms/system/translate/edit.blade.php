<x-form :action="route('translate.update', $translate->id)" method="PUT">
    @bind($translate)
        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.translate.group')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="layer-group"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="group" :value="old('group')" required autofocus/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.translate.key')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="tag"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="key" :value="old('key')" required autofocus/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.translate.lang_id')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="language"/>
                    </x-form-input-group-text>
                    <x-form-input :bind="false" type="text" name="lang_id" :value="old('lang_id', $translate->text['id'])" required autofocus/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.translate.lang_en')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="language"/>
                    </x-form-input-group-text>
                    <x-form-input :bind="false" type="text" name="lang_en" :value="old('lang_en', $translate->text['en'])" required autofocus/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    @endbind
    
    <x-form-submit>
        @lang('form.translate.submit.edit')
    </x-form-submit>
</x-form>