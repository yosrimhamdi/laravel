<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Auth;

class CategoriesController extends Controller
{
  public function  all() {
    $categories = Category::latest()->paginate(5);
    
    return view('categories', [ 'categories' => $categories ]);
  }

  public function new(Request $request) {
    $validated = $request->validate(
      ['name' => 'required' ], 
      ['name.required' => 'Yo dude the name is required Man!']
    );

    $category = [
      'name' => $request->name,
      'user_id' => Auth::user()->id,
      'created_at' => new \DateTime()
    ];
    
    // Category::insert($category);

    DB::table('categories')->insert($category);

    return Redirect()->back()->with(
      'success',
      'A new category inserted successfully'
    );
  }
}
