<?php $__env->startSection('title','Register-page'); ?>
    
<?php $__env->startPush('css'); ?>
    
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<section class="registar-section">
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-1">
            <div class="signup-form">
                <h2>New User Signup!</h2>
                <form action="<?php echo e(route('register')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
                        <div class="col-md-7">
                            <input id="name" type="text" class="form-control <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="username" value="<?php echo e(old('username')); ?>">

                            <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>  
                    
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-7">
                            <input id="email" type="text" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>">

                            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Phone</label>

                        <div class="col-md-7">
                            <input id="phone" type="text" class="form-control <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="phone" value="<?php echo e(old('phone')); ?>">

                            <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?>
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Division" class="col-md-4 col-form-label text-md-right">Division</label>

                        <div class="col-md-7">
                            <input id="Division" type="text" class="form-control <?php if ($errors->has('division')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('division'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="division" value="<?php echo e(old('division')); ?>">

                            <?php if ($errors->has('division')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('division'); ?>
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="District" class="col-md-4 col-form-label text-md-right">District</label>

                        <div class="col-md-7">
                            <input id="District" type="text" class="form-control <?php if ($errors->has('district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('district'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="district" value="<?php echo e(old('district')); ?>">

                            <?php if ($errors->has('district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('district'); ?>
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="zip_code" class="col-md-4 col-form-label text-md-right">Zip_code</label>

                        <div class="col-md-7">
                            <input id="zip_code" type="text" class="form-control <?php if ($errors->has('zip_code')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('zip_code'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="zip_code" value="<?php echo e(old('zip_code')); ?>">

                            <?php if ($errors->has('zip_code')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('zip_code'); ?>
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="sipping_address" class="col-md-4 col-form-label text-md-right">Sipping_address</label>
                        <div class="col-md-7">
                            <textarea id="sipping_address" type="text" class="form-control" rows="3" name="sipping_address"><?php echo e(old('sipping_address')); ?></textarea>
                            <?php if ($errors->has('sipping_address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('sipping_address'); ?>
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="street_address" class="col-md-4 col-form-label text-md-right">Street_address</label>

                        <div class="col-md-7">
                            <input id="street_address" type="text" class="form-control <?php if ($errors->has('street_address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('street_address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="zip_code" value="<?php echo e(old('street_address')); ?>">

                            <?php if ($errors->has('street_address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('street_address'); ?>
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                        <div class="col-md-7">
                            <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password">

                            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                   

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                        <div class="col-md-7">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                   <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                   
              
            </div><!--/sign up form-->
        </div>
    </div>
</div>
</section>

<!--/form-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontend/user-authentication/register.blade.php ENDPATH**/ ?>