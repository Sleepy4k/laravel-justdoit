<x-table::row>
    <x-table::col class="md-6">
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.company.name')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $company->name }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
    
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.company.email')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $company->email }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
    
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.company.website')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $company->website }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
    
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.company.created_at')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $company->created_at->format('d - m - Y') }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
    </x-table::col>
</x-table::row>