<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!--  Panels  -->
			<!-- <center> -->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">View Feedback</h2>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12" style="overflow-x:auto;">
                            <legend>Your Feedback</legend>						
                            <table class="table table-striped table-hover " style="table-layout: fixed; word-wrap: break-word;">
                                <thead>
                                    <tr>
                                        
                                        
                                        <th>From</th> 
                                        <th>Feedback</th>
                                        <th>Date Sent</th>
                                                                              
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($feedback)>0): ?>
                                    <?php $__currentLoopData = $feedback->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                        $from=\DB::table('users')->where('email', $feedback->from)->get()->pluck('name');
                                        // echo($from);
                                    ?>
                                    <tr>
                                        
                                        
                                        <td><?php print($from[0]); ?></td>								
                                        <?php if(strlen($feedback->message)<=100): ?>
                                        <td><?php echo e($feedback->message); ?></td>
                                        <?php else: ?>
                                        <?php $small = substr($feedback->message, 0, 100); ?>
                                        <td>
                                            <span class="teaser">
                                                <?php echo e($small); ?>

                                            </span>                                            
                                            <a href="/readfeedback/<?php echo e($feedback->id); ?>"><button class="btn btn-default" >Read More</button></a>
                                            </td>
                                        <?php endif; ?>
                                        <td><?php echo e($feedback->created_at); ?></td>                                        
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <td colspan="3" style="text-align:center">No feedback has been received yet</td>
                                    <?php endif; ?>
                                </tbody>
                            </table>                            
                        </div>
                    </div>
			    </div>
		    </div>
        </div>
    </div>    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>