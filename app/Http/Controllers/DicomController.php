<?php

namespace App\Http\Controllers;

use App\Dicom;
use App\Patient;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DicomController extends Controller
{
    public function index()
    {
        $data = Dicom::all();
        return view('dicom/index')->with('data', $data);
    }

    public function patient_dicom($id)
    {
        $data = DB::table('dicom')->select()->where('patient_id','=', $id)->get();

        return view('dicom/patient_dicom')->with('data', $data);
    }

    public function show($id)
    {
        $data = DB::table('dicom')->select()->where('id', $id, '=')->get();
        return view('dicom/show')->with('data', $data[0]);
    }

    public function test() {
        $data = DB::table('dicom')->select()->where('id', 1, '=')->get();
        return view('dicom/test')->with('data', $data[0]);
    }

    public function data() {
        $data = Storage::disk('local')->get('0000');
        return $data;
    }
}
