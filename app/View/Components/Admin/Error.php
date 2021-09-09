<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Error extends Component {
  public $for;

  public function __construct($for) {
    $this->for = $for;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.admin.error');
  }
}
