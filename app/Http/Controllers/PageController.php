<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboard() {
        return view('page/dashboard');
    }

    public function health4all() {
        return view('page/health4all');
    }

    public function chikitsa() {
        return view('page/chikitsa');
    }
}
