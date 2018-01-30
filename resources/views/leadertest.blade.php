@extends('layouts.app')

@section('content')
<link href="{{ asset('css/test.css') }}" rel="stylesheet">


     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Leadership Test</h2>
        </div>
        <div class="panel-body"> 
    
    <form method="POST" action="/leadertestSubmit">
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
      <td data-label="Question">When assigning tasks, I consider people`s skills and interests.</td>
      <td data-label="Almost Never"><input type="radio" name="op1" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op1" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op1" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op1" value="4"></td>
      <td data-label="Always"><input type="radio" name="op1" value="5"></td>
    
    </tr>
    <tr>
      <td scope="row" data-label="Account">2</td>
      <td data-label="Question">I doubt myself and my ability to succeed.</td>
      <td data-label="Almost Never"><input type="radio" name="op2" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op2" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op2" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op2" value="4"></td>
      <td data-label="Always"><input type="radio" name="op2" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">3</td>
      <td data-label="Question">I expect nothing less than top-notch results from people.</td>
      <td data-label="Almost Never"><input type="radio" name="op3" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op3" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op3" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op3" value="4"></td>
      <td data-label="Always"><input type="radio" name="op3" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Acount">4</td>
      <td data-label="Question">When someone is upset, I try to understand how he or she is feeling.</td>
      <td data-label="Almost Never"><input type="radio" name="op4" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op4" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op4" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op4" value="4"></td>
      <td data-label="Always"><input type="radio" name="op4" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">5</td>
      <td data-label="Question">When circumstances change, I can struggle to know what to do.</td>
      <td data-label="Almost Never"><input type="radio" name="op5" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op5" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op5" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op5" value="4"></td>
      <td data-label="Always"><input type="radio" name="op5" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">6</td>
      <td data-label="Question">I think that personal feelings shouldn't be allowed to get in the way of performance and productivity.</td>
      <td data-label="Almost Never"><input type="radio" name="op6" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op6" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op6" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op6" value="4"></td>
      <td data-label="Always"><input type="radio" name="op6" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">7</td>
      <td data-label="Question">I am highly motivated because I know I have what it takes to be successful.</td>
      <td data-label="Almost Never"><input type="radio" name="op7" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op7" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op7" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op7" value="4"></td>
      <td data-label="Always"><input type="radio" name="op7" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">8</td>
      <td data-label="Question">Time spent worrying about team morale is time that`s wasted.</td>
      <td data-label="Almost Never"><input type="radio" name="op8" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op8" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op8" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op8" value="4"></td>
      <td data-label="Always"><input type="radio" name="op8" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">9</td>
      <td data-label="Question">I get upset and worried quite often in the workplace.</td>
      <td data-label="Almost Never"><input type="radio" name="op9" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op9" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op9" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op9" value="4"></td>
      <td data-label="Always"><input type="radio" name="op9" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">10</td>
      <td data-label="Question">My actions show people what I want from them.</td>
      <td data-label="Almost Never"><input type="radio" name="op10" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op10" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op10" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op10" value="4"></td>
      <td data-label="Always"><input type="radio" name="op10" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">11</td>
      <td data-label="Question">When working with a team, I encourage everyone to work toward the same overall objectives.</td>
      <td data-label="Almost Never"><input type="radio" name="op11" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op11" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op11" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op11" value="4"></td>
      <td data-label="Always"><input type="radio" name="op11" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">12</td>
      <td data-label="Question">    
I make exceptions to my rules and expectations it`s easier than being the enforcer all the time!</td>
      <td data-label="Almost Never"><input type="radio" name="op12" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op12" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op12" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op12" value="4"></td>
      <td data-label="Always"><input type="radio" name="op12" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">13</td>
      <td data-label="Question">I enjoy planning for the future.</td>
      <td data-label="Almost Never"><input type="radio" name="op13" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op13" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op13" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op13" value="4"></td>
      <td data-label="Always"><input type="radio" name="op13" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">14</td>
      <td data-label="Question">I feel threatened when someone criticizes me.</td>
      <td data-label="Almost Never"><input type="radio" name="op14" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op14" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op14" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op14" value="4"></td>
      <td data-label="Always"><input type="radio" name="op14" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">15</td>
      <td data-label="Question">    
I make time to learn what people need from me, so that they can be successful.</td>
      <td data-label="Almost Never"><input type="radio" name="op15" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op15" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op15" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op15" value="4"></td>
      <td data-label="Always"><input type="radio" name="op15" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">16</td>
      <td data-label="Question">    
I`m optimistic about life, and I can see beyond temporary setbacks and problems.</td>
      <td data-label="Almost Never"><input type="radio" name="op16" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op16" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op16"value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op16" value="4"></td>
      <td data-label="Always"><input type="radio" name="op16" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">17</td>
      <td data-label="Question">I think that teams perform best when individuals keep doing the same tasks and perfecting them, instead of learning new skills and challenging themselves.</td>
      <td data-label="Almost Never"><input type="radio" name="op17" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op17" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op17" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op17" value="4"></td>
      <td data-label="Always"><input type="radio" name="op17" value="5"></td>
    </tr>
  </tbody>
</table>
<br><br>
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" href="leadertestSubmit" class="btn btn-primary">
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
