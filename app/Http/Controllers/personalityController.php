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
    public function index()
    {
        $holland = \DB::table('holland_personalities')->get()->sortBy('email');
        $big5 = \DB::table('big_personalities')->get()->sortBy('email');
        return view('personality',compact('holland','big5'));
    }
}
