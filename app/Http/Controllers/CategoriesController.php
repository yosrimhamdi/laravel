<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;

class CategoriesController extends Controller
{
  public function  all() {
    $categories = Category::all();
    
    return view('categories', [ 'categories' => $categories ]);
  }

  public function new(Request $request) {
    $validated = $request->validate(
      ['name' => 'required' ], 
      ['name.required' => 'Yo dude the name is required Man!']
    );

    Category::insert([
      'name' => $request->name,
      'user_id' => Auth::user()->id,
      'created_at' => new \DateTime()
    ]);

    return Redirect()->back()->with(
      'success',
      'A new category inserted successfully'
    );
  }
}
