<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff/staff');
    }

    public function create()
    {
        return view('staff/add_staff');
    }

    public function role() {
        return view('staff/role');
    }

    public function add_role() {
        return view('staff/add_role');
    }

    public function category() {
        return view('staff/category');
    }

    public function add_category() {
        return view('staff/add_category');
    }
}
