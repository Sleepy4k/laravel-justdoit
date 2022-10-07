<x-form :action="route('livestock.update', $farm->id)" method="PUT">
    @bind($farm)
        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.livestock_name')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="cow"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="livestock_name" placeholder="Contoh: rajendra" :value="old('livestock_name')"/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.status')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="check"/>
                    </x-form-input-group-text>
                    <x-form-select :bind="false" name="status" :options="$statuses" required autofocus/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.gender')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="venus-mars"/>
                    </x-form-input-group-text>
                    <x-form-select :bind="false" name="gender" :options="$genders" required autofocus/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.racial')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="people-roof"/>
                    </x-form-input-group-text>
                    <x-form-input type="text" name="racial" placeholder="Contoh: etawa" :value="old('racial')"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.birthday')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="calendar-days"/>
                    </x-form-input-group-text>
                    <x-form-input :bind="false" type="date" name="birthday" :value="old('birthday', $farm->birthday->format('Y-m-d'))"/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.weight')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="weight-hanging"/>
                    </x-form-input-group-text>
                    <x-form-input type="number" name="weight" :value="old('weight')"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.lenght')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="ruler-horizontal"/>
                    </x-form-input-group-text>
                    <x-form-input type="number" name="lenght" :value="old('lenght')"/>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.height')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="ruler-vertical"/>
                    </x-form-input-group-text>
                    <x-form-input type="number" name="height" :value="old('height')"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.register_number_father')">
                    <x-form-select :bind="false" name="register_number_father" class="single-select-placeholder js-states select2-hidden-accessible" required autofocus>
                        @foreach ($fathers as $fathers)
                            <option value="{{ $fathers->register_number }}" @if ($farm->register_number_father === $fathers->register_number) selected @endif>
                                {{ $fathers->register_number }} | {{ $fathers->livestock_name }}
                            </option>
                        @endforeach
                    </x-form-select>
                </x-form-input-group>
            </x-form::group>

            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('form.farm.register_number_mother')">
                    <x-form-select :bind="false" name="register_number_mother" class="single-select-placeholder js-states select2-hidden-accessible" required autofocus>
                        @foreach ($mothers as $mother)
                            <option value="{{ $mother->register_number }}" @if ($farm->register_number_mother === $mother->register_number) selected @endif>
                                {{ $mother->register_number }} | {{ $mother->livestock_name }}
                            </option>
                        @endforeach
                    </x-form-select>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    @endbind

    <x-form-submit>
        @lang('form.farm.submit.edit')
    </x-form-submit>
</x-form>