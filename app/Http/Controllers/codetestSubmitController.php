<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\codetest;

class codetestSubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $code_test = new codetest;
            $op2=$request->op2;
            $op3=$request->op3;
            $op4=$request->op4;
            $op5=$request->op5;
            $op7=$request->op7;
            $op8=$request->op8;
            $op9=$request->op9;
            $op10=$request->op10;
            $op11=$request->op11;
            $op12=$request->op12;
            $op14=$request->op14;
            $op15=$request->op15;
            $op16=$request->op16;
            $op17=$request->op17;
            $op18=$request->op18;
        
            $result=$op2+$op3+$op4+$op5+$op7+$op9+$op10+$op11+$op12+$op14+$op15+$op16+$op17+$op18;
            $code_test->email= \Auth::user()->email;
            $code_test->score= $result;

            $code_test->save();
            return view('coderesult',['result'=>[$result]]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
