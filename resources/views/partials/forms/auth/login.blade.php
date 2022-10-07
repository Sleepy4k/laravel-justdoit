<x-form :action="route('login.store')">
    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group :label="trans('form.login.whatsapp')">
                <x-form-input-group-text>
                    <x-icon::custom :icon="config('app.phone_code')"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="whatsapp_number" :placeholder="trans('form.login.example.whatsapp')" :value="old('whatsapp_number')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group :label="trans('form.login.password')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user-lock"/>
                </x-form-input-group-text>
                <x-form-input type="password" name="password" :placeholder="trans('form.login.example.password')" :value="old('password')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <div class="text-center">
        <x-form-submit>
            @lang('form.login.submit')
        </x-form-submit>
    </div>
</x-form>