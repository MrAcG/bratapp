<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class readfeedbackController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index($id)
    {
        $feedback = \DB::table('feedback')->where('id', $id)->where('email',\Auth::user()->email)->orderBy('created_at','desc')->get();
        return view('readfeedback', compact('feedback') );
    }
}
