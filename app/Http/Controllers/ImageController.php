<?php

namespace App\Http\Controllers;

use App\Http\Traits\RequireAuth;
use App\Http\Traits\UploadImage;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller {
  use UploadImage;
  use RequireAuth;

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
