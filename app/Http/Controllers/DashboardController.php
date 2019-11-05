<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Relatedfile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $patientCount = Patient::count();
        $d = date('m-d');
        $celebrantCount = \App\Patient::where('dateofbirth', 'like', "%/${d}")->count();
        $relatedfilesCount = Relatedfile::count();
        //check for users whose birthday are today and pass the number count and details to this view
        return view('dashboard', compact('celebrantCount', 'patientCount', 'relatedfilesCount'));
    }
}
