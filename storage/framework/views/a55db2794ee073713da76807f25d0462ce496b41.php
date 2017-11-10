<?php $__env->startSection('content'); ?>

<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Jobs best suited for your personality are:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                            <?php for($i = 0; $i < count($jobs);$i++): ?>    
                                       <div  style="font-size:12px;" class="col-sm-12 animateFadeIUp ">
                                             
                                            <ul >
                                            <li><?php echo e($jobs->get($i)); ?></li>

                                            </ul>
                                             
                                              
                                          </div>
                                          <?php endfor; ?>
                                          
                                          </div>
                                            </div>
                                            </center>
                                            </div>

                                   </div>


                               </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>