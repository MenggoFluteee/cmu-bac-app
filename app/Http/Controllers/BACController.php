<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BACController extends Controller
{
    //

    public function bacDashboard()
    {
        return view('bac.dashboard');
    }
}
