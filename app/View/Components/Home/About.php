<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class About extends Component {
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public $about;
  public function __construct($about) {
    $this->about = $about;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.home.about');
  }
}
