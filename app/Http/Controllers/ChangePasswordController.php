<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        return view('changepassword');
    }

    public function update()
    {
        if (!Hash::check(request('oldPassword'), auth()->user()->password)) {
            return back()->with('failure', 'Old password is incorrect');
        }
        auth()->user()->updatePassword(request()->all());
        return back()->with('success', 'Password Updated');
    }
}
