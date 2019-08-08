	<?php $__env->startSection('title', 'Laravel-E-commerce'); ?>	
	<?php $__env->startPush('css'); ?>
	<?php $__env->stopPush(); ?>
	<?php $__env->startSection('content'); ?>
		<div class="container">
			
				<div class="breadcrumbs">
						<ol class="breadcrumb">
							<li><a href="<?php echo e(route('home')); ?>">Home</a></li>
							<li class="active">Shopping Cart</li>
						</ol>
						<a class="btn btn-default update" href="<?php echo e(route('home')); ?>">Continue shopping</a>
				</div>
				<div  style="margin-top: -64px;" class="alert alert-warning cart_empty_msg"></div>
		</div>
			<input type="hidden" class="image_url" value="<?php echo e(asset('uploads/product/')); ?>"/>
	<section id="cart_items">
		<div class="container">
				<input type="hidden" class="cart-products-show-url" value="<?php echo e(route('show.cart.products')); ?>">
				<span class="alert successMsg alert-success alert-block"></span>
				<span class="alert errorMsg alert-danger alert-block"></span>
				<div  style="margin-top: -64px;" class="alert alert-warning cart_delete_msg"></div>
				
			<div class="table-responsive cart_info">
				<table style="margin-bottom:-1px!important;margin-top:10px;" class="table table-condensed">
					<thead class=" text-center">
						<tr class="cart_menu">
							<td class="image">No</td>
							<td class="image">Name</td>
							<td class="description">Image</td>
							<td class="quantity">Quantity</td>
							<td class="price">Price</td>
							<td class="price">Total price</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody class="text-center show_cart_products">
					
					</tbody>
				</table>  
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span></span></li>
							<li>Eco Tax <span>10%</span></li>
							<li>Shipping Cost <span>Free</span></li>
							 <li>Total <span class="totalPrice"></span></li> 
						</ul>						
							<a class="btn btn-default check_out" href="<?php echo e(route('check.index')); ?>">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<div  class="container">
			
	</div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('script'); ?>
		<script>
				$(document).ready(function(){
					$.ajaxSetup({
					  headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
					});
				  });
				  
			 if($('.successMsg').val() == ''){
				$('.successMsg').hide();
			 } 
			if($('.errorMsg').val() == ''){
				$('.errorMsg').hide(); 
			}  
			if($('.cart_empty_msg').val() == ''){
				$('.cart_empty_msg').hide(); 
			}  
			if($('.cart_delete_msg').val() == ''){
				$('.cart_delete_msg').hide(); 
			}    
	 
		
	function showCartsProducts(){
		var url = $('.cart-products-show-url').val();
		var image_url = $('.image_url').val();
		$.ajax({
			url:url,
			type:'get',
			dataType:'json',
			success:function(data){
				if($.isEmptyObject(data.cartEmptyMsg)){
					var carts = data.carts;
				
				var showCartProduct = null;
				var i = 1;
				var totalPrice = 0;
				$.each(carts,function(k,cart){

					showCartProduct += '<tr>';
					showCartProduct += '<td class="total">'+i++;+'</td>';
					showCartProduct += '<td  class="cart_description text-center">';
					showCartProduct += '<h4>'+cart.product.title+'</h4>';
					showCartProduct +=	'</td>';
					showCartProduct +=	'<td class="cart_product">';
					var n = 1;
					$.each(cart.product.images, function(k,image){
						
						if (n > 0) {
							showCartProduct +=	'<img style="height:50px;width:70px;" src="'+image_url+'/'+image.image+'" alt="">';
						}
						n--;
					});
					
					showCartProduct +=	'</td>'; 
						
					showCartProduct +=	'<td class="cart_quantity">';
					showCartProduct +=	'<div class="cart_quantity_button">';
					showCartProduct +=	'<form id="cartQuantityUpdate" method="POST" action="'+'<?php echo e(url('cart/frontend/addCart/update/')); ?>'+'/'+cart.id+'">';
					showCartProduct +=  '<?php echo csrf_field(); ?>';
					showCartProduct +=	'<div class="form-group">';
					showCartProduct +=	'<div style="display: flex;justify-content: center;" class="row">';
					showCartProduct +=	'<input style="width: 80px;height:30px; margin-right:2px;" class="cart_quantity_input form-control form-controll-sm" type="number" name="cart_quantity" id="cart_quantity" value="'+cart.product_quantity+'" size="2"/>';
					showCartProduct +=	'<button type="submit" class="btn btn-success btn-sm">Update</button>';
					showCartProduct +=	'</div>';
					showCartProduct +=	'</div>';										
					showCartProduct +=  '</form>';
					showCartProduct +=	'</div>';
					showCartProduct +=	'</td>';
					showCartProduct +=	'<td class="cart_total">';
					showCartProduct +=	'<p class="cart_total_price">'+cart.product.price+'</p>';
					showCartProduct +=	'</td>';
					showCartProduct +=	'<td class="price"><p class="cart_total_price">'+cart.product.price*cart.product_quantity+'</p></td>';
					showCartProduct +='<td class="cart_delete">';
					showCartProduct +='<a id="deleteCart" data-id="'+cart.id+'" class="btn btn-danger text-danger btn-sm" href="<?php echo e(url('cart/frontend/addCart/delete')); ?>">x</a>';
					showCartProduct +=	'</td>';
					showCartProduct +=  '</tr>';
					totalPrice = totalPrice + cart.product_quantity*cart.product.price
				});
				 
				$('.show_cart_products').html(showCartProduct);
				$('.totalPrice').html(totalPrice);
				}else{
					$('.cart_empty_msg').show();
					 $('#cart_items').empty();
					 $('#do_action').empty();
					$('.cart_empty_msg').html(data.cartEmptyMsg);
				}
				
			}
		});
	}
	
		showCartsProducts();

        $(document).on('submit', '#cartQuantityUpdate', function(e){
            e.preventDefault();
            var url = $(this).attr('action');
            var type = $(this).attr('method');
            var input = $(this).serialize();
            
            var cart_quantity = $('#cart_quantity').val();
             $.ajax({
                url:url,
                type:type,
                data:input,
                dataType:'json',
                success:function(data){
                    
                    if($.isEmptyObject(data.errorMsg)){
                        $('.successMsg').show();
						$('.errorMsg').hide();
						$('.cart_delete_msg').hide(); 
                        $('.successMsg').html(data.successMsg);
                        
                         $('#totalItems').html(data.cartQuantityCount); 
                         showCartsProducts(); 
                    }else if($.isEmptyObject(data.successMsg)){
                        $('.successMsg').hide();
                        $('.errorMsg').show();
                        $('.errorMsg').html(data.errorMsg);
                    }
                }
            });  
        });

		$(document).on('click','#deleteCart',function(e){
            e.preventDefault();
            var url = $(this).attr('href');
            var cartId = $(this).data('id');
            $.ajax({
                url:url,
                type:'post',
                data:{cartId:cartId},
                dataType:'json',
                success:function(data){
					
					 	if ($.isEmptyObject(data.cartDeleteErrorMsg)) {
							$('.successMsg').hide();
							$('.errorMsg').hide(); 
					 		$('.cart_delete_msg').show();
							 $('.cart_delete_msg').html(data.cartDeleteSuccessMsg);
							 $('#totalItems').html(data.cartQuantityCount); 
							  showCartsProducts();
					 	}else{
					 		 console.log(data.cartDeleteErrorMsg);
					 		$('.cart_delete_msg').show();
							 $('.cart_delete_msg').html(data.cartDeleteErrorMsg);
					 	} 
                }
            });
		});   
        	 
		</script>
    <?php $__env->stopPush(); ?>
                
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontend/addToCart/cart.blade.php ENDPATH**/ ?>