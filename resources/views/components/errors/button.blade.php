{{
    html()->div()->class("mb-5")->child(
        html()->a()->class("btn btn-primary")->href($url)->child(
            html()->span($trans)
        )
    )
}}