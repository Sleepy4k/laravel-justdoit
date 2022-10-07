{{  
    html()->div()->class($class)
        ->child(html()->div()->class("profile-name")
            ->child(html()->span($name)->class("text-primary"))
        )
}}