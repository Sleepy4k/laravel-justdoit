<x-form :action="route('page.store')">
    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.page.name')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="signature"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="name" :value="old('name')" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.page.label')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="tag"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="label" :value="old('label')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('table.menu.icon')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="icons"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="icon" :value="old('icon')"/>
                @slot('help')
                    <small class="form-text text-muted">
                        Ikon harus berasal dari <a href="https://fontawesome.com/icons" target="_blank">fontawesome</a> dengan tipe solid
                    </small>
                @endslot
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.page.page_url')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="link"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="page_url" :value="old('page_url')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.page.menu')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="bars"/>
                </x-form-input-group-text>
                <x-form-select name="menu_id" :default="trans('form.page.select_menu')" required autofocus>
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}">
                            {{ $menu->label }}
                        </option>
                    @endforeach
                </x-form-select>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.page.permission')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="key"/>
                </x-form-input-group-text>
                <x-form-select name="permission" :default="trans('form.choose.select_permission')" required autofocus>
                    @foreach ($permissions as $permission)
                        <option value="{{ $permission->name }}">
                            {{ $permission->name }}
                        </option>
                    @endforeach
                </x-form-select>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>
    
    <x-form-submit>
        @lang('form.page.submit.add')
    </x-form-submit>
</x-form>