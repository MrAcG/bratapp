<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;

class manschedulesController extends Controller
{
    public function home()
    {
    	
    	$currentDate = date('Y-m-d');
		$schedules = Schedule::where('enddate', '>=', $currentDate)->where('email',\Auth::user()->email)->get();		
    	
    	
    	return view('manschedule',['schedules'=>$schedules]);

    }
}
