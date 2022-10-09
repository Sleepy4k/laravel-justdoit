<?php
  
namespace App\Traits;

trait ViewChecker
{
    /**
     * Abort code number
     * 
     * @var int
     */
    protected $code = 404;

    /**
     * Check if blade templating is exists
     * 
     * @param $view
     * @var void
     */
    protected function checkView($view)
    {
        if (view()->exists($view)) {
            return true;
        } else {
            abort($this->code);
        }
    }
}