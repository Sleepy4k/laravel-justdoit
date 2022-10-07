{{  
    html()->div()->class("profile-info $class")
        ->child(html()->div()->class("row justify-content-center")
            ->child(html()->div()->class("col-xl-8")
                ->child(html()->div($slot)->class("row")
            )
        )
    )
}}