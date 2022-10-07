{{  
    html()->div()->class("photo-content $class")
        ->child(html()->div($slot)->class("cover-photo"))
}}