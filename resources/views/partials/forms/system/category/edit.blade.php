<x-form :action="route('category.update', $category->id)" method="PUT">
    @bind($category)
        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.category.name')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="signature"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="name" :value="old('name')" required autofocus/>
                </x-form-input-group>
            </x-form::group>
            
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.category.id')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="indent"/>
                    </x-form-input-group-text>
                    <x-form-input type="number" name="id" :value="old('id')" required autofocus/>
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
                <x-form-input-group :label="trans('form.category.label')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="tag"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="label" :value="old('label')" required autofocus/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    @endbind
    
    <x-form-submit>
        @lang('form.category.submit.edit')
    </x-form-submit>
</x-form>