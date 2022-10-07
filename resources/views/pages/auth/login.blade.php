@extends('layouts.auth')

@section('main-content')
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <h4 class="text-center">
                        @lang('page.login.title')
                    </h4>

                    @includeIf('partials.forms.auth.login')
        
                    <div class="new-account mt-3">
                        <p style="text-align: center">
                            @lang('page.login.question')
                            <a class="text-primary" href="{{ route('register.index') }}">
                                @lang('page.login.register')
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection