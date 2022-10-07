<x-form :action="route('medical.update', $medical->id)" method="PUT">
    @bind($medical)
        <x-form-input type="hidden" name="livestock_id"/>

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
                    <x-form-input :bind="false" type="date" name="date" :value="old('date', $medical->date->format('Y-m-d'))" required autofocus/>
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
    @endbind
    
    <x-form-submit>
        @lang('form.medical.submit.edit')
    </x-form-submit>
</x-form>