    <?php $__env->startSection('title'); ?>
        
		<?php echo e(Auth::user()->username); ?>'s details | Laravel-E-commerce
	<?php $__env->stopSection(); ?>
	<?php $__env->startPush('css'); ?>
		
	<?php $__env->stopPush(); ?>
	<?php $__env->startSection('content'); ?>

	
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-md-offset-1" >
						<div style="width:100%;" class="user-photo-area text-center">
								<img style="width:60%; height:150px;" src="<?php echo e(asset('uploads/user/user-image-png-7.png')); ?>" alt="">
								<div>
									<h6><strong>Username: <?php echo e(Auth::user()->username); ?></strong></h6>
								</div>
						</div>
					<div style="height:100vh; width:99%;margin-left:1%;" class="dashboard-menu-area">
						<ul class="list-group">
							<li class="list-group-item"><a class="text-light" href="<?php echo e(route('user.dashboard.index')); ?>">Dashboard</a></li>
							<li class="list-group-item active"><a class="text-light" href="
								<?php echo e(route('user.dashboard.show')); ?>">View profile</a></li>
							<li class="list-group-item">
								<a class="text-light" 
								href="<?php echo e(route('user.dashboard.edit')); ?>">
								Update profle
								</a>
							</li>
							<li class="list-group-item"><a class="text-light" href="">Orders</a></li>
							<li class="list-group-item"><a
								onclick=
								"
								event.preventDefault();
								document.getElementById('logout-form').submit();	
								"
								 href="#"
								 >Logout</a>
							</li>
						</ul>
					</div>
				</div>
                <div class="col-sm-8 padding-right">
					
                    <div class="heading">
						<h3>Profile details of <?php echo e(Auth::user()->username); ?></h3>
					</div>
					<div class="card">
						<h5>Username:<?php echo e($user->username); ?></h5>
						<h5>email: <?php echo e($user->email); ?></h5>
						<h5>Phone no: <?php echo e($user->phone_no); ?></h5>
						<hr>
						<small style="margin: 0px;">Location</small>
						<h5>Division: <?php echo e($user->division); ?></h5>
						<h5>District: <?php echo e($user->district); ?></h5>
						<h5>Shipping Address: <?php echo e($user->shipping_address); ?></h5>
						<h5>street Address: <?php echo e($user->street_address); ?></h5>
						<h5>Zip-code: <?php echo e($user->zip_code); ?></h5>
                    </div>
                </div>
            </div>
        </div>
</section>       
    <?php $__env->stopSection(); ?>
	<?php $__env->startPush('script'); ?>
		
	<?php $__env->stopPush(); ?>
	
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontend/userDashboard/show.blade.php ENDPATH**/ ?>