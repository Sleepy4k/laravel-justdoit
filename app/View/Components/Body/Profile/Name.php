<?php

namespace App\View\Components\Body\Profile;

use Illuminate\View\Component;

class Name extends Component
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
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '', $name = '')
    {
        $this->class = $class;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.profile.name');
    }
}
