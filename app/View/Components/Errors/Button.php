<?php

namespace App\View\Components\Errors;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * The import route.
     *
     * @var string
     */
    public $url;

    /**
     * The template route.
     *
     * @var string
     */
    public $trans;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url = '#', $trans = '')
    {
        $this->url = $url;
        $this->trans = $trans;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.errors.button');
    }
}
