<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function settings()      
        { return view('settings'); }

    public function notifications()
        { return view ('notifications'); }
}