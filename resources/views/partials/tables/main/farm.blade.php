<x-card::basic class="col-12">
    <x-table::responsive>
        {!! $dataTable->table() !!}
    </x-table::responsive>
</x-card::basic>

@once
    @push('child-script')
        <script src="{{ asset('vendor/datatables/js/buttons.js') }}"></script>

        {!! $dataTable->scripts() !!}
    @endpush
@endonce