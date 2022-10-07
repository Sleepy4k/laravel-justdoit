@extends('layouts.auth')

@section('main-content')
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <h4 class="text-center">
                        @lang('page.register.title')
                    </h4>

                    @includeIf('partials.forms.auth.register')

                    <div class="new-account">
                        <p style="text-align: center">
                            @lang('page.register.question')
                            <a class="text-primary" href="{{ route('login.index') }}">
                                @lang('page.register.login')
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection