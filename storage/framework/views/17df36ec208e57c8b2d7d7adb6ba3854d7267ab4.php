<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/test.css')); ?>" rel="stylesheet">


     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Stress Management Test</h2>
        </div>
        <div class="panel-body"> 
    
    <form method="POST" action="/stresstestSubmit">
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
      <td data-label="Question">I find an outlet to express my emotions (writing in a journal or blog, playing some music, drawing or painting, etc).</td>
      <td data-label="Almost Never"><input type="radio" name="op1" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op1" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op1" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op1" value="4"></td>
      <td data-label="Always"><input type="radio" name="op1" value="5"></td>
    
    </tr>
    <tr>
      <td scope="row" data-label="Account">2</td>
      <td data-label="Question">  
I seek out emotional support from others.</td>
      <td data-label="Almost Never"><input type="radio" name="op2" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op2" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op2" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op2" value="4"></td>
      <td data-label="Always"><input type="radio" name="op2" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">3</td>
      <td data-label="Question">I try to find the information that I need to understand my situation.</td>
      <td data-label="Almost Never"><input type="radio" name="op3" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op3" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op3" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op3" value="4"></td>
      <td data-label="Always"><input type="radio" name="op3" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">4</td>
      <td data-label="Question">I try to spend more time unwinding with friends and/or loved ones.</td>
      <td data-label="Almost Never"><input type="radio" name="op4" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op4" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op4" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op4" value="4"></td>
      <td data-label="Always"><input type="radio" name="op4" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">5</td>
      <td data-label="Question">I develop strategies to get me back on track.</td>
      <td data-label="Almost Never"><input type="radio" name="op5" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op5" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op5" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op5" value="4"></td>
      <td data-label="Always"><input type="radio" name="op5" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">6</td>
      <td data-label="Question">  
I set goals to help improve the issue.</td>
      <td data-label="Almost Never"><input type="radio" name="op6" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op6" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op6" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op6" value="4"></td>
      <td data-label="Always"><input type="radio" name="op6" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">7</td>
      <td data-label="Question">I try to do the best I can given the constraints of the situation.</td>
      <td data-label="Almost Never"><input type="radio" name="op7" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op7" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op7" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op7" value="4"></td>
      <td data-label="Always"><input type="radio" name="op7" value="5"></td>
    </tr>
    <tr>
      <td scope="row" data-label="Account">8</td>
      <td data-label="Question">I am able to communicate my needs.</td>
      <td data-label="Almost Never"><input type="radio" name="op8" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op8" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op8" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op8" value="4"></td>
      <td data-label="Always"><input type="radio" name="op8" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">9</td>
      <td data-label="Question">  
My thoughts are consumed by the stressful situation(s).</td>
      <td data-label="Almost Never"><input type="radio" name="op9" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op9" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op9" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op9" value="4"></td>
      <td data-label="Always"><input type="radio" name="op9" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">10</td>
      <td data-label="Question">I find reasons to laugh.</td>
      <td data-label="Almost Never"><input type="radio" name="op10" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op10" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op10" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op10" value="4"></td>
      <td data-label="Always"><input type="radio" name="op10" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">11</td>
      <td data-label="Question">I think of ways that I can change the situation to make it better.</td>
      <td data-label="Almost Never"><input type="radio" name="op11" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op11" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op11" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op11" value="4"></td>
      <td data-label="Always"><input type="radio" name="op11" value="5"></td>
    </tr>
        <tr>
      <td scope="row" data-label="Account">12</td>
      <td data-label="Question">I try to think about how lucky I am when compared with those who have even more difficult problems.</td>
      <td data-label="Almost Never"><input type="radio" name="op12" value="1"></td>
      <td data-label="Very Rarely"><input type="radio" name="op12" value="2"></td>
      <td data-label="Sometimes"><input type="radio" name="op12" value="3"></td>
      <td data-label="Mostly"><input type="radio" name="op12" value="4"></td>
      <td data-label="Always"><input type="radio" name="op12" value="5"></td>
    </tr>
  </tbody>
</table>
<br><br>
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" href="stresstestSubmit" class="btn btn-primary">
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