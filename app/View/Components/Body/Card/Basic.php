<?php

namespace App\View\Components\Body\Card;

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
    public $card;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '', $card = '')
    {
        $this->class = $class;
        $this->card = $card;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.card.basic');
    }
}
