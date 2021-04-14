<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('customer'))
        {
            return view('customerdashboard');
        }
        elseif(Auth::user()->hasRole('stylist'))
        {
            return view('stylistdashboard');
        }
        elseif(Auth::user()->hasRole('administrator'))
        {
            return view('admindashboard');
        }
        elseif(Auth::user()->hasRole('businessowner'))
        {
            return view('dashboard');
        }
    }
}
