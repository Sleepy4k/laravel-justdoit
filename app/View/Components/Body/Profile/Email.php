<?php

namespace App\View\Components\Body\Profile;

use Illuminate\View\Component;

class Email extends Component
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
    public $email;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '', $email = '')
    {
        $this->class = $class;
        $this->email = $email;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.profile.email');
    }
}
