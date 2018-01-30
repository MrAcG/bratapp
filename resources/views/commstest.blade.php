@extends('layouts.app')

@section('content')
<link href="{{ asset('css/test.css') }}" rel="stylesheet">


     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Communication Management Test</h2>
        </div>
        <div class="panel-body"> 
    
    <form method="POST" action="/commstestSubmit">
    {{ csrf_field() }}
		<table>
  <caption>Test Questions</caption>
  <thead>
    <tr>
      <th scope="col">Question No.</th>
      <th scope="col">Question</th>
      <th scope="col">Almost Never</th>
      <th scope="col">Very Rarely</th>
      <th scope="col">Sometimes</th>
      <th scope="col">Mostly</th>
      <th scope="col">Always</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Question No.">1</td>
      <td data-label="Question">I try to anticipate and predict possible causes of confusion, and I deal with them up front.</td>
      <td data-label="Almost Never"><input type="radio" name="op1" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op1" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op1" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op1" value="4"></td>
      <td data-label="Always"><input type="radio" name="op1" value="5"></td>
    
    </tr>
    <tr>
      <td scope="row" data-label="Account">2</td>
      <td data-label="Question">When I write a memo, email, or other document, I give all of the background information and detail I can to make sure that my message is understood.</td>
      <td data-label="Almost Never"><input type="radio" name="op2" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op2" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op2" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op2" value="4"></td>
      <td data-label="Always"><input type="radio" name="op2" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">3</td>
      <td data-label="Question">If I don't understand something, I tend to keep this to myself and figure it out later.</td>
      <td data-label="Almost Never"><input type="radio" name="op3" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op3" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op3" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op3" value="4"></td>
      <td data-label="Always"><input type="radio" name="op3" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">4</td>
      <td data-label="Question">  
I'm surprised to find that people haven't understood what I've said.</td>
      <td data-label="Almost Never"><input type="radio" name="op4" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op4" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op4" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op4" value="4"></td>
      <td data-label="Always"><input type="radio" name="op4" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">5</td>
      <td data-label="Question">I can tend to say what I think, without worrying about how the other person perceives it. I assume that we'll be able to work it out later.</td>
      <td data-label="Almost Never"><input type="radio" name="op5" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op5" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op5" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op5" value="4"></td>
      <td data-label="Always"><input type="radio" name="op5" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">6</td>
      <td data-label="Question">When people talk to me, I try to see their perspectives.</td>
      <td data-label="Almost Never"><input type="radio" name="op6" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op6" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op6" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op6" value="4"></td>
      <td data-label="Always"><input type="radio" name="op6" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">7</td>
      <td data-label="Question">I use email to communicate complex issues with people. It's quick and efficient.</td>
      <td data-label="Almost Never"><input type="radio" name="op7" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op7" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op7" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op7" value="4"></td>
      <td data-label="Always"><input type="radio" name="op7" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">8</td>
      <td data-label="Question">I leave contingency time in my schedule to deal with "the unexpected"?</td>
      <td data-label="Almost Never"><input type="radio" name="op8" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op8" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op8" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op8" value="4"></td>
      <td data-label="Always"><input type="radio" name="op8" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">9</td>
      <td data-label="Question">  
I consider cultural barriers when planning my communications.</td>
      <td data-label="Almost Never"><input type="radio" name="op9" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op9" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op9" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op9" value="4"></td>
      <td data-label="Always"><input type="radio" name="op9" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">10</td>
      <td data-label="Question">When talking to people, I pay attention to their body language.</td>
      <td data-label="Almost Never"><input type="radio" name="op10" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op10" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op10" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op10" value="4"></td>
      <td data-label="Always"><input type="radio" name="op10" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">11</td>
      <td data-label="Question">  
I use diagrams and charts to help express my ideas.</td>
      <td data-label="Almost Never"><input type="radio" name="op11" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op11" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op11" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op11" value="4"></td>
      <td data-label="Always"><input type="radio" name="op11" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">12</td>
      <td data-label="Question">Before I communicate, I think about what the person needs to know, and how best to convey it.</td>
      <td data-label="Almost Never"><input type="radio" name="op12" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op12" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op12" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op12" value="4"></td>
      <td data-label="Always"><input type="radio" name="op12" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">13</td>
      <td data-label="Question">When someone's talking to me, I think about what I'm going to say next to make sure I get my point across correctly.</td>
      <td data-label="Almost Never"><input type="radio" name="op13" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op13" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op13" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op13" value="4"></td>
      <td data-label="Always"><input type="radio" name="op13" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">14</td>
      <td data-label="Question">Before I send a message, I think about the best way to communicate it (in person, over the phone, in a newsletter, via memo, and so on).</td>
      <td data-label="Almost Never"><input type="radio" name="op14" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op14" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op14" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op14" value="4"></td>
      <td data-label="Always"><input type="radio" name="op14" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">15</td>
      <td data-label="Question">I try to help people understand the underlying concepts behind the point I am discussing. This reduces misconceptions and increases understanding.</td>
      <td data-label="Almost Never"><input type="radio" name="op15" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op15" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op15" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op15" value="4"></td>
      <td data-label="Always"><input type="radio" name="op15" value="5"></td>
    </tr>
  </tbody>
</table>
<br><br>
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" href="commstestSubmit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
  
            </div>
            </div>
            <!-- /.row -->
            <!-- Three columns of Tests -->
            <!-- /.row -->
        <!--</div>
    </div>
</center>
        </div>
    </div>
</div>
@endsection
