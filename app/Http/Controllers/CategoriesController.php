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

    $trashedCategories = Category::onlyTrashed()->get();
    
    return view('categories.index', compact('categories', 'trashedCategories'));
  }

  public function new(Request $request) {
    $this->requireName($request);
    
    $category = new Category;    
    $category->name = $request->name;
    $category->user_id = Auth::user()->id;
    $category->save();

    return $this->goHome('A new category inserted successfully');
  }

  public function delete($id) {
    Category::find($id)->delete();

    return $this->goHome('the category deleted successfully');
  }

  public function showEditPage($id) {
    $category = Category::find($id);

    return view('categories.edit', ['category' => $category]);
  }

  public function performActualEdit(Request $request, $id) {
    $this->requireName($request);

    Category::find($id)->update(['name' => $request->name]);

    return $this->goHome('updated!');
  }

  private function requireName(Request $request) {
    $validated = $request->validate(
      ['name' => 'required' ], 
      ['name.required' => 'Yo dude the name is required Man!']
    );
  }
  
  private function goHome($message) {
    return Redirect()->to('/categories')->with('success', $message);
  }
}
