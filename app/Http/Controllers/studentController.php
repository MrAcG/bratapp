<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $users = \DB::table('users')->where('admin', 'NO')->get();
        return view('student')->with('users',$users);
    }
}
