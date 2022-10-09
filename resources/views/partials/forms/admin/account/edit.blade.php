<x-form :action="route('akun.update', $user->id)" method="PUT">
    @bind($user)
        <x-form::row>
            <x-form::group class="col-md-12">
                <x-form-input-group :label="trans('form.account.username')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="user"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="username" :value="old('username')" required autofocus disabled/>
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
                            <option value="{{ $role->id }}"  @if ($user->roles->pluck('name')[0] === $role->name) selected @endif>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </x-form-select>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    @endbind
    
    <x-form-submit>
        @lang('form.account.submit.edit')
    </x-form-submit>
</x-form>