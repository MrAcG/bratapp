<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subject;
use App\holland_personality;



class subjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     $email = \Auth::user()->email;
     $personality1 = \DB::table('holland_personalities')
     ->where('email',$email)
     ->pluck('personality1');

      $personality2 = \DB::table('holland_personalities')
     ->where('email',$email)
     ->pluck('personality2');

     $jobs = \DB::table('jobs')
     ->where('personality1',$personality1)
     ->where('personality2',$personality2)
     ->orWhere('personality3',$personality2)
     ->pluck('job');
    

    
       return view('subject')->with('jobs', $jobs);
    }
        

    /**
     * Show the form for creating a new resurce.     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
