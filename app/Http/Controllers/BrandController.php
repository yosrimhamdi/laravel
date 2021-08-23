<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
  public function index() {
    $brands = Brand::latest()->get();

    return view('admin.brand.index', compact('brands'));
  }
}
