<?php

namespace THHT\Http\Controllers;

use Illuminate\Http\Request;

use THHT\Http\Requests;
use THHT\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {
        $about = "Nguyen Minh Duc";
        $age = "21";
        return view("pages.about")->with([
            'name' => $about,
            'age' => $age
        ]);
    }

    public function contact() {
        return view("pages.contact");
    }
}
