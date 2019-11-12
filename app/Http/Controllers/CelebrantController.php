<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class CelebrantController extends Controller
{
    public function index()
    {
        $celebrants = Patient::where('dateofbirthexceptyear', date('m-d'))->get();
        return view('celebrants.index', compact('celebrants'));
    }
}
