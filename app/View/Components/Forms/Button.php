<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Button extends Component
{
    // public $buttonName;

    public function __construct()
    {
        // $this->buttonName = $buttonName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.button');
    }
}
