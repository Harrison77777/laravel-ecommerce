<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css ">
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
            <div class="span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>Site logo details</h2>
                </div>
                <div class="box-content"> 
                    <h4>Author name : <small><?php echo e($seo->author); ?></small></h4>
                    <hr> 
                    <h4>SEO description : <p><small><?php echo e($seo->description); ?></small></p></h4>
                </div>
                <div>
                    <a class=" btn btn-sm btn-success" href="<?php echo e(route('seo.edit', $logo->id)); ?>">Update</a>
                </div>
            </div><!--/span-->
        </div>
        </div>
<div class="clearfix"></div>
<?php $__env->stopSection(); ?>	
<?php $__env->startPush('script'); ?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>   
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
      $('.table').DataTable({
        //ordering: false
      });
  } );
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts/backendLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/admin/seo/index.blade.php ENDPATH**/ ?>