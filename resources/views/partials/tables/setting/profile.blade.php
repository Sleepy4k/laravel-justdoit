<x-table::row>
    <x-table::col class="md-6">
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.profile.username')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $user->username }}
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.profile.surename')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $user->surename }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
    
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.profile.joined_at')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $user->created_at->format('d - m - Y') }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
    </x-table::col>
</x-table::row>