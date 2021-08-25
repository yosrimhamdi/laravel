<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Image as I;

class ImageController extends Controller {
  public function index() {
    $images = Image::all();

    return view('admin.images.index', compact('images'));
  }

  public function uploadImages(Request $request) {
    $request->validate(
      [
        'images' => 'required|mimes:jpg,jpeg,png',
      ],
      [
        'images.required' => 'Please select at least one image',
        'images.mimes' => 'file type must be either jpg, jpeg or png',
      ]
    );

    echo 'will upload';
  }
}
