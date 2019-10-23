<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(Patient $patient)
    {
        $patients = $patient->registered();
        return view('patients.index', compact('patients'));
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

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Patient $patient, Request $request)
    {
        $patient->updateDetails(request()->all());
        return redirect('/patients')->with('success', 'Patient Details Updated.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect('/patients')->with('success', 'Patient Deleted');
    }
}
