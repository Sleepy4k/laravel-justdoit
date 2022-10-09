<x-table::row>
    <x-table::col class="md-6">
        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.task.task')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $task->task }}
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.task.subject')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $task->subject }}
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.task.priority')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $task->priority }}
                </x-table::content>
            </x-table::col>
        </x-table::row>

        <x-table::row class="mb-3">
            <x-table::col class="6">
                <x-table::title class="f-w-500">
                    @lang('table.task.isDone')
                </x-table::title>
            </x-table::col>
            <x-table::col class="6">
                <x-table::content>
                    {{ $task->isDone }}
                </x-table::content>
            </x-table::col>
        </x-table::row>
    </x-table::col>
    <x-table::col class="md-6 text-center">
    </x-table::col>
</x-table::row>