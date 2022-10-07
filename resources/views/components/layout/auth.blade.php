{{ 
    html()->div()->class("authincation h-100")->child(
        html()->div()->class("container-fluid h-100")->child(
            html()->div()->class("row justify-content-center h-100 align-items-center")->child(
                html()->div($slot)->class("col-md-6")
            )
        )
    )
}}