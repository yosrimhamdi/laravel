<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImage;
use App\Models\Slider;
use Illuminate\Http\Request as R;
use Request;

class SliderController extends Controller {
  use UploadImage;

  public function index(R $request) {
    switch (Request::method()) {
      case 'GET':
        return $this->showAdminSlider();

      case 'POST':
        return $this->addNewSlider($request);
    }
  }

  public function showAdminSlider() {
    return view('admin.sliders.index');
  }

  public function addNewSlider(R $request) {
    $request->validate([
      'title'       => 'required',
      'description' => 'required',
      'image'       => 'required|mimes:jpg,jpeg,png',
    ]);

    $imageFullPath = $this->saveImage('images/sliders/', $request
        ->file('image'), ['width' => 1920, 'height' => 1080]);

    Slider::insert([
      'title'       => $request->title,
      'description' => $request->description,
      'image'       => $imageFullPath,
    ]);

    return Redirect()->back()->with('success', 'Added a new slider image');
  }
}
