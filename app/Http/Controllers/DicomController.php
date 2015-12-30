<?php

namespace App\Http\Controllers;

use App\Dicom;
use App\Patient;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DicomController extends Controller
{
    public function index()
    {
        return view('dicom/index');
    }

    public function patient_dicom($id)
    {
        $data = Dicom::all();
        return view('dicom/patient_dicom')->with('data', $data);
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
