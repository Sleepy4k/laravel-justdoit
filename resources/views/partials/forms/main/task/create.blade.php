<x-form :action="route('task.store')">
    <x-form-input type="hidden" name="user" value="{{ request()->user()->id }}"/>

    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group :label="trans('form.task.task')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="cow"/>
                </x-form-input-group-text>
                <x-form-input type="text" name="task" :value="old('task')" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.task.priority')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="people-roof"/>
                </x-form-input-group-text>
                <x-form-select name="priority" :options="$priority" required autofocus/>
            </x-form-input-group>
        </x-form::group>

        <x-form::group class="col-md-6">
            <x-form-input-group :label="trans('form.task.isDone')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="people-roof"/>
                </x-form-input-group-text>
                <x-form-select name="isDone" :options="$isDone" required autofocus/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group :label="trans('form.task.subject')">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="venus-mars"/>
                </x-form-input-group-text>
                <x-form-textarea name="subject" :value="old('subject')"/>
            </x-form-input-group>
        </x-form::group>
    </x-form::row>

    <x-form-submit>
        @lang('form.task.submit.add')
    </x-form-submit>
</x-form>