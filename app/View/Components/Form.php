<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $brand;
    public $btnTitle;
    
    public function __construct($action, $brand = null, $btnTitle = 'Submit')
    {
        $this->action = $action;
        $this->brand = $brand;
        $this->btnTitle = $btnTitle;
    }

    public function render()
    {
        return view('components.form');
    }
}
