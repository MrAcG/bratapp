<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/test.css')); ?>" rel="stylesheet">


     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Time Management Test</h2>
        </div>
        <div class="panel-body"> 
    
    <form method="POST" action="/timetestSubmit">
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
      <td data-label="Question">The tasks I work on are the ones with the highest priority.</td>
      <td data-label="Almost Never"><input type="radio" name="op1" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op1" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op1" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op1" value="4"></td>
      <td data-label="Always"><input type="radio" name="op1" value="5"></td>
    
    </tr>
    <tr>
      <td scope="row" data-label="Account">2</td>
      <td data-label="Question">I find myself completing tasks at the last minute, or asking for extensions.</td>
      <td data-label="Almost Never"><input type="radio" name="op2" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op2" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op2" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op2" value="4"></td>
      <td data-label="Always"><input type="radio" name="op2" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">3</td>
      <td data-label="Question">I set aside time for planning and scheduling.</td>
      <td data-label="Almost Never"><input type="radio" name="op3" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op3" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op3" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op3" value="4"></td>
      <td data-label="Always"><input type="radio" name="op3" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">4</td>
      <td data-label="Question">Before I take on a task, I check that the results will be worth the time put in.</td>
      <td data-label="Almost Never"><input type="radio" name="op4" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op4" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op4" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op4" value="4"></td>
      <td data-label="Always"><input type="radio" name="op4" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">5</td>
      <td data-label="Question">I know how much time I spend on each of the various task I do.</td>
      <td data-label="Almost Never"><input type="radio" name="op5" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op5" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op5" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op5" value="4"></td>
      <td data-label="Always"><input type="radio" name="op5" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">6</td>
      <td data-label="Question">  
I find myself dealing with interruptions.</td>
      <td data-label="Almost Never"><input type="radio" name="op6" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op6" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op6" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op6" value="4"></td>
      <td data-label="Always"><input type="radio" name="op6" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">7</td>
      <td data-label="Question">I use goal setting to decide what tasks and activities I should work on.</td>
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
      <td data-label="Question">I know whether the tasks I am working on are high, medium, or low value.</td>
      <td data-label="Almost Never"><input type="radio" name="op9" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op9" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op9" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op9" value="4"></td>
      <td data-label="Always"><input type="radio" name="op9" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">10</td>
      <td data-label="Question">When I am given a new assignment, I analyze it for importance and prioritize it accordingly.</td>
      <td data-label="Almost Never"><input type="radio" name="op10" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op10" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op10" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op10" value="4"></td>
      <td data-label="Always"><input type="radio" name="op10" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">11</td>
      <td data-label="Question">I am stressed about deadlines and commitments./td>
      <td data-label="Almost Never"><input type="radio" name="op11" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op11" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op11" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op11" value="4"></td>
      <td data-label="Always"><input type="radio" name="op11" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">12</td>
      <td data-label="Question">Distractions keep me from working on critical tasks.</td>
      <td data-label="Almost Never"><input type="radio" name="op12" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op12" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op12" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op12" value="4"></td>
      <td data-label="Always"><input type="radio" name="op12" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">13</td>
      <td data-label="Question">I have to take work home in order to get it done.</td>
      <td data-label="Almost Never"><input type="radio" name="op13" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op13" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op13" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op13" value="4"></td>
      <td data-label="Always"><input type="radio" name="op13" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">14</td>
      <td data-label="Question">I prioritize my To Do list or Action Program.</td>
      <td data-label="Almost Never"><input type="radio" name="op14" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op14" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op14" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op14" value="4"></td>
      <td data-label="Always"><input type="radio" name="op14" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">15</td>
      <td data-label="Question">I confirm my priorities with my boss.</td>
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
                                <button type="submit" href="timetestSubmit" class="btn btn-primary">
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