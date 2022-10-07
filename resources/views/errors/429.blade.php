@extends('layouts.error')

@section('title')
    @lang('error.429.title')
@endsection

@section('code')
    @lang('error.429.code')
@endsection

@section('message')
    @production
        @lang('error.429.description')
    @else
        @lang($exception->getMessage() ?: 'error.429.description')
    @endproduction
@endsection

@section('button')
    <x-error::button url="{{ url()->previous() }}" :trans="trans('error.back_home')"/>
@endsection