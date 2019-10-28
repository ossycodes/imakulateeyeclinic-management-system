<?php

namespace App\Http\Controllers;

<form action="{{ route('relatedfile.destroy', ['relatedfile' => $file->id]) }}" method="POST">@csrf
@method('DELETE')
<button type="submit" class="btn btn-app bg-green">  <i class="fa fa-stop"></i> Delete </button>
{{-- <input type="submit" class="btn btn-danger btn-sm" value="Delete"/> --}}
</form>

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
        $celebrantCount = \App\Patient::where('dateofbirth', date('Y-m-d'))->count();
        $relatedfilesCount = Relatedfile::count();
        //check for users whose birthday are today and pass the number count and details to this view
        return view('dashboard', compact('celebrantCount', 'patientCount', 'relatedfilesCount'));
    }
}
