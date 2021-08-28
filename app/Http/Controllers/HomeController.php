<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class HomeController extends Controller {
  public function index() {
    $brands = Brand::all();

    return view('index', compact('brands'));
  }
}
