<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{

    public function getListOfFibonacci(Request $request)
    {
        return view('fibonacci');
    }
    
}