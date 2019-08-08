<?php $__env->startPush('css'); ?>

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
            <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-info p-0 m-0"><?php echo e($error); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <?php endif; ?>
            <div style="margin-left:30px; margin-bottom:5px;"><a class="btn btn-sm btn-success my-3" href="<?php echo e(route('productIndex')); ?>">Back</a></div>
            
            <div class="box  span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                   
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="<?php echo e(route('Product.update', $product->id)); ?>" class="form-horizontal" method="POST" >
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('PUT'); ?>
                        <fieldset>

                          <div class="control-group">
                            <label class="control-label"  for="focusedInput">Product title</label>
                            <div class="controls">
                              <input name="title" 
                              value="<?php echo e($product->title); ?>"
                               placeholder="Product title" 
                               class="input-xlarge focused" 
                               id="focusedInput" type="text"
                                >
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label" for="selectError3">Category</label>
                            <div class="controls">
                              <select name="category" id="selectError3">
                                <option value="">Select Categroy</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e(($product->category_id == $category->id) ? 'SELECTED' : ''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="selectError3">Brand</label>
                            <div class="controls">
                              <select name="brand" id="selectError3">
                                <option value="">Select Brand</option>
                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e(($product->brand_id == $brand->id) ? 'SELECTED' : ''); ?> value="<?php echo e($brand->id); ?>"><?php echo e($brand->brand); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label">Price</label>
                            <div class="controls">
                              <input class="input-xlarge" value="<?php echo e($product->price); ?>" name="price" id="disabledInput" type="text" placeholder="Product price">
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label">Quantity</label>
                            <div class="controls">
                              <input class="input-xlarge" value="<?php echo e($product->stock); ?>" name="quantity" id="disabledInput" type="number" placeholder="Product quantity">
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label">Sale price</label>
                            <div class="controls">
                              <input class="input-xlarge" value="<?php echo e($product->sale_price); ?>" name="sale_price" id="disabledInput" type="text" placeholder="Product price">
                            </div>
                          </div>

                          <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls">
                            <textarea name="description"  class="cleditor" id="textarea2" rows="3"><?php echo e($product->description); ?></textarea>
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label" for="selectError3">Product status</label>
                            <div class="controls">
                              <select name="status" id="selectError3">
                                <option value="">Select product status</option>
                                <option <?php echo e(($product->status == 0) ? 'SELECTED' : ''); ?> value="0">Reguler</option>
                                <option <?php echo e(($product->status == 1) ? 'SELECTED' : ''); ?> value="1">Featured</option>
                                <option <?php echo e(($product->status == 2) ? 'SELECTED' : ''); ?> value="2">Recommended</option>
                                <option <?php echo e(($product->status == 3) ? 'SELECTED' : ''); ?> value="3">New Arrival</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button class="btn">Cancel</button>
                          </div>
                        </fieldset>
                      </form>
                </div>
            </div><!--/span-->
       

<div class="clearfix"></div>

<?php $__env->stopSection(); ?>	
<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts/backendLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>