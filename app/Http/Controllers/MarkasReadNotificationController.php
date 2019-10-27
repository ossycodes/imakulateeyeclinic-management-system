<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkasReadNotificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->route('dashbaord')->with('success', 'Notifications marked as read');
    }
}
