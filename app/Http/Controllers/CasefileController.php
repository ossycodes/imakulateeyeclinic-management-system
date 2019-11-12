<?php

namespace App\Http\Controllers;

use App\Casefile;
use App\Patient;
use Illuminate\Http\Request;

class CasefileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $patients = Patient::all();
        return view('casefile.index', compact('patients'));
    }

    public function create(Patient $patient)
    {
        return view('casefile.create', compact('patient'));
    }

    public function edit(Casefile $casefile, Patient $patient)
    {
        return view('casefile.edit', compact('casefile', 'patient'));
    }

    public function show(Casefile $casefile, Patient $patient)
    {
        return view('casefile.show', compact('casefile', 'patient'));
    }

    public function update(Casefile $casefile, Patient $patient)
    {
        $casefile->update(request()->all());
        return redirect()->route('casefile')->with('success', 'Casefile updated');
    }

    public function store()
    {
        Casefile::create(request()->all());
        return redirect()->route('casefile')->with('success', 'Casefile created');
    }
}
