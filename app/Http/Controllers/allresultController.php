<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class allresultController extends Controller
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
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
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
        $database=$request->db;
         $score = \DB::table($database)
        ->orderBy('created_at', 'desc')
        ->take(5)        
        ->where('email',\Auth::user()->email)
        ->pluck('score');
        
         $date = \DB::table($database)
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->where('email',\Auth::user()->email)
        ->pluck('created_at');
        // echo($score);
        $created = array();
        for($i=0;$i<count($date);$i++)
        {
            $dt = new DateTime($date[$i]);
            $date_final = $dt->format('m/d/Y');
            $time = $dt->format('H:i:s');
            // echo $date_final, ' | ', $time,'<br>';
            array_push($created,$date_final);
        }        
        
        return view('allresult', compact('score','created'));
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
