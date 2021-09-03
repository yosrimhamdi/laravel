<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Portfolio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $images;
    public function __construct($images)
    {
        $this->images = $images;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
