<x-form :action="route('akun.store')">
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
            <x-form-input-group :label="trans('form.account.surename')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="user"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="surename" :value="old('surename')" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.account.role')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="briefcase"/>
                </x-form-input-group-text>
                <x-form-select name="role" :default="trans('form.account.select_role')" required autofocus>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">
                            {{ $role->name }}
                        </option>
                    @endforeach
                </x-form-select>
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