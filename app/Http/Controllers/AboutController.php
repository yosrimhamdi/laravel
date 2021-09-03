<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller {

  public function index() {
    $about = About::latest()->limit(1)->get();

    return view('admin.about.index', compact('about'));
  }

  public function store(Request $request) {
    $request->validate([
      'title' => 'required',
      'short-description' => 'required',
      'long-description' => 'required',
    ]);

    About::truncate();

    $about = new About;
    $about->title = $request->title;
    $about->short_description = $request->{'short-description'};
    $about->long_description = $request->{'long-description'};
    $about->save();

    return Redirect()->back()->with('success', 'done.');
  }
}
