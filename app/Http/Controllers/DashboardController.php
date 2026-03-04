<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function settings()      
        { return view('settings'); }

    public function notifications()
        { return view ('notifications'); }

    public function privacySecurity()
        { return view ('privacy&security'); }

    function about()
        { return view ('about'); }

    public function help()
        { return view ('help'); }
}