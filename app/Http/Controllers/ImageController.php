<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImage;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller {
  use UploadImage;

  public function index() {
    return view('admin.images.index');
  }

  public function store(Request $request) {
    $images = $request->file('images');

    foreach ($images as $image) {
      $fullImagePath = $this->saveImage(
        'images/portfolios/',
        $image,
        ['width' => 1004, 'height' => 800]
      );

      $img = new Image;
      $img->src = $fullImagePath;
      $img->save();
    }

    return Redirect()->back();
  }
}
