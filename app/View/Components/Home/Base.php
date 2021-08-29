<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Base extends Component {
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public $slides;
  public function __construct($slides) {
    $this->slides = $slides; //
  }
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.home.base');
  }
}
