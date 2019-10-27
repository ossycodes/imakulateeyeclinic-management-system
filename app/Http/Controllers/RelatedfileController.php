<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Relatedfile;
use Illuminate\Http\Request;

class RelatedfileController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('relatedfiles.index', compact('patients'));
    }

    public function create(Patient $patient)
    {
        return view('relatedfiles.create', compact('patient'));
    }

    public function edit(Relatedfile $relatedfile)
    {
        return view('relatedfiles.edit', compact('relatedfile'));
    }

    public function show(Patient $patient)
    {
        $relatedfiles = Relatedfile::where('patient_id', $patient->id)->latest()->paginate(10);
        return view('relatedfiles.show', compact('relatedfiles'));
    }

    public function store(Patient $patient)
    {
        $patient->createRecord(request()->all());
        return redirect()->route('relatedfiles')->with('success', 'Record Created For Patient');
    }

    public function update(Relatedfile $relatedfile)
    {
        $relatedfile->updateRecord(request('record'));
        return redirect()->route('relatedfiles')->with('success', 'Record Updated');
    }

    public function destroy(Relatedfile $relatedfile)
    {
        $relatedfile->delete();
        return redirect()->route('relatedfiles')->with('success', 'Record Deleted');
    }
}
