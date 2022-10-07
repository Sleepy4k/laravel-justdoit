{{
    html()->element('h1')->class("cover-heading")->style("margin-bottom:1rem")->text(trans('page.landing.description.head'))
}}
{{ 
    html()->span(trans('page.landing.description.body'))->class("lead cover-copy")->style("margin-top:40px")
}}