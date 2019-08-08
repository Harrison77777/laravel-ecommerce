<div class="col-sm-3">
    <div class="left-sidebar">
        <h2  style="<?php echo e(Request::is('/frontend/productDetails') ? 'margin-top:30px;' : ''); ?>">Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-parent="#accordian" 
                            href="#<?php echo e($category->slug); ?>">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                               <img style="height:22px; width:28px;border-radius: 7px;" src="<?php echo e(asset('uploads/category/'.$category->banner)); ?>" alt=""> <a href="<?php echo e(route('categoryWiseProduct', $category->id )); ?>"><?php echo e($category->name); ?></a>
                            </a>
                        </h4>
                    </div>
                   
                    <div id="<?php echo e($category->slug); ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="accodionList">
                                <?php $__currentLoopData = $category->child_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li style="margin-top:4px;">
                                        <img style="height:20px; width:20px;border-radius: 7px;" src="<?php echo e(asset('uploads/category/'.$parent->banner)); ?>" alt="">
                                    <a href="<?php echo e(route('categoryWiseProduct',  $parent->id )); ?>"><?php echo e($parent->name); ?></a>
                                </li> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>   
        </div><!--/category-products-->
    
        <div class="brands_products"><!--brands_products-->
            <h2>Brands</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(url('frontend/brandWiseProducts', $brand->id)); ?>"> <span class="pull-right"></span>
                    <?php echo e($brand->brand); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div><!--/brands_products-->
    </div>
</div><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontendPartial/left_bar.blade.php ENDPATH**/ ?>