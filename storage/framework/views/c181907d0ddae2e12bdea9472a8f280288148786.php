<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Subjects</h2>
					</div>
					<div class="panel-body">    
						<div class="row">
							<div class="col-lg-12" style="overflow-x:auto;">
                                <fieldset>
                                    <legend>
                                        Jobs best suited for your personality are:
                                    </legend>
                                    <h5>
                                        Click on the job to find the subjects needed to be studied
                                    </h5>
                                    <span style="align:right;">Sort by:
                                        <button id="un" class="btn btn-default btn-sm" style="background-color:green; color:white">Unfiltered</button>
                                        <button id="sc" class="btn btn-default btn-sm">Science</button>
                                        <button id="co" class="btn btn-default btn-sm">Commerce</button>
                                        <button id="ar" class="btn btn-default btn-sm">Arts</button>
                                    </span><br /><br />                                 
                                    <center> 
                                    <?php if(count($jobs)==0): ?>
                                        <p>Please give the BIG 5 and Holland Tests to get your customised job fields</p>
                                    <?php else: ?> 
                                        <div id="uldis">
                                            <?php for($i = 0; $i < count($jobs);$i++): ?>    
                                                <div style="font-size:12px;">                                
                                                    <p> 
                                                        <a class="btn btn-default btn-block" href="/subject/<?php echo e($jobs[$i]); ?>" role="button"> <?php echo e($jobs->get($i)); ?></a>                                                       
                                                    </p>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                        <div id="scdis" style="display:none;">
                                            <?php for($i = 0; $i < count($jobs_science);$i++): ?>    
                                                <div style="font-size:12px;">                                
                                                    <p> 
                                                        <a class="btn btn-default btn-block" href="/subject/<?php echo e($jobs_science[$i]); ?>" role="button"> <?php echo e($jobs_science->get($i)); ?></a>                                                       
                                                    </p>
                                                </div>
                                            <?php endfor; ?>
                                        </div> 
                                        <div id="codis" style="display:none;">
                                            <?php for($i = 0; $i < count($jobs_commerce);$i++): ?>    
                                                <div style="font-size:12px;">                                
                                                    <p> 
                                                        <a class="btn btn-default btn-block" href="/subject/<?php echo e($jobs_commerce[$i]); ?>" role="button"> <?php echo e($jobs_commerce->get($i)); ?></a>                                                       
                                                    </p>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                        <div id="ardis" style="display:none;">
                                            <?php for($i = 0; $i < count($jobs_arts);$i++): ?>    
                                                <div style="font-size:12px;">                                
                                                    <p> 
                                                        <a class="btn btn-default btn-block" href="/subject/<?php echo e($jobs_arts[$i]); ?>" role="button"> <?php echo e($jobs_arts->get($i)); ?></a>                                                       
                                                    </p>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    <?php endif; ?>
                                    </center>
                                </fieldset>
							</div>
                        </div>                    
					</div>
				</div>            
   			 </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>