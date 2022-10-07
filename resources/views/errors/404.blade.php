@extends('layouts.error')

@section('title')
    @lang('error.404.title')
@endsection

@section('code')
    @lang('error.404.code')
@endsection

@section('message')
    @production
        @lang('error.404.description')
    @else
        @lang($exception->getMessage() ?: 'error.404.description')
    @endproduction
@endsection

@section('button')
    <x-error::button url="{{ url()->previous() }}" :trans="trans('error.back_home')"/>
@endsection