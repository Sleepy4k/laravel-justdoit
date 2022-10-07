@extends('layouts.error')

@section('title')
    @lang('error.503.title')
@endsection

@section('code')
    @lang('error.503.code')
@endsection

@section('message')
    @production
        @lang('error.503.description')
    @else
        @lang($exception->getMessage() ?: 'error.503.description')
    @endproduction
@endsection