<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\timetest;

class allresultController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        
        $score = \DB::table('timetests')->get(['score']);
        
        return view('allresult')->with('score',$score);

    }
}
