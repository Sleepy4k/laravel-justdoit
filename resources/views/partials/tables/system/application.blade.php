<x-table::row>
    <x-table::col class="md-6">
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.application.name')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $application->application_name }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
        
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.application.owner')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $application->application_author }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
        
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.application.keywords')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $application->application_keywords }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
        
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.application.description')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $application->application_description }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
        
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.application.sidebar_name')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $application->sidebar_name }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
    </x-table::col>
</x-table::row>