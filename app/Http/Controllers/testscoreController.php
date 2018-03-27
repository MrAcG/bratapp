<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testscoreController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {        
        $changetests = \DB::table('changetests')->get()->sortBy('email');
        $codetests = \DB::table('codetests')->get()->sortBy('email');
        $commstests = \DB::table('commstests')->get()->sortBy('email');
        $leadertests = \DB::table('leadertests')->get()->sortBy('email');
        $logictests = \DB::table('logictests')->get()->sortBy('email');
        $quantitests = \DB::table('quantitests')->get()->sortBy('email');
        $stresstests = \DB::table('stresstests')->get()->sortBy('email');
        $technicaltests = \DB::table('technicaltests')->get()->sortBy('email');
        $timetests = \DB::table('timetests')->get()->sortBy('email');
        $verbaltests = \DB::table('verbaltests')->get()->sortBy('email');
        return view('testscore',compact('changetests','codetests','commstests','leadertests','logictests','quantitests','stresstests','technicaltests','timetests','verbaltests'));
    }
}
