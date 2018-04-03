<?php $__env->startSection('content'); ?>
<div class="container">
	<h2 class="text-center"><span class="page-heading">Jobs best suited for your personality are:</span></h2>
	<div class="row">        
		<div class="col-lg-12 animateFadeInUp">
			<div class="panel panel-default">      
                <div class="panel-body">
                    <span style="align:right;">Sort by:
                        <button id="un" class="btn btn-default btn-sm" style="background-color:green; color:white">Unfiltered</button>
                        <button id="sc" class="btn btn-default btn-sm">Science</button>
                        <button id="co" class="btn btn-default btn-sm">Commerce</button>
                        <button id="ar" class="btn btn-default btn-sm">Arts</button>
                    </span>
                    
                    <div class="row" id="uldis">                        
                        <center>
                            <legend>Unfiltered</legend>
                            <?php for($i = 0; $i < count($jobs);$i++): ?>    
                            <div  style="font-size:12px;" class="col-sm-12 animateFadeIUp ">
                                <ul >
                                    <li><?php echo e($jobs->get($i)); ?></li>
                                </ul>
                            </div>
                            <?php endfor; ?>
                        </center>
                    </div>
                    
                    <div class="row" id="scdis" style="display:none;">                        
                        <center>
                            <legend>Science</legend>
                            <?php for($i = 0; $i < count($jobs_science);$i++): ?>    
                            <div  style="font-size:12px;" class="col-sm-12 animateFadeIUp ">
                                <ul >
                                    <li><?php echo e($jobs_science->get($i)); ?></li>
                                </ul>
                            </div>
                             <?php endfor; ?>
                        </center>
                    </div>
                    
                    <div class="row" id="codis" style="display:none;">                        
                        <center>
                            <legend>Commerce</legend>
                            <?php for($i = 0; $i < count($jobs_commerce);$i++): ?>    
                            <div  style="font-size:12px;" class="col-sm-12 animateFadeIUp ">
                                <ul >
                                    <li><?php echo e($jobs_commerce->get($i)); ?></li>
                                </ul>
                            </div>
                             <?php endfor; ?>
                        </center>
                    </div>
                    
                    <div class="row" id="ardis" style="display:none;">                        
                        <center>
                            <legend>Arts</legend>
                            <?php for($i = 0; $i < count($jobs_arts);$i++): ?>    
                            <div  style="font-size:12px;" class="col-sm-12 animateFadeIUp ">
                                <ul >
                                    <li><?php echo e($jobs_arts->get($i)); ?></li>
                                </ul>
                            </div>
                            <?php endfor; ?>
                        </center>
                    </div>
                </div>				
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>