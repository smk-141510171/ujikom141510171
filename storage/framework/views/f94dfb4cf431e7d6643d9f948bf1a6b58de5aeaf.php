;
<?php $__env->startSection('content'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="form">
    <div class="header"><h2>Login</h2></div>
        <div class="login">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>

                        
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <span class="un"><i style="margin-top: 15px" class="fa fa-user"></i></span><input id="email" type="email" class="text" name="email" value="<?php echo e(old('email')); ?>" placeholder=" Email" required autofocus>
                                
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong>Invalid Password Or Username</strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                             <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <span class="un"><i style="margin-top: 15px" class="fa fa-lock"></i></span><input id="password" type="password" class="text" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="LOGIN" class="btb">
                                    Login
                                </button>
                            </div>
                          
                    </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>