<?php

namespace App\View\Components\Body\Profile;

use Illuminate\View\Component;

class Basic extends Component
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
    public $profile;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '', $profile = '')
    {
        $this->class = $class;
        $this->profile = $profile;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.profile.basic');
    }
}
