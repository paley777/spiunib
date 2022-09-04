<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
     //Homepage
     public function index()
    {
        return view('landing.index', [
            'active' => 'index',
        ]);
    }
}
