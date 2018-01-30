<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class changetestController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('changetest');
    }
}
