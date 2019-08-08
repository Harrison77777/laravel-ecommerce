<?php $__env->startSection('backContent'); ?>
<?php $__env->startPush('css'); ?>
   <style>
  
      .category-image img {
        margin-left: 66px;
        margin-bottom: 8px;
        padding: 2px;
        box-sizing: border-box;
        background: cornflowerblue;
    }
  </style> 
<?php $__env->stopPush(); ?>
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
            <div style="margin-left:30px; margin-bottom:5px;"><a class="btn btn-sm btn-success my-3" href="<?php echo e(route('social.media.index')); ?>">Back</a></div>
            
            <div class="box  span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>Social media link update</h2>
                   
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="<?php echo e(route('social.media.update', $socialMediaLink->id)); ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('PATCH'); ?>
                        <fieldset>

                          <div class="control-group">
                            <label class="control-label"  for="focusedInput">Category Name</label>
                            <div class="controls">
                              <input name="name" 
                              value="<?php echo e($socialMediaLink->name); ?>"
                               class="input-xlarge focused" 
                               id="focusedInput" type="text"
                                >
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label"  for="focusedInput">Category Name</label>
                            <div class="controls">
                              <input name="link" 
                              value="<?php echo e($socialMediaLink->link); ?>"                        
                               class="input-xlarge focused" 
                               id="focusedInput" type="text"
                                >
                            </div>
                          </div>
                          
                          <div class="category-image">
                            <img width="250" height="200" src="<?php echo e(asset('uploads/socialMediaLogo/'.$socialMediaLink->logo)); ?>" alt="">
                          </div> 
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Change social media logo</label>
                            <div class="controls">
                                <input 
                                  name="logo"  
                                  class="input-file uniform_on"
                                  id="fileInput" 
                                  type="file"
                                />
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

<?php echo $__env->make('layouts/backendLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/admin/socialMedia/edit.blade.php ENDPATH**/ ?>