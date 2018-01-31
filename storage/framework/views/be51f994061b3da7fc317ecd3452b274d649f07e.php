<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/test.css')); ?>" rel="stylesheet">


     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Change Management Test</h2>
        </div>
        <div class="panel-body"> 
    
    <form method="POST" action="/changetestSubmit">
    <?php echo e(csrf_field()); ?>

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
      <td data-label="Question">  
I usually receive good support from senior executives for changes that I want to implement.</td>
      <td data-label="Almost Never"><input type="radio" name="op1" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op1" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op1" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op1" value="4"></td>
      <td data-label="Always"><input type="radio" name="op1" value="5"></td>
    
    </tr>
    <tr>
      <td scope="row" data-label="Account">2</td>
      <td data-label="Question">I create a plan for change for my department and team, and I let other departments deal with the impacts as they choose.</td>
      <td data-label="Almost Never"><input type="radio" name="op2" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op2" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op2" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op2" value="4"></td>
      <td data-label="Always"><input type="radio" name="op2" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">3</td>
      <td data-label="Question">I communicate successes throughout the organization, so that everyone understands the positive impact of a change project.</td>
      <td data-label="Almost Never"><input type="radio" name="op3" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op3" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op3" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op3" value="4"></td>
      <td data-label="Always"><input type="radio" name="op3" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">4</td>
      <td data-label="Question">If the change makes financial and operational sense, then it will work.</td>
      <td data-label="Almost Never"><input type="radio" name="op4" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op4" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op4" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op4" value="4"></td>
      <td data-label="Always"><input type="radio" name="op4" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">5</td>
      <td data-label="Question">If the team is dissatisfied with how something is working or operating right now, change is more likely to be successful.</td>
      <td data-label="Almost Never"><input type="radio" name="op5" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op5" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op5" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op5" value="4"></td>
      <td data-label="Always"><input type="radio" name="op5" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">6</td>
      <td data-label="Question">I try to understand my organization's culture and values as important elements of a change project.</td>
      <td data-label="Almost Never"><input type="radio" name="op6" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op6" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op6" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op6" value="4"></td>
      <td data-label="Always"><input type="radio" name="op6" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">7</td>
      <td data-label="Question">When change is happening, I expect people to continue to perform at 100 percent.</td>
      <td data-label="Almost Never"><input type="radio" name="op7" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op7" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op7" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op7" value="4"></td>
      <td data-label="Always"><input type="radio" name="op7" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">8</td>
      <td data-label="Question">  
Once I'm successful with a change project, I declare victory and move onto the next project.</td>
      <td data-label="Almost Never"><input type="radio" name="op8" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op8" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op8" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op8" value="4"></td>
      <td data-label="Always"><input type="radio" name="op8" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">9</td>
      <td data-label="Question">I consider things like the impact on people and organizational structure when planning a change project.</td>
      <td data-label="Almost Never"><input type="radio" name="op9" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op9" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op9" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op9" value="4"></td>
      <td data-label="Always"><input type="radio" name="op9" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">10</td>
      <td data-label="Question">If I think something must be changed, I start right away and make it happen.</td>
      <td data-label="Almost Never"><input type="radio" name="op10" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op10" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op10" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op10" value="4"></td>
      <td data-label="Always"><input type="radio" name="op10" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">11</td>
      <td data-label="Question">To get backing and support from my team, I talk with team members about what is causing the need for change.</td>
      <td data-label="Almost Never"><input type="radio" name="op11" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op11" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op11" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op11" value="4"></td>
      <td data-label="Always"><input type="radio" name="op11" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">12</td>
      <td data-label="Question">I let people get comfortable with changes before I decide if any training is necessary.</td>
      <td data-label="Almost Never"><input type="radio" name="op12" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op12" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op12" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op12" value="4"></td>
      <td data-label="Always"><input type="radio" name="op12" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">13</td>
      <td data-label="Question">  
If key individuals are convinced that change is needed, the rest of the stakeholders will usually come on board.</td>
      <td data-label="Almost Never"><input type="radio" name="op13" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op13" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op13" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op13" value="4"></td>
      <td data-label="Always"><input type="radio" name="op13" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">14</td>
      <td data-label="Question">  
It�s harder to manage change effectively when the organization has previously managed change projects badly.</td>
      <td data-label="Almost Never"><input type="radio" name="op14" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op14" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op14" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op14" value="4"></td>
      <td data-label="Always"><input type="radio" name="op14" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">15</td>
      <td data-label="Question">When implementing a change project, I set achievable, short-term targets that, once accomplished, will motivate people to persist and keep trying.</td>
      <td data-label="Almost Never"><input type="radio" name="op15" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op15" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op15" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op15" value="4"></td>
      <td data-label="Always"><input type="radio" name="op15" value="5"></td>
    </tr>
          <tr>
      <td scope="row" data-label="Account">16</td>
      <td data-label="Question">Change is as good as a rest, so even though it might not be necessary, it often helps to "mix things up a bit."</td>
      <td data-label="Almost Never"><input type="radio" name="op16" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op16" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op16" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op16" value="4"></td>
      <td data-label="Always"><input type="radio" name="op16" value="5"></td>
    </tr>
  </tbody>
</table>
<br><br>
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" href="changetestSubmit" class="btn btn-primary">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>