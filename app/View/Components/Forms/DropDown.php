<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class DropDown extends Component
{

    public function __construct($dropDownTitle, $items)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.drop-down');
    }
}
