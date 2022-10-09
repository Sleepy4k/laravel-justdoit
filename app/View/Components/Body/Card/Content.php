<?php

namespace App\View\Components\Body\Card;

use Illuminate\View\Component;

class Content extends Component
{
    /**
     * The import route.
     *
     * @var string
     */
    public $name;

    /**
     * The template route.
     *
     * @var string
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = '', $value = '')
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.card.content');
    }
}
