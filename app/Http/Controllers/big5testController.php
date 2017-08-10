<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class big5testController extends Controller
{
    
	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('test.big5test');
    }
}
