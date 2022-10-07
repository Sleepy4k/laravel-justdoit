<x-form>
    @bind($farm)
        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Nama Ternak')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="cow"/>
                    </x-form-input-group-text>
                    <x-form-input disabled type="text" name="livestock_name"/>
                </x-form-input-group>
            </x-form::group>
    
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Status Ternak')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="check"/>
                    </x-form-input-group-text>
                    <x-form-input disabled type="text" name="status"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    
        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Jenis Kelamin')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="venus-mars"/>
                    </x-form-input-group-text>
                    <x-form-input disabled type="text" name="gender"/>
                </x-form-input-group>
            </x-form::group>
    
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Ras Ternak')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="people-roof"/>
                    </x-form-input-group-text>
                    <x-form-input disabled type="text" name="racial"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    
        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Tanggal Lahir')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="calendar-days"/>
                    </x-form-input-group-text>
                    <x-form-input disabled :bind="false" type="text" name="birthday" :value="$farm->birthday->format('Y-m-d')"/>
                </x-form-input-group>
            </x-form::group>
    
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Bobot Lahir (kg)')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="weight-hanging"/>
                    </x-form-input-group-text>
                    <x-form-input disabled type="text" name="weight"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>

        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Panjang Badan Lahir (cm)')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="ruler-horizontal"/>
                    </x-form-input-group-text>
                    <x-form-input disabled type="text" name="lenght"/>
                </x-form-input-group>
            </x-form::group>
    
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Tinggi Badan Lahir (cm)')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="ruler-vertical"/>
                    </x-form-input-group-text>
                    <x-form-input disabled type="text" name="height"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    
        <x-form::row>
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Nomer Registrasi Induk Pejantan')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="arrow-up-9-1"/>
                    </x-form-input-group-text>
                    <x-form-input disabled type="text" name="register_number_father"/>
                </x-form-input-group>
            </x-form::group>
    
            <x-form::group class="col-md-6">
                <x-form-input-group :label="trans('Tanggal Lahir')">
                    <x-form-input-group-text>
                        <x-icon::fontawesome type="solid" icon="arrow-up-9-1"/>
                    </x-form-input-group-text>
                    <x-form-input disabled type="text" name="register_number_mother"/>
                </x-form-input-group>
            </x-form::group>
        </x-form::row>
    @endbind
</x-form>