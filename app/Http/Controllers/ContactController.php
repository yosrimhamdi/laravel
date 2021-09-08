<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {
  public function index() {
    $contacts = Contact::all();

    return view('admin.contact.index', compact('contacts'));
  }

  public function create() {
    return view('admin.contact.create');
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

    return $this->back('Added a contact');
  }

  public function destroy(Request $request, $id) {
    Contact::find($id)->delete();

    return $this->back('Contact Deleted');
  }

  private function back($message) {
    return Redirect()
      ->to('/admin/contact')
      ->with('success', $message);
  }
}
