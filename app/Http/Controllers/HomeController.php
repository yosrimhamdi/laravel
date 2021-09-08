<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Image;

class HomeController extends Controller {
  public function index() {
    $brands = Brand::all();
    $slides = Slider::all();
    $about = About::first();
    $images = Image::all();

    return view('index', compact(['brands', 'slides', 'about', 'images']));
  }

  public function getPortfolioPage() {
    $images = Image::all();

    return view('portfolio', compact('images'));
  }
}
