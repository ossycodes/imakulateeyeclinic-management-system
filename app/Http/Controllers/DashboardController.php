<?php

namespace App\Http\Controllers;

use App\Casefile;
use App\Patient;
use App\Relatedfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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
        $celebrantCount = \App\Patient::where('dateofbirthexceptyear', 'like', $d)->count();
        $relatedfilesCount = Relatedfile::count();
        $casefilesCount = Casefile::count();
        //check for users whose birthday are today and pass the number count and details to this view
        return view('dashboard', compact('celebrantCount', 'patientCount', 'relatedfilesCount', 'casefilesCount'));
    }
}
