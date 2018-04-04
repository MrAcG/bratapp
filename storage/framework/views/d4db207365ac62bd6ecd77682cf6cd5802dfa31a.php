<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
<center>
     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Soft Skills</h2>
        </div>
        <div class="panel-body">            
            <div class="row">
             <div class="col-lg-4">
                    <img class="img-circle" src="<?php echo e(URL::asset('/images/generic-skills-brand.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Leadership Skills</h3>
                     
                    <p><a class="btn btn-default" href="<?php echo e(url('/leader')); ?>" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle"  src="<?php echo e(URL::asset('/images/tests.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Time Management</h3>
                     
                    <p><a class="btn btn-default" href="<?php echo e(url('/time')); ?>" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle"  src="<?php echo e(URL::asset('/images/logical.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Stress Management</h3>
                     
                    <p><a class="btn btn-default" href="<?php echo e(url('/stress')); ?>"  role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                 <div class="col-lg-4">
                    <img class="img-circle" src="<?php echo e(URL::asset('/images/verbal.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Communication Skills</h3>
                     
                    <p><a class="btn btn-default" href="<?php echo e(url('/comms')); ?>" role="button">Explore &raquo;</a>
                    </p>
                </div>
                
                <div class="col-lg-4">
                    <img class="img-circle"   src="<?php echo e(URL::asset('/images/analytics.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Change Management</h3>
                     
                    <p><a class="btn btn-default" href="<?php echo e(url('/change')); ?>" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
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