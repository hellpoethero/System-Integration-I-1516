<?php

namespace App\Http\Controllers;

use App\Dicom;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DicomController extends Controller
{
    public function index()
    {
        $data = Dicom::all();
        return view('dicom/index')->with('data', $data);
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        return view('dicom/show');
    }
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
