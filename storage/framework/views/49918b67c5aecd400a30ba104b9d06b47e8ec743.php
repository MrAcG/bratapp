<?php $__env->startSection('content'); ?>

<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Holland Test Results:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                              
                                       <div  style="font-size:12px;" class="col-sm-12 animateFadeIUp ">
                                             
                                            <ul>
                                           <?php $__currentLoopData = $personalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <li> <?php echo e($personality); ?></li>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                            
                                             
                                              
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