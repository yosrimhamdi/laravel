<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Traits\UploadImage;

class ImageController extends Controller {
  use UploadImage;

  public function index() {
    $images = Image::all();

    return view('admin.images.index', compact('images'));
  }

  public function uploadImages(Request $request) {
    $request->validate(
      ['images' => 'required'],
      ['images.required' => 'Please select at least one image']
    );

    $images = $request->file('images');

    foreach ($images as $img) {
      $src = $this->saveImage('images/pics/', $img);

      $image = new Image();
      $image->src = $src;
      $image->save();
    }

    return Redirect()->back();
  }
}
