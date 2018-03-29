<?php

namespace App\Http\Controllers;
use App\Schedule;
use Illuminate\Http\Request;

class progbarController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
       
       	$currentDate = date('Y-m-d');
		$schedules = Schedule::where('enddate', '>=', $currentDate)->where('email',\Auth::user()->email)->get();	
    	
    	
    	return view('progbar',['schedules'=>$schedules]);

    }
}
