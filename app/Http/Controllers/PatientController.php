<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient/index');
    }

    public function create()
    {
        return view('patient/add');
    }

    public function inquiry() {
        return view('patient/inquiry');
    }

    public function add_inquiry() {
        return view('patient/add_inquiry');
    }

}
