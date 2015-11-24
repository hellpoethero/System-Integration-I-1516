<?php

namespace THHT\Http\Controllers;

use Illuminate\Http\Request;

use THHT\Http\Requests;
use THHT\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function showProfile($id) {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
