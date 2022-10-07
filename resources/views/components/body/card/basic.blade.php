{{  
    html()->div()->class($class)
        ->child(html()->div()->class("card")
            ->child(html()->div($slot)->class("card-body $card")
        )
    )
}}