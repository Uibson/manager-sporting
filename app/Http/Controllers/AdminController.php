<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminHome()
    {
        return view('adminHome');
    }

    public function createEvent()
    {
        return view('createEvent');
    }
}
