<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class CasefileController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('casefile.index', compact('patients'));
    }

    public function create()
    {
        return view('casefile.create');
    }

    public function edit()
    {
        dd('show case file edit form here');
    }

    public function update()
    {
        dd('supdate casefile form here');
    }

    public function store()
    {
        dd('store case file here');
    }
}
