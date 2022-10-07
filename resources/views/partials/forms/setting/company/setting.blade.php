<x-form :action="route('farm.update', $company->id)" method="PUT" enctype="multipart/form-data">
    @bind($company)
        <x-form-input :bind="false" type="hidden" name="old_logo" :value="$company->logo"/>

        <x-form::row>
            <x-form::group class="col-md-12">
                <x-form-input-group :bind="false" class="justify-content-center">
                    @if (!empty(file_exists(public_path('storage/images/'.$company->logo))))
                        <img src="{{ asset('storage/images/'.$company->logo) }}" class="show-image-company img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;" alt="{{ $company->logo }}">
                    @else
                        <img src="{{ asset('images/profile/profile.png') }}" class="show-image-company img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;" alt="Benjamin4k">
                    @endif
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.company.name')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="building"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="name" :value="old('name')" required autofocus/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.company.email')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="envelope"/>
                    </x-form-input-group-text>
                    <x-form-input type="email" name="email" :value="old('email')" required autofocus/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.company.website')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="globe"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="website" :value="old('website')"/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.company.logo')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="image"/>
                    </x-form-input-group-text>
                    <x-form-input :bind="false" class="logo-company" type="file" name="logo" :value="old('logo')" onchange="ShowImageCompany()"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    @endbind

    <x-form-submit>
        @lang('form.company.submit.edit')
    </x-form-submit>
</x-form>