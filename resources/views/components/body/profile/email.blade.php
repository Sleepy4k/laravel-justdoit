{{  
    html()->div()->class($class)
        ->child(html()->div()->class("profile-email")
            ->child(html()->span($email)->class("text-primary"))
        )
}}