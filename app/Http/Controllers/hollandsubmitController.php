<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\holland_personality;

class hollandsubmitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     $holland_personality = new holland_personality;
     $R1=$request->R1;
     $I1=$request->I1;
     $A1=$request->A1;
     $S1=$request->S1;
     $E1=$request->E1;
     $C1=$request->C1;
     $R2=$request->R2;
     $I2=$request->I2;
     $A2=$request->A2;
     $S2=$request->S2;
     $E2=$request->E2;
     $C2=$request->C2;
     $R3=$request->R3;
     $I3=$request->I3;
     $A3=$request->A3;
     $S3=$request->S3;
     $E3=$request->E3;
     $C3=$request->C3;
     $R4=$request->R4;
     $I4=$request->I4;
     $A4=$request->A4;
     $S4=$request->S4;
     $E4=$request->E4;
     $C4=$request->C4;
     $R5=$request->R5;
     $I5=$request->I5;
     $A5=$request->A5;
     $S5=$request->S5;
     $E5=$request->E5;
     $C5=$request->C5;
     $R6=$request->R6;
     $I6=$request->I6;
     $A6=$request->A6;
     $S6=$request->S6;
     $E6=$request->E6;
     $C6=$request->C6;
     $R7=$request->R7;
     $I7=$request->I7;
     $A7=$request->A7;
     $S7=$request->S7;
     $E7=$request->E7;
     $C7=$request->C7;
     $R8=$request->R8;
     $I8=$request->I8;
     $A8=$request->A8;
     $S8=$request->S8;
     $E8=$request->E8;
     $C8=$request->C8;

     $R=$R1+$R2+$R3+$R4+$R5+$R6+$R7+$R8;
     $I=$I1+$I2+$I3+$I4+$I5+$I6+$I7+$I8;
     $A=$A1+$A2+$A3+$A4+$A5+$A6+$A7+$A8;
     $S=$S1+$S2+$S3+$S4+$S5+$S6+$S7+$S8;
     $E=$E1+$E2+$E3+$E4+$E5+$E6+$E7+$E8;
     $C=$C1+$C2+$C3+$C4+$C5+$C6+$C7+$C8;

     $res=array($R,$I,$A,$S,$E,$C);
     $holland_personality->email = \Auth::user()->email;
     $holland_personality->user_id = \Auth::user()->id;
     rsort($res);
     $res1=$res[0];
     $res2=$res[1];

     if($R==$res1)       {$holland_personality->personality1 = 'REALISTIC';}
     elseif ($I==$res1) {$holland_personality->personality1 = 'INVESTIGATIVE';}
     elseif ($A==$res1) {$holland_personality->personality1 = 'ARTISTIC';}
     elseif ($S==$res1) {$holland_personality->personality1 = 'SOCIAL';}
     elseif ($E==$res1) {$holland_personality->personality1 = 'ENTERPRISING';}
     elseif ($C==$res1) {$holland_personality->personality1 = 'CONVENTIONAL';}

     if ($R==$res2)  {$holland_personality->personality2 = 'REALISTIC';}
     elseif ($I==$res2) {$holland_personality->personality2 = 'INVESTIGATIVE';}
     elseif ($A==$res2) {$holland_personality->personality2 = 'ARTISTIC';}
     elseif ($S==$res2) {$holland_personality->personality2 = 'SOCIAL';}
     elseif ($E==$res2) {$holland_personality->personality2 = 'ENTERPRISING';}
     elseif ($C==$res2) {$holland_personality->personality2 = 'CONVENTIONAL';}
     
    $holland_personality->save();
    return redirect('home');
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
