<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
    <form method="POST" action="/logictestSubmit">
    <?php echo e(csrf_field()); ?>

     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Logical Reasoning</h2>
        </div>
                <div class="panel-body"> 
        <h3>Question 1</h3>
        <p>Statements
Some pens are books.
All books are rods.
Conclusions
i.  All pens are rods.
ii. Some pens are rods.
iii.    Some books are pens.
iv. All rods are pens.</p>
        <input type="radio" name="op1" value="0">Only i and iv follow<br><br>
        <input type="radio" name="op1" value="0">All follow<br><br>
        <input type="radio" name="op1" value="1">Only ii and iii follow<br><br>
        <input type="radio" name="op1" value="0">All rods are pens.<br><br>


            </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 2</h3>
        <p>In each question below are given two statements followed by two conclusions numbered I and II. You have to take the given two statements to be true even if they seem to be at variance from commonly known facts. Read the conclusion and then decide which of the given conclusions logically follows from the two given statements, disregarding commonly known facts.
Statements: No women teacher can play. Some women teachers are athletes.
I.Male athletes can play.
II.Some athletes can play.</p>
        <input type="radio" name="op2" value="0">Only conclusion I follows<br><br>
        <input type="radio" name="op2" value="1">Neither I nor II follows<br><br>
        <input type="radio" name="op2" value="0">Only conclusion II follows<br><br>
        <input type="radio" name="op2" value="0">Either I or II follows<br><br>
            </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 3</h3>
        <p>Look at this series: 36, 34, 30, 28, 24, ... What number should come next?</p>
        <input type="radio" name="op3" value="0">20<br><br>
        <input type="radio" name="op3" value="1">22<br><br>
        <input type="radio" name="op3" value="0">23<br><br>
        <input type="radio" name="op3" value="0">26<br><br>
            </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 4</h3>
        <p>Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?</p>
        <input type="radio" name="op4" value="0">7<br><br>
        <input type="radio" name="op4" value="0">13 <br><br>
        <input type="radio" name="op4" value="1">10<br><br>
        <input type="radio" name="op4" value="0">15<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 5</h3>
        <p>Look at this series: 8, 22, 8, 28, 8, ... What number should come next?</p>
        <input type="radio" name="op5" value="0">9<br><br>
        <input type="radio" name="op5" value="1">29<br><br>
        <input type="radio" name="op5" value="0">32<br><br>
        <input type="radio" name="op5" value="0">34<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 6</h3>
        <p>Look at this series: 5.2, 4.8, 4.4, 4, ... What number should come next?</p>
        <input type="radio" name="op6" value="1">3.6<br><br>
        <input type="radio" name="op6" value="0">3<br><br>
        <input type="radio" name="op6" value="0">3.3<br><br>
        <input type="radio" name="op6" value="0">3.5<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 7</h3>
        <p>Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?</p>
        <input type="radio" name="op7" value="1">14<br><br>
        <input type="radio" name="op7" value="0">12<br><br>
        <input type="radio" name="op7" value="0">27<br><br>
        <input type="radio" name="op7" value="0">53<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 8</h3>
        <p>Look at this series: 544, 509, 474, 439, ... What number should come next?</p>
        <input type="radio" name="op8" value="0">421<br><br>
        <input type="radio" name="op8" value="0">445<br><br>
        <input type="radio" name="op8" value="1">404<br><br>
        <input type="radio" name="op8" value="0">475<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 9</h3>
        <p>Tanya is older than Eric.
Cliff is older than Tanya.
Eric is older than Cliff.
If the first two statements are true, the third statement is</p>
        <input type="radio" name="op9" value="0">true<br><br>
        <input type="radio" name="op9" value="0">uncertain<br><br>
        <input type="radio" name="op9" value="0">-<br><br>
        <input type="radio" name="op9" value="1">false<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 10</h3>
        <p>Look at this series: 31, 29, 24, 22, 17, ... What number should come next?</p>
        <input type="radio" name="op10" value="1">13<br><br>
        <input type="radio" name="op10" value="0">15<br><br>
        <input type="radio" name="op10" value="0">14<br><br>
        <input type="radio" name="op10" value="0">12<br><br>
            </div>
            </div>

                                        <div class="col-md-6 col-md-offset-5">
                                <button type="submit" href="logictestSubmit" class="btn btn-primary">
                                    Submit
                                </button>
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