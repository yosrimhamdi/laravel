<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index() {
        // $users = User::all();
        $users = DB::table('users')->get();

        return view('users', [ 'users' => $users ]);
    }
}
