    <?php $__env->startSection('title'); ?>
        <?php echo e($detailsProduct->slug.  " | Laravel E-commerce"); ?>

	<?php $__env->stopSection(); ?>	
	<?php $__env->startPush('css'); ?>
		
	<?php $__env->stopPush(); ?>
	<?php $__env->startSection('content'); ?>
	<section>
		<div class="container">
			<div class="row">				
            <?php echo $__env->make('frontendPartial/left_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>             
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <?php $__currentLoopData = $detailsProduct->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('uploads/product/'.$image->image)); ?>" alt="" /> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                         
                            <h2><?php echo e($detailsProduct->title); ?></h2>
                          
                            <span>
                                <span><?php echo e($detailsProduct->sale_price); ?></span>
                                <form class="col-md-12" action="<?php echo e(route('addCart')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value='<?php echo e($detailsProduct->id); ?>'>
                                        <?php echo csrf_field(); ?>
                                        <div style="margin-bottom:-6px!impotant;" class="form-group d-flex">
                                            <label>Quantity:</label>
                                            <input class="form-controll" name="quantity" type="number" value="1" />
                                            <button type="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                        </div>
                                        <?php if($errors->has('quantity')): ?>
                                        <span style="color:red;font-size:18px;" class='alert alert-danger'><?php echo e($errors->first('quantity')); ?> </span>
                                        <?php endif; ?>
                                </form>
                            </span>
                            <p><b>Availability:</b> <?php echo e($detailsProduct->stock ? 'Stock In' : 'Stock out'); ?></p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Category:</b> <?php echo e($detailsProduct->category->name); ?></p>
                            <p><b>Brand:</b> <?php echo e($detailsProduct->brand->brand); ?></p>
                            <a href=""><img src="<?php echo e(asset('frontend/images/product-details/share.png')); ?>" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->                
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">Details</a></li>                           
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <hr>
                                <?php echo $detailsProduct->description; ?>

                                <hr>
                            </div>
                        </div>                        
                    </div>
                </div><!--/category-tab-->
            </div>

    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('script'); ?>
        
    <?php $__env->stopPush(); ?>
                
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontend/show/show.blade.php ENDPATH**/ ?>