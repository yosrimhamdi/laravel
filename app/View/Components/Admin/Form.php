<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Form extends Component {
  public $action;
  public $brand;
  public $title;
  public $method;

  public function __construct($action, $title, $method, $brand = null) {
    $this->action = $action;
    $this->brand = $brand;
    $this->title = $title;
    $this->method = $method;
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
