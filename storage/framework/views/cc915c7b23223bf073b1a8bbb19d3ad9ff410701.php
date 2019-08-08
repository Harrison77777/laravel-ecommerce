<?php $__env->startSection('title', 'login-page'); ?>
    
<?php $__env->startPush('css'); ?>
    
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<section class="registar-section">
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-1">
            <div class="signup-form">
                <h2>New User Signup!</h2>
                <form action="#" method="POST">
                    <input type="text" placeholder="Name"/>
                    <input type="email" placeholder="Email Address"/>
                    <input type="password" placeholder="Password"/>
                    <button type="submit" class="btn btn-default">Signup</button>
                </form>
            </div><!--/sign up form-->
        </div>
    </div>
</div>
</section>

<!--/form-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontend/auth/register.blade.php ENDPATH**/ ?>