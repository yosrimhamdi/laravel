<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Brands extends Component {
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public $brands;
  public function __construct($brands) {
    $this->brands = $brands;
    //
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.home.brands');
  }
}
