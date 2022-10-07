@extends('layouts.main')

@once
    @push('addon-css')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/fh-3.2.4/r-2.3.0/sc-2.0.7/sl-1.4.0/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/css/select2.min.css" integrity="sha512-0Cvewd1F2EKKK6qUd9DD/gDo0Y5JqMoDCXms6pIip+Q4sRNPKc16MdlZEPLPAIfzV450aPlKsOuFQjOZ34GzxQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @stack('child-css')
    @endpush
@endonce

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">
            @includeIf('partials.navbar.main.route')
        
            <div class="row">
                @includeIf('partials.body.main.farm.box')
            </div>
        </div>
    </div>
@endsection

@once
    @push('addon-script')
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/fh-3.2.4/r-2.3.0/sc-2.0.7/sl-1.4.0/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/js/select2.full.min.js" integrity="sha512-rE0X9hnjMukCIay2mLEjgIvSq6KnARFMWw9DkyAcBe4vPvtx8U90RE8x1v9v0tcp+jTn3bLoHU6RZGEHWSWGNw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @stack('child-script')
    @endpush
@endonce