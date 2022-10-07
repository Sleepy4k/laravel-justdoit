<x-table::row>
    <x-table::col class="md-6">
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.register_number')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $farm->register_number }}
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.livestock_name')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $farm->livestock_name }}
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.gender')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $farm->gender }}
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.racial')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $farm->racial }}
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.birthday')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $farm->birthday->format('d - m - Y') }}
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.weight')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $farm->weight }} kg
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.height')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $farm->height }} cm
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.length')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $farm->length }} cm
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.register_number_father')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    @if (isset($farm->register_number_father))
                        {{ $farm->register_number_father }}
                        <a href="{{ route('livestock.show', $farm->register_number_father) }}">
                            <i class="fa fa-external-link"></i>
                        </a>
                    @else
                        -
                    @endif
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.register_number_mother')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    @if (isset($farm->register_number_mother))
                        {{ $farm->register_number_mother }}
                        <a href="{{ route('livestock.show', $farm->register_number_mother) }}">
                            <i class="fa fa-external-link"></i>
                        </a>
                    @else
                        -
                    @endif
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.farm.status')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $farm->status }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
    </x-table::col>
    <x-table::col class="md-6 text-center">
        <x-table::qr-code>
            {!! $qrcode !!}
        </x-table::qr-code>
    </x-table::col>
</x-table::row>