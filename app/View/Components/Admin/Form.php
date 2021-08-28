<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Form extends Component {
  public $action;
  public $brand;
  public $btnTitle;

  public function __construct($action, $brand = null, $btnTitle = "Submit") {
    $this->action = $action;
    $this->brand = $brand;
    $this->btnTitle = $btnTitle;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.admin.form');
  }
}
