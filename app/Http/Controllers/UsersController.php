<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile($id, $name) {
        return view('user.profile', compact('id','name'));
    }
}
