<x-form :action="route('account.store')">
    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group :label="trans('form.account.username')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="username" :value="old('username')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>
    
    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.account.email')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="envelope"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="email" :value="old('email')" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.account.whatsapp_number')">
                <x-form-input-group-text>
                    <x-icon::custom :icon="config('app.phone_code')"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="whatsapp_number" :value="old('whatsapp_number')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.account.password')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user-lock"/>
                </x-form-input-group-text>
                <x-form-input type="password" name="password" :value="old('password')" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.account.confirm_password')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user-lock"/>
                </x-form-input-group-text>
                <x-form-input type="password" name="confirm_password" :value="old('confirm_password')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>
    
    <x-form-submit>
        @lang('form.account.submit.add')
    </x-form-submit>
</x-form>