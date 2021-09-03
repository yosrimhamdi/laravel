<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brand;
use App\Models\Slider;

class HomeController extends Controller {
  public function index() {
    $brands = Brand::all();
    $slides = Slider::all();
    $about = About::first()->get();

    return view('index', compact(['brands', 'slides', 'about']));
  }
}
