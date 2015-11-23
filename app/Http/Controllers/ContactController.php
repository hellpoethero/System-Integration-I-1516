<?php

namespace THHT\Http\Controllers;

use Illuminate\Http\Request;

use THHT\Http\Requests;
use THHT\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function index() {
        return view("contact");
    }

    public function contactlist() {
        return view("contactlist");
    }
}
