<x-form :action="route('medical.store')">
    <x-form-input type="hidden" name="company" :value="request()->user()->company"/>
    <x-form-input type="hidden" name="livestock_id" :value="request()->segment(4)"/>

    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group :label="trans('form.medical.age')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="calendar-days"/>
                </x-form-input-group-text>
                <x-form-select name="age" :options="$ages" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>
    
    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.medical.height')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="ruler-vertical"/>
                </x-form-input-group-text>
                <x-form-input type="number" name="height" :value="old('height')" min="1" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.medical.weight')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="weight-hanging"/>
                </x-form-input-group-text>
                <x-form-input type="number" name="weight" :value="old('weight')" min="1" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.medical.status')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="check"/>
                </x-form-input-group-text>
                <x-form-select name="status" :options="$statuses" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.medical.date')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="calendar-days"/>
                </x-form-input-group-text>
                <x-form-input type="date" name="date" :value="old('date')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group :label="trans('form.medical.note')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="notes-medical"/>
                </x-form-input-group-text>
                <x-form-textarea name="note" :value="old('note')" placeholder="Catatan Ternak"/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>
    
    <x-form-submit>
        @lang('form.medical.submit.add')
    </x-form-submit>
</x-form>