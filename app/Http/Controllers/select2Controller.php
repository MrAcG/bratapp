<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class select2Controller extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('select2');
    }
}
