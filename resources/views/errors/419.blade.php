@extends('layouts.error')

@section('title')
    @lang('error.419.title')
@endsection

@section('code')
    @lang('error.419.code')
@endsection

@section('message')
    @production
        @lang('error.419.description')
    @else
        @lang($exception->getMessage() ?: 'error.419.description')
    @endproduction
@endsection

@section('button')
    <x-error::button url="{{ url()->previous() }}" :trans="trans('error.back_home')"/>
@endsection