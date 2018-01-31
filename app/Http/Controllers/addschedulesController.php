<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;

class addschedulesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('addschedule');
    }
    //
    public function add(Request $request)
    {
    	$this->validate($request,[
    		'title'=>'required',
    		'description'=>'required',
    		'startdate'=>'required',
    		'enddate'=>'required',
    		'progcomp'=>'required',
    	]);
    	// return "success";
    	// echo "<pre>";
    	// echo $request;
    	// echo "</pre>";

    	$schedules = new Schedule;
    	$schedules->title = $request->input('title');
    	$schedules->description = $request->input('description');
    	$schedules->startdate = $request->input('startdate');
    	$schedules->enddate = $request->input('enddate');
    	$schedules->progcomp = $request->input('progcomp');
    	// echo "<pre>";
    	// echo $schedules;
    	// echo "</pre>";
    	$schedules->save();
    	return redirect("/manschedule")->with('info','Schedule Saved Successfully');
    }

    public function update($id)
    {
    	// return $id;
    	$schedules = Schedule::find($id);
    	// echo "<pre>";
    	// print_r($schedules);
    	// echo "</pre>";
    	// exit();
    	return view('updatesched',['schedules'=>$schedules]);
    }
    public function edit(Request $request,$id)
    {	
    	$this->validate($request,[
    		'title'=>'required',
    		'description'=>'required',
    		'startdate'=>'required',
    		'enddate'=>'required',
    		'progcomp'=>'required',
    	]);
    	$data = array(
    		'title' => $request->input('title'),
	    	'description' => $request->input('description'),
	    	'startdate' => $request->input('startdate'),
	    	'enddate' => $request->input('enddate'),
	    	'progcomp' => $request->input('progcomp')
    	);
    	Schedule::where('id',$id)->update($data);
    	return redirect("/manschedule")->with('info','Schedule Updated Successfully');
    }

    public function read($id)
    {
    	$schedules = Schedule::find($id);    	
    	return view('readsched',['schedules'=>$schedules]);
    }
    public function delete($id)
    {
    	Schedule::where('id',$id)->delete();
    	return redirect("/manschedule")->with('info','Schedule Deleted Successfully');
    }
}