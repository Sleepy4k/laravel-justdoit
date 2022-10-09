<?php

return [
    'options' => [
        "closeButton" => env('TOAST_CLOSE_BUTTON', false),
        "debug" => env('TOAST_DEBUG', false),
        "newestOnTop" => env('TOAST_NEWEST_ON_TOP', false),
        "progressBar" => env('TOAST_PROGGRESS_BAR', false),
        "positionClass" => env('TOAST_POSITION', "toast-top-right"),
        "preventDuplicates" => env('TOAST_PREVENT_DUPLICATE', false),
        "onclick" => null,
        "showDuration" => "300",
        "hideDuration" => "1000",
        "timeOut" => env('TOAST_SHOW_DURATION', "5000"),
        "extendedTimeOut" => "1000",
        "showEasing" => "swing",
        "hideEasing" => "linear",
        "showMethod" => "fadeIn",
        "hideMethod" => "fadeOut"
    ],
];
