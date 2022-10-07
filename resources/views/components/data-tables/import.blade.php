<x-form :action="$import" method="PATCH" enctype="multipart/form-data">
    @if (request()->routeIs('medical.index'))
        <x-form-input type="hidden" name="livestock_id" :value="request()->segment(4)"/>
    @endif

    <x-form::row>
        <x-form::group class="col-md-12">
            <x-form-input-group label="File Excel">
                <x-form-input-group-text>
                    <x-icon::fontawesome type="solid" icon="file-excel"/>
                </x-form-input-group-text>
                <x-form-input type="file" name="import_file" required autofocus/>
            </x-form-input-group>
            @if (request()->routeIs('livestock.index'))
                {{ html()->span()->text(trans("page.import.format"))->child(html()->element('b')->text(' "'.date('m/d/Y H:i:s').' '.trans("page.import.time").'"')) }}
            @endif
        </x-form::group>
    </x-form::row>

    <x-form-submit class="mr-2">
        @lang('page.import.import', ['category' => $translate])
    </x-form-submit>
    {{ html()->a()->class("btn btn-warning")->href($template)->text(trans("page.import.template")) }}
</x-form>