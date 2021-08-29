<?php

namespace App\View\Components\Admin\Helpers;

use Illuminate\View\Component;

class Error extends Component {
  public $input;

  public function __construct($input) {
    $this->input = $input;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.admin.helpers.error');
  }
}
