<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manstudentController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index($studentemail)
    {
        return view('manstudent',compact('studentemail'));
    }
}
