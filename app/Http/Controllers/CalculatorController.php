<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(Request $request)
    {
    	$numbers = $request->input('numbers');
    	$result = 0;
    	$count_val = [];
	    foreach($array as $val){
	      $count_val[$val]++;
	    }
	    return redirect('/')->with('message', numbers ':' $count_val 'occurences');


    }
}
