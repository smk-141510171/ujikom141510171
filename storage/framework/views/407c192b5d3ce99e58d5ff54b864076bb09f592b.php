<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" align="center" style="margin-top: 100px">
            <div class="panel panel-primary">
                <div class="panel-heading"><font style="font-family: 'Source Sans Pro'; background-image: 'urs('login.jpg');  " size="20">Login Succesful</div>

                <div class="panel-body">
                    You are logged in as<?php echo e(Auth::user()->permission); ?>

                </div>
                <a href="/">Home</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>