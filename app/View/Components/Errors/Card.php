<?php

namespace App\View\Components\Errors;

use Illuminate\View\Component;

class Card extends Component
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
    public $code_class;
    
    /**
     * The import route.
     *
     * @var string
     */
    public $title_class;

    /**
     * The template route.
     *
     * @var string
     */
    public $message_class;

    /**
     * The template route.
     *
     * @var string
     */
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon = '', $class = '', $code_class = '', $title_class = '', $message_class = '')
    {
        $this->icon = $icon;
        $this->class = $class;
        $this->code_class = $code_class;
        $this->title_class = $title_class;
        $this->message_class = $message_class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.errors.card');
    }
}
