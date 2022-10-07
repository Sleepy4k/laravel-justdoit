@extends('layouts.error')

@section('title')
    @lang('error.401.title')
@endsection

@section('code')
    @lang('error.401.code')
@endsection

@section('message')
    @production
        @lang('error.401.description')
    @else
        @lang($exception->getMessage() ?: '401.description')
    @endproduction
@endsection

@section('button')
    <x-error::button url="{{ url()->previous() }}" :trans="trans('error.back_home')"/>
@endsection