<x-form :action="route('register.store')">
    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.register.username')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="username" :placeholder="trans('form.register.example.username')" :value="old('username')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.register.surename')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="surename" :placeholder="trans('form.register.example.surename')" :value="old('surename')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.register.password')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user-lock"/>
                </x-form-input-group-text>
                <x-form-input type="password" name="password" :placeholder="trans('form.register.example.password')" :value="old('password')" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.register.confirm_password')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user-lock"/>
                </x-form-input-group-text>
                <x-form-input type="password" name="confirm_password" :placeholder="trans('form.register.example.confirm_password')" :value="old('confirm_password')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <div class="text-center">
        <x-form-submit>
            @lang('form.register.submit')
        </x-form-submit>
    </div>
</x-form>