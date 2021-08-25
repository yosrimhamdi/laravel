<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller {
  public function index() {
    $images = Image::all();

    return view('admin.images.index', compact('images'));
  }

  public function uploadImages(Request $request) {
    echo 'will upload';
  }
}
