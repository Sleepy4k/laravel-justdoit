{{  
    html()->element("h5")->class($class)
        ->child($slot)
        ->child(html()->span(":")->class("pull-right"))
}}