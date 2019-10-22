<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patients.index');
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Patient $patient)
    {
        $patient->register(request()->all());
        return response()->json([
            'status' => true
        ], 200);
    }

    // public function test()
    // {
    //     return request()->all();
    //     // if (request()->isXmlHttpRequest()) {
    //     return response()->json([
    //         'msg' => 'test'
    //     ]);
    //     // }
    // }
}
