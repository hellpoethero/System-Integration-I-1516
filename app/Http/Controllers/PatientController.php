<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        $data = Patient::all();
        return view('patient/index')->with('data', $data);
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
