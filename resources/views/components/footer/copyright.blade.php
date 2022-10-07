{{
    html()->div()->class("footer")->child(
        html()->div()->class("copyright")->child(
            html()->element('p')->text(trans('footer.copyright', ['year' => date('Y')]))
        )
    )
}}