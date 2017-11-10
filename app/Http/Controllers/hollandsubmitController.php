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
     $res3=$res[2];

     if($R==$res1)       {$holland_personality->personality1 = 'R';}
     elseif ($I==$res1) {$holland_personality->personality1 = 'I';}
     elseif ($A==$res1) {$holland_personality->personality1 = 'A';}
     elseif ($S==$res1) {$holland_personality->personality1 = 'S';}
     elseif ($E==$res1) {$holland_personality->personality1 = 'E';}
     elseif ($C==$res1) {$holland_personality->personality1 = 'C';}

     if ($R==$res2)  {$holland_personality->personality2 = 'R';}
     elseif ($I==$res2) {$holland_personality->personality2 = 'I';}
     elseif ($A==$res2) {$holland_personality->personality2 = 'A';}
     elseif ($S==$res2) {$holland_personality->personality2 = 'S';}
     elseif ($E==$res2) {$holland_personality->personality2 = 'E';}
     elseif ($C==$res2) {$holland_personality->personality2 = 'C';}

     if ($R==$res3)  {$holland_personality->personality3 = 'R';}
     elseif ($I==$res3) {$holland_personality->personality3 = 'I';}
     elseif ($A==$res3) {$holland_personality->personality3 = 'A';}
     elseif ($S==$res3) {$holland_personality->personality3 = 'S';}
     elseif ($E==$res3) {$holland_personality->personality3 = 'E';}
     elseif ($C==$res3) {$holland_personality->personality3 = 'C';}
     
    $holland_personality->save();

    $email = \Auth::user()->email;
     $personality1 = \DB::table('holland_personalities')
                    ->where('email',$email)
                    ->value('personality1');

     $personality2 = \DB::table('holland_personalities')
                    ->where('email',$email)
                    ->value('personality2');
     $personality3 = \DB::table('holland_personalities')
                    ->where('email',$email)
                    ->value('personality3');               
               

     if ($personality1=='R') {
         $personality1='Realistic';
     }
     elseif ($personality1=='I') {
         $personality1='Investigative';
     }
      elseif ($personality1=='A') {
         $personality1='Artistic';
     }
      elseif ($personality1=='S') {
         $personality1='Social';
     }
      elseif ($personality1=='E') {
         $personality1='Enterprising';
     } elseif ($personality1=='C') {
         $personality1='Conventional';
     }

     if ($personality2=='R') {
         $personality2='Realistic';
     }
     elseif ($personality2=='I') {
         $personality2='Investigative';
     }
      elseif ($personality2=='A') {
         $personality2='Artistic';
     }
      elseif ($personality2=='S') {
         $personality2='Social';
     }
      elseif ($personality2=='E') {
         $personality2='Enterprising';
     } elseif ($personality2=='C') {
         $personality2='Conventional';
     }

     if ($personality3=='R') {
         $personality3='Realistic';
     }
     elseif ($personality3=='I') {
         $personality3='Investigative';
     }
      elseif ($personality3=='A') {
         $personality3='Artistic';
     }
      elseif ($personality3=='S') {
         $personality3='Social';
     }
      elseif ($personality3=='E') {
         $personality3='Enterprising';
     } elseif ($personality3=='C') {
         $personality3='Conventional';
     }

       return view('test/hollandresult',['personalities'=>[$personality1,$personality2,$personality3]]);
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
