<?php

namespace App\View\Components\Body\Icon;

use Illuminate\View\Component;

class Custom extends Component
{
    /**
     * The import route.
     *
     * @var string
     */
    public $class;

    /**
     * The template route.
     *
     * @var string
     */
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '', $icon = '')
    {
        $this->class = $class;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.icon.custom');
    }
}
