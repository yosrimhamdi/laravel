<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Request;

class Header extends Component {
  public function __construct() {
  }

  public function active($uri) {
    if (Request::is($uri)) {
      return 'active';
    }

    return '';
  }

  public function render() {
    return view('components.home.header');
  }
}
