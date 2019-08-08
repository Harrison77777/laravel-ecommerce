	<?php $__env->startSection('title', 'Laravel-E-commerce'); ?>
		
	<?php $__env->startPush('css'); ?>
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.theme.default.min.css')); ?>">
		<style>
				.active_carousal {position: relative;}
				.owl-nav {position: absolute;top: 12%;font-size: 76px;color: #FE980F;outline: none;}
				button.owl-next {position: absolute;left: 3681%;}
				button {outline: none;}
		</style>
	<?php $__env->stopPush(); ?>
	<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('frontendPartial/slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<section>
		<div class="container">
			<div class="row">
				
				<?php echo $__env->make('frontendPartial/left_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">features_items</h2>
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
											<?php
												$i =1;
											?>	
											<?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
											<?php if($i > 0): ?>
											<img src="<?php echo e(asset('uploads/product/'.$image->image)); ?>" alt="" />
											<?php endif; ?>
											<?php
												$i--;
											?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<h2>$<?php echo e($product->sale_price); ?></h2>
												<p><?php echo e($product->title); ?></p>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>$<?php echo e($product->sale_price); ?></h2>
													<p><?php echo e($product->title); ?></p>
												
							
						<a class="btn btn-info btn-sm" href="<?php echo e(route('details',$product->slug)); ?>"><i class="fa fa-plus-square"></i>Details</a>
												
												</div>
											</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
											<li><a href="<?php echo e(route('details',$product->slug)); ?>"><i class="fa fa-plus-square"></i>Details</a></li>
										</ul>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div><!--features_items-->


					<div class="row">
						<?php if(count($newArrivalProducts) > 3): ?>
						<section class="col-md-12" style="height:362px">
								<div class="heading-section">
									<h2 class="title text-center">New arrival</h2>
								</div>
								<div style="height:100%;" class="active_carousal active owl-carousel">
									<?php $__currentLoopData = $newArrivalProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="itemSize item col-md-2"> 
										<?php $i=1; ?>
										<?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($i > 0): ?>
										<img style="width:100%; height: 180px;" src="<?php echo e(asset('uploads/product/'.$image->image)); ?>" alt=""> 
										<?php endif; ?>
										<?php $i--; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<div style="margin-top:3px;" class="text-center">
											<h5>Title: <?php echo e($product->title); ?></h5>
											<h5>Price: <?php echo e($product->sale_price); ?></h5>
											<a class="btn btn-info btn-sm" href="<?php echo e(route('details', $product->slug)); ?>">Details</a>
										</div>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								  </div>
							</section>
						<?php endif; ?>
					</div>
					
					<!--/recommended_items-->
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Recommended items</h2>
						<?php $__currentLoopData = $recommendedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
											<?php
												$i =1;
											?>	
											<?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
											<?php if($i > 0): ?>
											<img height="350" width="200" src="<?php echo e(asset('uploads/product/'.$image->image)); ?>" alt="" />
											<?php endif; ?>
											<?php
												$i--;
											?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<h2>Tk. <?php echo e($product->sale_price); ?></h2>
												<p><?php echo e($product->title); ?></p>
												
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>TK. <?php echo e($product->sale_price); ?></h2>
													<p><?php echo e($product->title); ?></p>
													<a href="<?php echo e(route('details',$product->slug)); ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Detials</a>
												</div>
											</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
											<li><a href="<?php echo e(route('details',$product->slug)); ?>"><i class="fa fa-plus-square"></i>Details</a></li>
										</ul>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<?php $__env->stopSection(); ?>
	<?php $__env->startPush('script'); ?>
	
	
	<?php $__env->stopPush(); ?>
	
	
	
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontend/home/index.blade.php ENDPATH**/ ?>