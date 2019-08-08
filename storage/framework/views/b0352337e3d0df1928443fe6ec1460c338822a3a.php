<?php $__env->startPush('css'); ?>

<style>
    ul.pagination {
        list-style: none;
        display: inline-flex;
    }
    li#DataTables_Table_0_previous {
        padding: 0px;
        margin: 9px;
    }
    li.paginate_button.page-item {
        margin: 9px;
    }
    div#DataTables_Table_0_length {
        float: left;
    }
    div#DataTables_Table_0_filter {
        float: right;
    }
    .box-header{
        margin-left: -28px;
    }
    
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('backContent'); ?>

<div class="container-fluid-full">
    <div class="row-fluid">   
      <?php echo $__env->make('backendPartial.sidebar-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>
        
        <div style="margin-right:30px;" id="content" class="span12">
                <?php if(Session::has('successMsg')): ?>
                <div style="width: 100%;" class="alert alert-success d-block">
                    <?php echo e(session('successMsg')); ?>

                </div>
            <?php endif; ?>
            <div style="margin-left:3px; margin-bottom:5px;">
                <a class="btn btn-sm btn-success my-3" href="<?php echo e(route('productIndex')); ?>">Back</a>
            </div>
            
            <div class="span12">
                <div class="box-header" data-original-title>
                    
                    
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div>
                        <h4>product name: <?php echo e($product->title); ?> </h4> 
                        <h4>product brand: <?php echo e($product->brand->brand); ?> </h4> 
                        <h4>product category: <?php echo e($product->category->name); ?> </h4> 
                        <h4>product price: <?php echo e($product->price); ?> </h4> 
                        <h4>product price: <?php echo e($product->sale_price); ?> </h4> 
                        <h4>product stock: <?php echo e($product->stock); ?> </h4> 
                        <h4>product status: <?php echo e($product->status ? 'Active' : 'Unactive'); ?> </h4> 
                    </div>
                    <div class="product-all-image">
                        <h5>All product photo</h5>
                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img height="200" width="250" src="<?php echo e(asset('uploads/product/'.$image->image)); ?>" alt="">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>    
                </div>
            </div><!--/span-->
        </div>

<div class="clearfix"></div>

<?php $__env->stopSection(); ?>	
<?php $__env->startPush('script'); ?>

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts/backendLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/admin/product/show.blade.php ENDPATH**/ ?>