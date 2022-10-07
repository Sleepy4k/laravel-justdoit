@extends('layouts.landing')

@section('main-content')
    <div class="inner cover">
        @includeIf('partials.forms.landing.public')
    </div>
@endsection