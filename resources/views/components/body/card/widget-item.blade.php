{{
    html()->element('li')->class($class)->text($value)
        ->child(html()->element('br'))
        ->child(html()->span($name)->class($span))
}}