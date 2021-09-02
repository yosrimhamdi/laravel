<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Base extends Component {
  public $tableTitle;
  public $formTitle;

  public function __construct($tableTitle = '', $formTitle = '') {
    $this->tableTitle = $tableTitle;
    $this->formTitle = $formTitle;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.admin.base');
  }
}
