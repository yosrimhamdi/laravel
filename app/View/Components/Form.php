<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $brand;
    
    public function __construct($action, $brand = null)
    {
        $this->action = $action;
        $this->brand = $brand;
    }

    public function render()
    {
        return view('components.form');
    }
}
