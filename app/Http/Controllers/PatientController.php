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

    public function update(Patient $patient)
    {
        // dd(request()->all());
        // $patient->update([
        //     "fullname" => request("fullname"),
        //     "parentname" => request("parentname"),
        //     "address" => request("address"),
        //     "occupation" => request("occupation"),
        //     "phonenumber" => request("phonenumber"),
        //     "alternativephonenumber" => request("alternativephonenumber"),
        //     "nextofkin" => request("nextofkin"),
        //     "dateofbirth" => request("dateofbirth"),
        //     "cliniccardnumber" => request("cliniccardnumber"),
        //   ]);
        $patient->updateDetails(request()->all());
        return response()->json([
            'status' => true
        ]);
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response()->json([], 204);
    }
}
