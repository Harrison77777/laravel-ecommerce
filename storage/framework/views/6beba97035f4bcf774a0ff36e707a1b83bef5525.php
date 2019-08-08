<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <img height="50" width="50" src="<?php echo e(asset('uploads/logo/5cec1b8ebacf0.jpg')); ?>" alt="">
        <p style="font-size:14px;">Dear <?php echo e($user->username); ?>, <br/> please verify your email address by following this link</p>
        <a href="<?php echo e(url('/frontend/token')); ?>/<?php echo e($user->remember_token); ?>">Click Here</a>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/verificationMail/mail.blade.php ENDPATH**/ ?>