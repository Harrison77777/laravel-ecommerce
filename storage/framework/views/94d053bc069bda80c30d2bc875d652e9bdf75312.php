<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<style>
    .statbox .number {
        font-size: 41px;
        position: absolute;
        top: 10px;
        right: 13px;
        display: flex;
        justify-content: center;
        align-items: center;
        align-self: center;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection("backContent"); ?>

<div class="container-fluid-full">
    <div class="row-fluid">
            
      <?php echo $__env->make('backendPartial.sidebar-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>
        
        <!-- start: Content -->
        <div id="content" class="span10">
    
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a> 
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Dashboard</a></li>
        </ul>
        <div class="row-fluid">
            
            <div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
                <div class="boxchart">Total product</div>
                <div class="number"><?php echo e($countProduct); ?>  <i class="fa fa-briefcase"></i></div>	
            </div>
            <div class="span3 statbox green" onTablet="span6" onDesktop="span3">
                <div class="boxchart">Total Category</div>
                <div class="number"><?php echo e($countCategory); ?><i class="icon-arrow-up"></i></div>
              
            </div>
            <div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
                <div class="boxchart">Total unshifted order</div>
                <div class="number"><?php echo e($countUnpaidOrder); ?><i class="icon-arrow-up"></i></div>
                <div class="title">orders</div>
                <div class="footer">
                    <a href="#"> read full report</a>
                </div>
            </div>
            <div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
                <div class="boxchart">Total Verified users</div>
                <div class="number"><?php echo e($countActivatedUser); ?><i class="icon-arrow-down"></i></div>
                <div class="title">visits</div>
                <div class="footer">
                    <a href="#"> read full report</a>
                </div>
            </div>	
            
        </div>		

     
        
         <div class="row-fluid hideInIE8 circleStats">
            <div class="span2" onTablet="span4" onDesktop="span2">
                <div class="circleStatsItemBox yellow">
                    <div class="header">Disk Space Usage</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <input type="text" value="58" class="whiteCircle" />
                    </div>		
                    <div class="footer">
                        <span class="count">
                            <span class="number">20000</span>
                            <span class="unit">MB</span>
                        </span>
                        <span class="sep"> / </span>
                        <span class="value">
                            <span class="number">50000</span>
                            <span class="unit">MB</span>
                        </span>	
                    </div>
                </div>
            </div>

            


            

            

            
        </div>		
                    
      

        
        

        <!-- end: Content -->
    </div><!--/#content.span10-->
    </div><!--/fluid-row-->
    
 <div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div> 

<div class="clearfix"></div>

<?php $__env->stopSection(); ?>	
<?php $__env->startPush('script'); ?>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <?php echo Toastr::message(); ?>

<?php $__env->stopPush(); ?>
	
<?php echo $__env->make('layouts/backendLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>