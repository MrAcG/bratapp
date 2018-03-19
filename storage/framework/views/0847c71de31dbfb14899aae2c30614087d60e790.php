<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
<center>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Personality Profiling</h2>
        </div>
        <div class="panel-body">
            <!-- Three columns of Tests -->
            <div class="row">
            <div class="col-lg-4">
                    <img class="img-circle" src="<?php echo e(URL::asset('/images/personality-profiling.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Personality Profiling</h3>
                     
                    <p><a class="btn btn-default" href="<?php echo e(url('/profiling')); ?>" role="button">Explore &raquo;</a>
                    </p>
                </div>
                
                <!-- /.col-lg-4 -->
               
                <!-- /.col-lg-4 -->
            </div>
            </div>
            </div>
            <!-- /.row -->
            <!-- Three columns of Tests -->
 <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Job Aptitute</h2>
        </div>
        <div class="panel-body">            
            <div class="row">
             <div class="col-lg-4">
                    <img class="img-circle" src="<?php echo e(URL::asset('/images/subjects-brand.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Subjects</h3>
                     
                    <p><a class="btn btn-default" href="#" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle"  src="<?php echo e(URL::asset('/images/soft-skills-brand.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Soft Skills</h3>
                     
                    <p><a class="btn btn-default" href="<?php echo e(url('/softskills')); ?>" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle"  src="<?php echo e(URL::asset('/images/self-development-plan.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Self Development Plan</h3>
                     
                    <p><a class="btn btn-default" href="<?php echo e(url('/selfdev')); ?>"  role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                 <div class="col-lg-4">
                    <img class="img-circle"  src="<?php echo e(URL::asset('/images/tests.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Aptitude Test</h3>
                     
                    <p><a class="btn btn-default" href="<?php echo e(url('/aptitude')); ?>" role="button">Explore &raquo;</a>
                    </p>
                </div>
                
                <div class="col-lg-4">
                    <img class="img-circle"  src="<?php echo e(URL::asset('/images/job.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Jobs</h3>
                     
                    <p><a class="btn btn-default" href="/jobs" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            </div>
            </div>
            <!-- /.row -->
            <!-- Three columns of Tests -->
<div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">The Resume Says it All</h2>
        </div>
        <div class="panel-body">           
           
           
            <div class="row">
                
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle"  src="<?php echo e(URL::asset('/images/tests.png')); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Resume</h3>
                     
                    <p><a class="btn btn-default" href="/resume" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            </div>
            </div>
            <!-- /.row -->
        <!--</div>
    </div>
</center>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>