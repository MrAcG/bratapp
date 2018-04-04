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
        $score = \DB::table('timetests')
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->where('email',\Auth::user()->email)
        ->pluck('score');
        return view('allresult', compact('score'));

    }
}
