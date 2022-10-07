<x-form :action="route('akun.update', $user->id)" method="PUT">
    @bind($user)
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
            <x-form-input-group :label="trans('form.account.company')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="building"/>
                </x-form-input-group-text>
                <x-form-select :bind="false" name="company" :default="trans('form.account.select_company')" required autofocus>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}" @if ($user->company === $company->id) selected @endif>
                            {{ $company->name }}
                        </option> 
                    @endforeach
                </x-form-select>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.account.role')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="briefcase"/>
                </x-form-input-group-text>
                <x-form-select :bind="false" name="role" :default="trans('form.account.select_role')" required autofocus>
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