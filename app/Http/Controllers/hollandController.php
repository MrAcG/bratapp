<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hollandController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('test.hollandtest');
    }

    }