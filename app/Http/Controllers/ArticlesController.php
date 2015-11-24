<?php

namespace THHT\Http\Controllers;

use Illuminate\Http\Request;

use THHT\Http\Requests;
use THHT\Http\Controllers\Controller;

use THHT\Articles;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Articles::all();

        //return $articles;
        return view("pages.articles")->with("articles", $articles);
    }
}
