<?php

namespace App\View\Components\Body\Chart;

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
    public $chart;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '', $chart = '')
    {
        $this->class = $class;
        $this->chart = $chart;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.chart.basic');
    }
}
