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
            <div style="margin-left:3px; margin-bottom:5px;"><a class="btn btn-sm btn-success my-3" href="<?php echo e(route('category.create')); ?>">Add Category</a>
            </div>
            
            <div class="span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>All categories</h2>
                   
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-sm table-bordered">
                      <thead>
                          <tr>
                              <th style="text-align:center;">Serial</th>
                              <th style="text-align:center;">Name</th>
                              <th style="text-align:center;">Slug</th>
                              <th style="text-align:center;">Banner</th>
                              <th style="text-align:center;">Actions</th>
                          </tr>
                      </thead>   
                      <tbody style="text-align:center;">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categroy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="text-align:center;">
                            <td style="text-align:center;" class="center"><?php echo e($loop->index +1); ?></td>
                            <td><?php echo e($categroy->name); ?></td>
                            <td><?php echo e($categroy->slug); ?></td>
                            <td class="center">
                                <img style="height:45px; width:50px;" src="<?php echo e(asset('uploads/category/'.$categroy->banner)); ?>" alt="">
                            </td>
                           
                            <td  style="display:inline-block;" class="center">
                                <a class="btn btn-success" href="<?php echo e(route('category.show', $categroy->id)); ?>">
                                    <i class="halflings-icon white zoom-in"></i>                                     
                                </a>
                                <a class="btn btn-info" href="<?php echo e(route('category.edit', $categroy->id)); ?>">
                                    <i class="halflings-icon white edit"></i>                                       
                                </a>
                                <a
                                onclick="
                                event.preventDefault();
                                document.getElementById('deleteForm-<?php echo e($categroy->id); ?>').submit();
                                "
                                 class="btn btn-danger" href="index.php">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                                <form id="deleteForm-<?php echo e($categroy->id); ?>" action="<?php echo e(route('category.delete',$categroy->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                </form>
                            </td>  
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                  </table>            
                </div>
            </div><!--/span-->
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

<?php echo $__env->make('layouts/backendLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/admin/category/index.blade.php ENDPATH**/ ?>