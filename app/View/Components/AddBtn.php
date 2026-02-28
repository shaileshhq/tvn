<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AddBtn extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $route = "";
    public $text = "";

    public function __construct($route, $text)
    {
        $this->route = $route;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.add-btn');
    }
}
