<x-form :action="route('profile.update', $user->id)" method="PUT">
    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group :label="trans('form.profile.password.old_password')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user-lock"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="username" :value="old('username')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.profile.password.new_password')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user-lock"/>
                </x-form-input-group-text>
                <x-form-input type="password" name="password" :value="old('password')" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.profile.password.confirm_new_password')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user-lock"/>
                </x-form-input-group-text>
                <x-form-input type="password" name="confirm_password" :value="old('confirm_password')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form-submit name="form_pw">
        @lang('form.profile.password.submit')
    </x-form-submit>
</x-form>