<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class UserImage extends Component {

  public $class;

  public function __construct($class) {
    $this->class = $class;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.admin.user-image');
  }
}
