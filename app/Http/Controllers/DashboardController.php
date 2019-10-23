<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $celebrantCount = \App\Patient::where('dateofbirth', date('Y-m-d'))->count();
        //check for users whose birthday are today and pass the number count and details to this view
        return view('dashboard', compact('celebrantCount'));
    }
}
