@extends('layouts.error')

@section('title')
    @lang('error.403.title')
@endsection

@section('code')
    @lang('error.403.code')
@endsection

@section('message')
    @production
        @lang('error.403.description')
    @else
        @lang($exception->getMessage() ?: 'error.403.description')
    @endproduction
@endsection

@section('button')
    <x-error::button url="{{ url()->previous() }}" :trans="trans('error.back_home')"/>
@endsection