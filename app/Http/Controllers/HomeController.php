<?php

namespace App\Http\Controllers;

use App\Models\{About, Brand, Slider, Image, Contact};

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

    return view('pages.portfolio', compact('images'));
  }

  public function getContactPage() {
    $contacts = Contact::all();

    return view('pages.contact', compact('contacts'));
  }
}
