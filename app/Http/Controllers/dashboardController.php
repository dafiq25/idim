<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        $side = 'dashboard';
        return view('dashboard', compact('side'));
    }
}
