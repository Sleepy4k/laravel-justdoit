{{ 
    html()->div()->class("site-wrapper")->child(
        html()->div()->class("site-wrapper-inner")->child(
            html()->div($slot)->class("cover-container")
        )
    )
}}