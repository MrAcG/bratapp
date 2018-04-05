<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Leader Test Results:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                              
                                       <div  style="font-size:30px;" class="col-sm-12 animateFadeIUp ">
                                            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($result); ?>/85
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           <?php $asd=($result/85*100);?>
                                          </div>
                                          <center>
                                          <div class="panel panel-default">
                                            <div class="panel-body">
                                             <div class="row">
                                          <p style="font-size:20px;">
                                          <?php echo e(round($asd,2)); ?>%
                                          </p>
                                          <form method="POST" action="/allresult">
                                           <?php echo e(csrf_field()); ?>

                                          <p align="center" style="position:relative"><button type="submit" href="/allresult" class="btn btn-primary" name="db" value="leadertests">
                                    Compare With Older Results
                                </button>
                                          </p>
                                          </form>

                                          </div>
                                          </div>
                                            </div>
                                            </center>
                                            </div>
                                          
                                          
                                          </div>
                                            </div>
                                            </center>
                                            </div>

                                   </div>


                               </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>