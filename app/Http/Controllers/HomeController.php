<?php

namespace App\Http\Controllers;

use App\Models\{About, Brand, Slider, Image, Contact, Message};
use Illuminate\Http\Request;

class HomeController extends Controller {
  public function index() {
    $brands = Brand::all();
    $slides = Slider::all();
    $about = About::first();
    $images = Image::all();

    return view('index', compact(['brands', 'slides', 'about', 'images']));
  }

  public function getPortfolioPage() {
    $images = Image::all();

    return view('pages.portfolio', compact('images'));
  }

  public function getContactPage() {
    $contacts = Contact::all();

    return view('pages.contact', compact('contacts'));
  }

  public function storeNewMessage(Request $request) {
    $request->validate([
      'user-name' => 'required',
      'email' => 'required',
      'subject' => 'required',
      'message' => 'required',
    ]);

    $message = new Message();

    $message->user_name = $request->{'user-name'};
    $message->email = $request->email;
    $message->subject = $request->subject;
    $message->message = $request->message;
    $message->save();

    return response(['message' => $message], 201);
  }
}
