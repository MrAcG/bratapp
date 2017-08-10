<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\big_personality;

class big5submitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //

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
        $big_personality = new big_personality;
        $big_personality->email = \Auth::user()->email;
        $big_personality->user_id = \Auth::user()->id;
        $E1=$request->E1;
        $A1=$request->A1;
        $C1=$request->C1;
        $N1=$request->N1;
        $O1=$request->O1;

        $E2=$request->E2;
        $A2=$request->A2;
        $C2=$request->C2;
        $N2=$request->N2;
        $O2=$request->O2;

        $E3=$request->E3;
        $A3=$request->A3;
        $C3=$request->C3;
        $N3=$request->N3;
        $O3=$request->O3;

        $E4=$request->E4;
        $A4=$request->A4;
        $C4=$request->C4;
        $N4=$request->N4;
        $O4=$request->O4;

        $E5=$request->E5;
        $A5=$request->A5;
        $C5=$request->C5;
        $N5=$request->N5;
        $O5=$request->O5;

        $E6=$request->E6;
        $A6=$request->A6;
        $C6=$request->C6;
        $N6=$request->N6;
        $O6=$request->O6;

        $E7=$request->E7;
        $A7=$request->A7;
        $C7=$request->C7;
        $N7=$request->N7;
        $O7=$request->O7;

        $E8=$request->E8;
        $A8=$request->A8;
        $C8=$request->C8;
        $N8=$request->N8;
        $O8=$request->O8;

        $E9=$request->E9;
        $A9=$request->A9;
        $C9=$request->C9;
        $N9=$request->N9;
        $O9=$request->O9;

        $E10=$request->E10;
        $A10=$request->A10;
        $C10=$request->C10;
        $N10=$request->N10;
        $O10=$request->O10;

/**E = 20 + (1) ___ - (6) ___ + (11) ___ - (16) ___ + (21) ___ - (26) ___ + (31) ___ - (36) ___ + (41) ___ - (46) ___ = _____
   A = 14 - (2) ___ + (7) ___ - (12) ___ + (17) ___ - (22) ___ + (27) ___ - (32) ___ + (37) ___ + (42) ___ + (47) ___ = _____
   C = 14 + (3) ___ - (8) ___ + (13) ___ - (18) ___ + (23) ___ - (28) ___ + (33) ___ - (38) ___ + (43) ___ + (48) ___ = _____
   N = 38 - (4) ___ + (9) ___ - (14) ___ + (19) ___ - (24) ___ - (29) ___ - (34) ___ - (39) ___ - (44) ___ - (49) ___ = _____
   O = 8 + (5) ___ - (10) ___ + (15) ___ - (20) ___ + (25) ___ - (30) ___ + (35) ___ + (40) ___ + (45) ___ + (50) ___ = _____*/

        $E= 20+$E1-$E2+$E3-$E4+$E5-$E6+$E7-$E8+$E9-$E10;
        $A= 14-$A1+$A2-$A3+$A4-$A5+$A6-$A7+$A8+$A9+$A10;
        $C= 14+$C1-$C2+$C3-$C4+$C5-$C6+$C7-$C8+$C9+$C10;
        $N= 38-$N1+$N2-$N3+$N4-$N5-$N6-$N7-$N8-$N9-$N10;
        $O= 8+$O1-$O2+$O3-$O4+$O5-$O6+$O7+$O8+$O9+$O10;

        if ($E < 20) {
            $big_personality->personality1 = 'INTROVERT';
        }
        else{
            $big_personality->personality1 =  'EXTROVERT';
        }

        if ($A < 20) {
            $big_personality->personality2 =  'CHALLENGING';
        }
        else{
            $big_personality->personality2 =  'FRIENDLY';
        }

        if ($C < 20) {
           $big_personality->personality3 =  'UNORGANIZED';
        }
        else{
            $big_personality->personality3 =  'ORGANIZED';
        }

        if ($N < 20) {
            $big_personality->personality4 =  'SENSITIVE';
        }
        else{
            $big_personality->personality4 =  'CONFIDENT';
        }

        if ($O < 20) {
            $big_personality->personality5 =  'CAUTIOUS';
        }
        else{
            $big_personality->personality5 =  'CURIOUS';
        }

    $big_personality->save();
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
