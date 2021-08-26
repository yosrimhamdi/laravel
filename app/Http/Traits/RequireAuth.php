<?php

namespace App\Http\Traits;

trait RequireAuth {
  public function __construct() {
    $this->middleware('auth');
  }
}
