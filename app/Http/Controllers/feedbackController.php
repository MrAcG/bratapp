<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Feedback;
 
class feedbackController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function feedback($email)
   {
       return view('feedback',compact('email'));
   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function feedbackPost(Request $request)
   {
    //    echo $request;
       $this->validate($request, [        
        // 'email' => 'required',
        'message' => 'required'
        ]);
 
       Feedback::create($request->all());
        
       $request->session()->flash('alert-success', 'Feedback was successfully submtted');
       return redirect('/students');
   }
}