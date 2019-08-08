	<?php $__env->startSection('title', 'Laravel-E-commerce'); ?>
		
	<?php $__env->startPush('css'); ?>
		
	<?php $__env->stopPush(); ?>
	<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('frontendPartial/slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<section>
		<div class="container">
			<div class="row">
				
				<?php echo $__env->make('frontendPartial/left_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Items</h2>
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
                                        <div class="productinfo text-center">
                                            //<img src="https://lorempixel.com/640/480/?71582" alt="" />
                                            <img src="<?php echo e($product->image); ?>" alt="" />
                                            <h2>$<?php echo e($product->price); ?></h2>
                                            <p><?php echo e($product->title); ?></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>$<?php echo e($product->price); ?></h2>
                                                <p><?php echo e($product->title); ?></p>
                                                <a href="<?php echo e($product->id); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                    </div>
                    <?php echo e($products->links()); ?>

			    </div>
		    </div>
	</section>
	<?php $__env->stopSection(); ?>
	<?php $__env->startPush('script'); ?>
		
	<?php $__env->stopPush(); ?>
	
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontend/home/categoryWiseProduct.blade.php ENDPATH**/ ?>