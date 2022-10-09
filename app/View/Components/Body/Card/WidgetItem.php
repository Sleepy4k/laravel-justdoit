<?php

namespace App\View\Components\Body\Card;

use Illuminate\View\Component;

class WidgetItem extends Component
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
    public $value;
    
    /**
     * The import route.
     *
     * @var string
     */
    public $span;

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
    public function __construct($class = '', $value = '', $span = '', $name = '')
    {
        $this->class = $class;
        $this->value = $value;
        $this->span = $span;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.card.widget-item');
    }
}
