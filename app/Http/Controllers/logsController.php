<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class logsController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
       
    	$currentDate = date('Y-m-d');
		$schedules = Schedule::where('enddate', '<', $currentDate)->get();		
    	return view('logs',['schedules'=>$schedules]);
    }
}
