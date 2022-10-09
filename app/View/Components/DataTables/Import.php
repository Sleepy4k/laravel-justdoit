<?php

namespace App\View\Components\DataTables;

use Illuminate\View\Component;

class Import extends Component
{
    /**
     * The import route.
     *
     * @var string
     */
    public $import;

    /**
     * The template route.
     *
     * @var string
     */
    public $template;
    
    /**
     * The template route.
     *
     * @var string
     */
    public $translate;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($import, $template, $translate)
    {
        $this->import = $import;
        $this->template = $template;
        $this->translate = $translate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.data-tables.import');
    }
}