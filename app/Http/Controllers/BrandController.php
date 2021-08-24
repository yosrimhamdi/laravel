<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\File; 


class BrandController extends Controller
{
  public function index() {
    $brands = Brand::latest()->paginate(3);

    return view('admin.brand.index', compact('brands'));
  }

  public function newBrand(Request $request) {
    $this->valid($request);

    $image = $request->file('image');
    $imagePath = $this->saveImage($image);

    $brand = new Brand;
    $brand->name = $request->name;
    $brand->image = $imagePath;
    $brand->save();

    return $this->goHome('success', "Brand $brand->name add successfully");
  }

  public function showUpdateBrandPage($id) {
    $brand = Brand::find($id);

    return view('admin.brand.edit', compact('brand', 'id'));
  }

  public function updateBrand(Request $request, $id) {
    $request->validate([ 'name' => 'required' ]);

    $brand = Brand::find($id);
    $image = $request->file('image');
    $updates = [];

    if ($image) {
      File::delete($brand->image);

      $updates['image'] = $this->saveImage($image);
    } else {
      $updates['name'] = $request->name;
    }
    
    $brand->update($updates);

    return $this->goHome('band updated successfully');
  }

  private function goHome($message = null) {
    return Redirect()->to('/brands')->with('success', $message);  
  }

  private function valid(Request $request) {
    $request->validate([
      'name' => 'required',
      'image' => 'required|mimes:jpg,png,jpeg'
    ]);
  }

  private function saveImage($image) {
    $fileName = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
    $path = 'images/brands/';
    $image->move($path, $fileName);

    return $path . $fileName;
  }
}
