@extends('layouts.error')

@section('title')
    @lang('error.500.title')
@endsection

@section('code')
    @lang('error.500.code')
@endsection

@section('message')
    @production
        @lang('error.500.description')
    @else
        @lang($exception->getMessage() ?: 'error.500.description')
    @endproduction
@endsection

@section('button')
    <x-error::button url="{{ url()->previous() }}" :trans="trans('error.back_home')"/>
@endsection