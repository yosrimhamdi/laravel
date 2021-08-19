<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  public function  all() {
    return view('categories');
  }

  public function new(Request $request) {
    $validated = $request->validate([
      'name' => 'required'
    ],
    [
     'name.required' => 'Yo dude the name is required Man!' 
    ]);
  }
}
