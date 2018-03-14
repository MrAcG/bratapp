<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class technicaltestController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('technicaltest');
    }
}
