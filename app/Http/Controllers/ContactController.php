<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {
  public function index() {
    return view('admin.contact.index');
  }

  public function store(Request $request) {
    $request->validate([
      'location' => 'required',
      'email' => 'required',
      'phone' => 'required',
    ]);

    $contact = new Contact();

    $contact->location = $request->location;
    $contact->email = $request->email;
    $contact->phone = $request->phone;

    $contact->save();

    return Redirect()
      ->back()
      ->with('success', 'Added a contact');
  }
}
