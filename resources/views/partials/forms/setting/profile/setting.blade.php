<x-form :action="route('profile.update', $user->id)" method="PUT" enctype="multipart/form-data">
    @bind($user)
        <x-form-input :bind="false" type="hidden" name="old_logo" :value="$user->logo"/>

        <x-form::row>
            <x-form::group class="col-md-12">
                <x-form-input-group :bind="false" class="justify-content-center">
                    @if (!empty(file_exists(public_path('storage/images/'.$user->logo))))
                        <img src="{{ asset('storage/images/'.$user->logo) }}" class="show-image-user img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;" alt="{{ $user->logo }}">
                    @else
                        <img src="{{ asset('images/profile/profile.png') }}" class="show-image-user img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;" alt="Benjamin4k">
                    @endif
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.profile.setting.username')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="user"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="username" :value="old('username')" required autofocus disabled/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.profile.setting.surename')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="envelope"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="surename" :value="old('surename')" required autofocus/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.profile.setting.language')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="globe"/>
                    </x-form-input-group-text>
                    <x-form-select name="language" :options="$language" required autofocus/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.profile.setting.image')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="image"/>
                    </x-form-input-group-text>
                    <x-form-input :bind="false" class="logo-user" type="file" name="logo" :value="old('logo')" onchange="ShowImageUser()"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    @endbind

    <x-form-submit name="form_user">
        @lang('form.profile.setting.submit')
    </x-form-submit>
</x-form>