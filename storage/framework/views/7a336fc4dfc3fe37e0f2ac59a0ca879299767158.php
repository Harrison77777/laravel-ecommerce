	<?php $__env->startSection('title'); ?>
	
		<?php echo e(Auth::user()->username); ?>'s details | Laravel-E-commerce
	<?php $__env->stopSection(); ?>
	<?php $__env->startPush('css'); ?>
		
	<?php $__env->stopPush(); ?>
	<?php $__env->startSection('content'); ?>

	
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4" >
					<div style="height:100vh; width:100%;" class="dashboard-menu-area">
						<ul class="list-group">
							<li class="list-group-item"><a href="">View profile</a></li>
							<li class="list-group-item"><a href="">Update profle</a></li>
							<li class="list-group-item"><a
								onclick=
								"
								event.preventDefault();
								document.getElementById('logout-form').submit();	
								
								"
								 href="#"
								 >Logout</a></li>
						</ul>
					</div>
				</div>
                <div class="col-sm-8 padding-right">
                    <div class="heading">
						<h3>User user dashboard of <?php echo e(Auth::user()->username); ?></h3>
						
                    </div>
                </div>
            </div>
        </div>
</section>       
    <?php $__env->stopSection(); ?>
	<?php $__env->startPush('script'); ?>
		
	<?php $__env->stopPush(); ?>
	
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontend/show/show-user-details.blade.php ENDPATH**/ ?>