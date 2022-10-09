<?php

return [
    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar 'placeholder' atribut dengan sesuatu yang
    | lebih mudah dimengerti oleh pembaca seperti "Alamat Surel" daripada "surel" saja.
    | Hal ini membantu kita dalam membuat pesan menjadi lebih ekspresif.
    |
    */

    'attributes' => [
        'whatsapp_number'           => trans('form.login.whatsapp'),
        'password'                  => trans('form.login.password'),

        'confirm_password'          => trans('form.register.confirm_password'),
        'old_password'              => trans('form.profile.password.old_password'),

        'user_name'                 => trans('form.register.username'),
        'user_email'                => trans('form.register.email'),
        'user_number'               => trans('form.register.whatsapp'),
        'user_password'             => trans('form.register.password'),
        'user_confirm_password'     => trans('form.register.confirm_password'),
        'company_name'              => trans('form.company.name'),
        'company_email'             => trans('form.company.email'),
        'company_website'           => trans('form.company.website'),

        'application_name'          => trans('form.application.application_name'),
        'application_icon'          => trans('form.application.application_icon'),
        'application_author'        => trans('form.application.application_author'),
        'application_keywords'      => trans('form.application.application_keywords'),
        'application_description'   => trans('form.application.application_description'),
        'sidebar_name'              => trans('form.application.sidebar_name'),
        'sidebar_icon'              => trans('form.application.sidebar_icon'),
    ]
];