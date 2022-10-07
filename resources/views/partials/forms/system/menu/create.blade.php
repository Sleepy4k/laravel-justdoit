<x-form :action="route('menu.store')">
    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group :label="trans('form.menu.name')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="signature"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="name" :value="old('name')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>
    
    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.menu.label')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="tag"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="label" :value="old('label')" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.menu.icon')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="icons"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="icon" :value="old('icon')" required autofocus/>
                @slot('help')
                    <small class="form-text text-muted">
                        Ikon harus berasal dari <a href="https://fontawesome.com/icons" target="_blank">fontawesome</a> dengan tipe solid
                    </small>
                @endslot
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('Tipe Menu')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="tag"/>
                </x-form-input-group-text>
                <x-form-select name="type" :options="$types" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('Halaman URL (rute)')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="link"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="page_url" :value="old('page_url')" required autofocus/>
                @slot('help')
                    <small class="form-text text-muted">
                        Silahkan isi dengan web route name, jika kamu menggunakan tipe single
                    </small>
                @endslot
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.menu.category')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="layer-group"/>
                </x-form-input-group-text>
                <x-form-select name="category" :default="trans('form.menu.select_category')" required autofocus>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </x-form-select>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.menu.permission')">
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
        @lang('form.menu.submit.add')
    </x-form-submit>
</x-form>