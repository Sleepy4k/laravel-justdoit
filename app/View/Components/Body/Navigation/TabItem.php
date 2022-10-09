<?php

namespace App\View\Components\Body\Navigation;

use Illuminate\View\Component;

class TabItem extends Component
{
    /**
     * The import route.
     *
     * @var string
     */
    public $href;

    /**
     * The template route.
     *
     * @var string
     */
    public $active;
    
    /**
     * The import route.
     *
     * @var string
     */
    public $toggle;

    /**
     * The template route.
     *
     * @var string
     */
    public $trans;

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
    public function __construct($href, $trans, $active = '', $toggle = '', $class = '')
    {
        $this->href = $href;
        $this->trans = $trans;
        $this->active = $active;
        $this->toggle = $toggle;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.body.navigation.tab-item');
    }
}
