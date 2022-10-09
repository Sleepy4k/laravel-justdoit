<?php

namespace App\View\Components\Body\Navigation;

use Illuminate\View\Component;

class ContentItem extends Component
{
    /**
     * The import route.
     *
     * @var string
     */
    public $id;

    /**
     * The template route.
     *
     * @var string
     */
    public $class;
    
    /**
     * The import route.
     *
     * @var string
     */
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $class = '', $active = '')
    {
        $this->id = $id;
        $this->class = $class;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.navigation.content-item');
    }
}
