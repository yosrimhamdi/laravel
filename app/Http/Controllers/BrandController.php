<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Traits\UploadImage;
use App\Http\Traits\RequireAuth;
use File;

class BrandController extends Controller {
  use UploadImage;
  use RequireAuth;

  public function index() {
    $brands = Brand::latest()->paginate(3);

    return view('admin.brands.index', compact('brands'));
  }

  public function newBrand(Request $request) {
    $request->validate([
      'name' => 'required',
      'image' => 'required|mimes:jpg,png,jpeg',
    ]);

    $imagePath = $this->saveImage('images/brands/', $request->file('image'));

    $brand = new Brand();
    $brand->name = $request->name;
    $brand->image = $imagePath;
    $brand->save();

    return $this->home('success', "Brand $brand->name add successfully");
  }

  public function showUpdateBrandPage($id) {
    $brand = Brand::find($id);

    return view('admin.brands.edit', compact('brand', 'id'));
  }

  public function updateBrand(Request $request, $id) {
    $request->validate(['name' => 'required']);

    $brand = Brand::find($id);
    $image = $request->file('image');
    $updates = [];

    if ($image) {
      File::delete($brand->image);

      $updates['image'] = $this->saveImage('images/brands/', $image);
    } else {
      $updates['name'] = $request->name;
    }

    $brand->update($updates);

    return $this->home('brand updated successfully');
  }

  public function deleteBrand($id) {
    $brand = Brand::find($id);

    File::delete($brand->image);

    $brand->delete();

    return $this->home('brand deleted successfully');
  }

  private function home($message = null) {
    return Redirect()
      ->to('/brands')
      ->with('success', $message);
  }
}
