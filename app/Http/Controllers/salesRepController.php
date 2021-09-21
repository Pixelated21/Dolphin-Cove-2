<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salesRepController extends Controller
{
    public function salesRepDashboard(){
        return view('salesrep/dashboard');
    }
}
