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
    public function index($email)
    {        
        $changetests = \DB::table('changetests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $codetests = \DB::table('codetests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $commstests = \DB::table('commstests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $leadertests = \DB::table('leadertests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $logictests = \DB::table('logictests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $quantitests = \DB::table('quantitests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $stresstests = \DB::table('stresstests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $technicaltests = \DB::table('technicaltests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $timetests = \DB::table('timetests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $verbaltests = \DB::table('verbaltests')->where('email',$email)->orderBy('created_at', 'desc')->get();
        return view('testscore',compact('changetests','codetests','commstests','leadertests','logictests','quantitests','stresstests','technicaltests','timetests','verbaltests'));
    }
}
