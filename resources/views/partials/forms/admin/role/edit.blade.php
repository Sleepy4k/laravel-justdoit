<x-form :action="route('role.update', $role->id)" method="PUT">
    @bind($role)
        <x-form::row>
            <x-form::group class="col-md-12">
                <x-form-input-group :label="trans('form.role.name')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="signature"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="name" :value="old('name')" required autofocus/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.role.guard_name')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="tag"/>
                    </x-form-input-group-text>
                    <x-form-select :bind="false" name="guard_name" :options="$roles" :default="trans('form.role.select_guard_name')" required autofocus/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.category.permission')">
                    <x-form-select :bind="false" name="permission[]" class="multi-select-placeholder js-states" multiple required autofocus>
                        @foreach ($role->permissions as $permission)
                            <option value="{{ $permission->id }}" selected>
                                {{ $permission->name }}
                            </option>
                        @endforeach
                    </x-form-select>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    @endbind
    
    <x-form-submit>
        @lang('form.role.submit.edit')
    </x-form-submit>
</x-form>