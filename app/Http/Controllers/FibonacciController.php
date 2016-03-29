<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{

    public function getListOfFibonacci(Request $request)
    {
        $lists = [];

        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'count' => 'required|min:1|max:100'
            ]);

            if ($validator->fails()) {
                return redirect('/')
                    ->withErrors($validator)
                    ->withInput();
            }

            $lists = $this->getFibonacciByCount($request->get('count'));
        }

        return view('fibonacci', compact('lists'));
    }

    public function getFibonacciByCount($count, $first = 0, $second = 1)
    {
        $fib = [$first, $second];
        for($i = 1; $i < $count-1; $i++)
        {
            $fib[] = $fib[$i] + $fib[$i-1];
        }
        return $fib;
    }
    
}