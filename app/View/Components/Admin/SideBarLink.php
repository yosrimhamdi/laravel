<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;
use Request;

class SideBarLink extends Component {
  public $url;
  public $name;

  public function __construct($url, $name) {
    $this->url = $url;
    $this->name = $name;
  }

  public function render() {
    return view('components.admin.side-bar-link');
  }

  public function active() {
    if (str_contains($this->url, Request::path())) {
      return 'active';
    }
  }
}
