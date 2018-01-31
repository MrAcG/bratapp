<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;

class manschedulesController extends Controller
{
    public function home()
    {
    	$schedules = Schedule::all();
    	return view('manschedule',['schedules'=>$schedules]);
    }
}
