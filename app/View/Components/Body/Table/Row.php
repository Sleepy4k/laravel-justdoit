<?php

namespace App\View\Components\Body\Table;

use Illuminate\View\Component;

class Row extends Component
{
    /**
     * The template route.
     *
     * @var string
     */
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '')
    {
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.table.row');
    }
}
