<section id="slider"><!--slider-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner">
                        <?php
                            $i = 0;
                        ?>
                        <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++; ?>
                        <div style="widht:100%;" class="item <?php echo e($i == 1 ? 'active' : ''); ?> ">  
                            <div style="widht:100%;">
                                <div style="height:450px; width:100%;" class="slide-area">
                                    <img 
                                        style="height:100%; width:100%;" 
                                        src="<?php echo e(asset('uploads/slides/'.$slide->image)); ?>" 
                                        class="slide-image" 
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                    
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider--><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontendPartial/slide.blade.php ENDPATH**/ ?>