<div class="{{ $class }}">
    <h1 class="{{ $code_class }}">
        @hasSection('code')
            @yield('code')
        @else
            @lang('error.default_code')
        @endif
    </h1>

    <h4 class="{{ $title_class }}">
        <i class="fa-solid fa-{{ $icon }}"></i>
        @hasSection('title')
            @yield('title')
        @else
            @lang('error.default_title')
        @endif
    </h4>

    <p class="{{ $message_class }}">
        @hasSection('message')
            @yield('message')
        @else
            @lang('error.default_message')
        @endif
    </p>

    @hasSection('button')
        @yield('button')
    @endif
</div>