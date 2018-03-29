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
        $changetests = \DB::table('changetests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        $codetests = \DB::table('codetests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        $commstests = \DB::table('commstests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        $leadertests = \DB::table('leadertests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        $logictests = \DB::table('logictests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        $quantitests = \DB::table('quantitests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        $stresstests = \DB::table('stresstests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        $technicaltests = \DB::table('technicaltests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        $timetests = \DB::table('timetests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        $verbaltests = \DB::table('verbaltests')->where('email',$email)->orderBy('created_at', 'desc')->take(5)->get();
        return view('testscore',compact('changetests','codetests','commstests','leadertests','logictests','quantitests','stresstests','technicaltests','timetests','verbaltests'));
    }
}
