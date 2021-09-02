<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImage;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller {
  use UploadImage;

  public function index() {
    $sliders = Slider::latest()->get();

    return view('admin.sliders.index', compact('sliders'));
  }

  public function store(Request $request) {
    $request->validate([
      'title' => 'required',
      'description' => 'required',
      'image' => 'required|mimes:jpg,jpeg,png',
    ]);

    $imageFullPath = $this->saveImage('images/sliders/', $request
        ->file('image'), ['width' => 1920, 'height' => 1080]);

    Slider::insert([
      'title' => $request->title,
      'description' => $request->description,
      'image' => $imageFullPath,
    ]);

    return $this->back('Added a new slider image');
  }

  public function destroy(Request $request, $id) {
    Slider::find($id)->delete();

    return $this->back('Slider deleted');
  }

  private function back($message) {
    return Redirect()->back()->with('success', $message);

  }
}
