{{  
    html()->div()->id($id)->class("tab-pane fade $active")
        ->child(html()->div($slot)->class($class))
}}