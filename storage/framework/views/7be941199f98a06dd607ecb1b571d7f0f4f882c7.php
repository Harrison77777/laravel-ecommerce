 
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
    td.center {
        margin-bottom: -22px;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('backContent'); ?>
<a href=""></a>
<div class="container-fluid-full">
    <div class="row-fluid">
            
      <?php echo $__env->make('backendPartial.sidebar-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>
        <a class="btn btn-sm btn-success" href="">Back</a>
        <div style="margin-right:30px;" id="content" class="span12">
                <?php if(Session::has('successMsg')): ?>
                <div style="width: 100%;" class="alert alert-success d-block">
                    <?php echo e(session('successMsg')); ?>

                </div>
            <?php endif; ?>
            <div style="margin-left:3px; margin-bottom:5px;">
                    <a class="btn btn-sm btn-success" href="<?php echo e(route('order.index')); ?>">Back</a>
                    <h1>Order's all informaiton</h1>
                    
                    <hr>
                    <h4><strong>Name </strong> :  <small><?php echo e($order->name); ?></small> </h4>
                    <h4>Email : <small><?php echo e($order->email); ?></small></h4>
                    <h4>Phone_no : <small><?php echo e($order->phone_no); ?></small></h4>
                    <h4>Payment method : <small><?php echo e($order->payment_method); ?></small></h4>
                    <h4>Is_paid : <small><?php echo e($order->is_paid ? 'Paid': 'Not paid'); ?></small> </h4>
                    <h4>Is_completed  : <small><?php echo e($order->is_completed ? 'Completed': 'Not completed'); ?></small> </h4>
                    <h4>Is_seen_by_admin : <small><?php echo e($order->is_seen_by_admin ? 'Seen': 'Not seen'); ?></small></h4>
                    <hr>
                    <h4>Shipping_address : <?php echo e($order->shipping_address); ?></h4>
                    <hr>
                    <a onclick=
                    "
                    event.preventDefault();
                    document.getElementById('update_paid-<?php echo e($order->id); ?>').submit();
                    " 
                    href=""
                    class='btn btn-sm <?php echo e($order->is_paid ? 'btn-success': 'btn-danger'); ?>'
                    >
                    <?php echo e($order->is_paid ? 'Paid': 'Confirm paid'); ?>

                    </a> 
                    <form id="update_paid-<?php echo e($order->id); ?>" style='display:none;' action="<?php echo e(route('update.order.paid',$order->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                    </form>

                    <a onclick=
                    "
                    event.preventDefault();
                    document.getElementById('update_complete-<?php echo e($order->id); ?>').submit();
                    " 
                    href=""
                    class='btn btn-sm <?php echo e($order->is_completed ? 'btn-success': 'btn-danger'); ?>'
                    >
                    <?php echo e($order->is_completed ? 'Completed': 'Confim complete'); ?>

                    </a> 
                    <form id="update_complete-<?php echo e($order->id); ?>" style='display:none;' action="<?php echo e(route('update.order.complete',$order->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                    </form>

                    <a href="<?php echo e(route('order.invoice', $order->id)); ?>" class='btn btn-sm btn-success'>Generate Invoice</a> 
            </div>
            <div class="span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>Order's all products</h2>
                   
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Title</th>
                              <th>Category</th>
                              <th>Brand</th>
                              <th>Quantity</th>
                              <th>Image</th>
                              <th>Price</th>
                              <th>Total price</th>
                              <th>Actions</th>
                          </tr>
                      </thead>   
                      <tbody style="text-align:center;">
                            <?php
                                $totalPrice = 0;
                            ?>
                             <?php $__currentLoopData = $order->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr style="text-align:center;">
                            <td><?php echo e($cart->product->title); ?></td>
                            <td style="text-align:center;" class="center"><?php echo e($cart->product->category->name); ?></td>
                            <td style="text-align:center;" class="center"><?php echo e($cart->product->brand->brand); ?></td>
                            <td style="text-align:center;" class="center"><?php echo e($cart->product_quantity); ?></td>
                            <?php $i=1; ?>
                            <?php $__currentLoopData = $cart->product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($i > 0): ?>
                                    <td class="center"><img style="height:45px; width:50px;" src="<?php echo e(asset('uploads/product/'.$image->image)); ?>" alt=""></td>
                            <?php endif; ?>
                            <?php $i--; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <td style="text-align:center;" class="center"><?php echo e($cart->product->price); ?></td>
                            <td style="text-align:center;" class="center"><?php echo e($cart->product->price * $cart->product_quantity); ?></td>
                            <?php
                                $totalPrice += $totalPrice + $cart->product->price * $cart->product_quantity 
                            ?>
                            <td  style="display:inline-block;" class="center">
                                <a
                                onclick="
                                event.preventDefault();
                                document.getElementById('deleteForm-<?php echo e($cart->id); ?>').submit();
                                "
                                 class="btn btn-danger" href="index.php">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                                <form id="deleteForm-<?php echo e($cart->id); ?>" action="<?php echo e(route('order.product.delete',$cart->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                </form>
                            </td>  
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                      </tbody>
                  </table>
                  <h4>Total price : <?php echo e($totalPrice); ?></h4>            
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

<?php echo $__env->make('layouts/backendLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/admin/order/details.blade.php ENDPATH**/ ?>