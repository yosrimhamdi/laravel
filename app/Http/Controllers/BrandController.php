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

  public function newBrand(Request $request) {
    $request->validate([
      'name' => 'required',
      'image' => 'required|mimes:jpg,png,jpeg'
    ]);

    $image = $request->file('image');
    $fileName = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
    $path = 'images/brands/';
    
    $image->move($path, $fileName);

    $brand = new Brand;
    $brand->name = $request->name;
    $brand->image = $path. $fileName;
    $brand->save();

    return Redirect()->to('/brands')->with('success', "Brand $brand->name add successfully");  
  }
}
