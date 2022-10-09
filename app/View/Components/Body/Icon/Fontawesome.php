<?php

namespace App\View\Components\Body\Icon;

use Illuminate\View\Component;

class Fontawesome extends Component
{
    /**
     * The import route.
     *
     * @var string
     */
    public $type;

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
    public function __construct($type = '', $icon = '')
    {
        $this->type = $type;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.icon.fontawesome');
    }
}
