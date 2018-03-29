<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personalityController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index($email)
    {
        $holland = \DB::table('holland_personalities')->where('email',$email)->orderBy('created_at', 'desc')->get();
        $big5 = \DB::table('big_personalities')->where('email',$email)->orderBy('created_at', 'desc')->get();
        return view('personality',compact('holland','big5'));
    }
}
