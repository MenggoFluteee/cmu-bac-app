<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EndUserController extends Controller
{
    //

    public function userDashboard()
    {
        return view('end_user.dashboard');
    }
}
