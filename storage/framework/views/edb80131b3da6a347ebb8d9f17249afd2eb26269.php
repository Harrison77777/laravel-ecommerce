    <?php $__env->startSection('title'); ?>
		Checkout page of Laravel-E-commerce
	<?php $__env->stopSection(); ?>
	<?php $__env->startPush('css'); ?>
		
	<?php $__env->stopPush(); ?>
	<?php $__env->startSection('content'); ?>
	<section style="margin-bottom: 50px;">
		<div class="container">
			<div class="row">
                <div class="col-sm-7">
                    <div class="heading">
                        <h3>Checkout information of <?php echo e(Auth::user()->username); ?> . </h3>
                      <small>If you want to change your information you can change for here.</small>  
                    </div>
                    <div class="update-form">
                            <form action="<?php echo e(route('user.dashboard.update')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("PATCH"); ?>
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input 
                                        type="text" 
                                        class="form-control" 
                                        value="<?php echo e(Auth::user()->username); ?>" 
                                        name="username" 
                                        id="username" 
                                        placeholder="Email"
                                  />
                                  <span style="color:red"><?php echo e($errors->first('username')); ?></span>
                                </div>
                
                                <div class="form-group">
                                  <label for="phone_no">Phone_no</label>
                                  <input 
                                        type="text" 
                                        class="form-control" name="phone_no" 
                                        value="<?php echo e(Auth::user()->phone_no); ?>"
                                        class="form-control" id="phone_no"
                                        placeholder="Password"
                                  />
                                  <span style="color:red"><?php echo e($errors->first('Phone_no')); ?></span>
                                </div>
                                <div class="form-group">
                                  <label for="shipping_address">Shipping_address</label>
                                  <textarea 
                                        name="shipping_address" 
                                        class="form-control" 
                                        rows="3"><?php echo e(Auth::user()->shipping_address); ?>

                                        
                                </textarea>
                                  <span style="color:red"><?php echo e($errors->first('shipping_address')); ?></span>
                                </div>

                                <div class="form-group">
                                  <label for="street_address">Street_address</label>
                                  <input 
                                        type="text" 
                                        class="form-control" name="street_address" 
                                        value="<?php echo e(Auth::user()->street_address); ?>"
                                        class="form-control" id="street_address"
                                  />
                                  
                                </div>
                                <span style="color:red"><?php echo e($errors->first('street_address')); ?></span>
                                
                                <div class="form-group">
                                  <label for="division">Division</label>
                                  <input 
                                        type="text" 
                                        class="form-control" 
                                        value="<?php echo e(auth::user()->division); ?>" 
                                        name="division" id="division"
                                  />
                                  <span style="color:red"><?php echo e($errors->first('division')); ?></span>
                                </div>
                
                                <div class="form-group">
                                  <label for="district">District</label>
                                  <input 
                                        type="text" 
                                        class="form-control" 
                                        value="<?php echo e(Auth::user()->district); ?>" 
                                        name="district" 
                                        id="district"
                                  />
                                 <span style="color:red"><?php echo e($errors->first('district')); ?></span>
                                </div>
                
                                <div class="form-group">
                                  <label for="zip_code">Zip-code</label>
                                  <input 
                                        type="text" 
                                        class="form-control" 
                                        name="zip_code" 
                                        value="<?php echo e(Auth::user()->zip_code); ?>" 
                                        id="zip_code"
                                  />
                                  <span style="color:red"><?php echo e($errors->first("zip_code")); ?></span>
                                </div>
                              
                                <button type="submit" class="btn btn-success btn-block">Update information</button>
                              </form>
                              <form style="margin-top:10px;" id="orderForm" action="<?php echo e(route('check.order')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <label for="zip_code">Select your payment method </label>
                                    <select style="margin-bottom:12px;" class="form-controll payment" name="payment_method" id="">
                                        <option value="" disabled>Select your payment option</option>
                                        <option value="Cash_on_dalivari">Cash on dalivari</option>
                                        <option value="bKash">bKash</option>
                                        <option value="Roket">Roket</option>
                                    </select>
                                    <div class="paymet-mathod">

                                        <div id="cash-on-delivery" class="cash-on-delivery hidden" style="height:50px;background: gray; border-radius:5px; font-size:18px;" class="bkash">
                                              <p style="margin:0px;">Please hit the order button and make your order..</p>   
                                        </div>
                                        <div id="bKash-payment" class="bKash-payment hidden" style="height:100px;background: gray; border-radius:5px; font-size:18px;" class="bkash">
                                              <p style="margin:0px;">bKash no: xxxxxxxxxx</p>  
                                              <p style="margin:0px;">Account type : Personal</p>  
                                        </div>

                                        <div id="roket-payment" class="roket-payment hidden" style="height:100px;background: gray; border-radius:5px;font-size:18px;" class="bkash">
                                              <p style="margin:0px;">Roket no: xxxxxxxxxx</p>  
                                              <p style="margin:0px;">Account type : Bank</p>  
                                        </div>

                                        <div class="form-group payment_number hidden">
                                            <label for="zip_code">payment no:</label>
                                            <input 
                                                type="text" 
                                                class="form-control " 
                                                name="payment_number" 
                                                value="" 
                                                id="zip_code"
                                                placeholder="payment number"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="shipping_address">Shipping instruction message (Optional)</label>
                                        <textarea
                                            name="message" 
                                            class="form-control" 
                                            rows="3"
                                            placeholder="Shipping instruction message"
                                        >
                                               
                                            
                                       
                                        </textarea>
                                        <span style="color:red"><?php echo e($errors->first('shipping_address')); ?></span>
                                        </div>
                                </form>
                              <a onclick="event.preventDefault();document.getElementById('orderForm').submit();" href="" class="btn btn-success btn-block">Order now</a>
                        </div>
                    </div>
                    <div class='col-md-5'>
                   
                   
                        <section id="cart_items">
                            <div class="table-responsive cart_info">
                                <table style="margin-bottom:-1px!important;margin-top:10px;" class="table table-condensed">
                                    <thead class=" text-center">
                                        <tr class="cart_menu">
                                            <td class="image">No</td>
                                            <td class="image">Name</td>
                                            <td class="description">Image</td>
                                            <td class="quantity">Quantity</td>
                                            <td class="price">Total price</td>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                            
                                        <?php $subTotal = 0; ?>
                                        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                                <td class="total"><?php echo e($loop->index + 1); ?></td>
                                                <td class="cart_description text-center">
                                                    <h4><a href=""><?php echo e($cart->product->title); ?></a></h4>
                                                </td>
                                                <td class="cart_product">
                                                    <?php $i = 1;?>
                                                    <?php $__currentLoopData = $cart->product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($i > 0): ?> 
                                                        <a href=""><img style="height:40px;width:30px;" src="<?php echo e(asset('uploads/product/'.$image->image)); ?>" alt=""></a>
                                                        <?php endif; ?>
                                                    <?php $i--;	?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td> 
                                
                                                <td class="cart_quantity">
                                                    <?php echo e($cart->product_quantity); ?>

                                                </td>
                                              
                                                <td class="price"><p class="cart_total_price"><?php echo e($cart->product_quantity * $cart->product->price); ?>.00</p></td>
                                                <?php $subTotal += $subTotal + $cart->product_quantity * $cart->product->price; ?>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        
                    </section> <!--/#cart_items-->
                
                    <section id="do_action">
                        
                            <div class="heading">
                                <h3>What would you like to do next?</h3>
                            </div>
                            <div class="row">
                                 <div class="col-sm-12">
                                    <div class="total_area">
                                        <ul>
                                            <li>Cart Sub Total <span><?php echo e($subTotal); ?></span></li>
                                            <li>Eco Tax <span>10%</span></li>
                                            <li>Shipping Cost <span>Free</span></li>
                                            <li>Total <span><?php echo e($subTotal/100 *10 + $subTotal); ?></span></li>
                                            <a class="btn btn-default check_out" href="<?php echo e(route('cartIndex')); ?>">Change cart</a>
                                        </ul>  
                                    </div>
                                </div>
                            </div>
                    </section><!--/#do_action-->
                            </div>
                        </div>
                    </div>
            </section>       
    <?php $__env->stopSection(); ?>
	<?php $__env->startPush('script'); ?>
		<script>
            $(document).ready(function(){
                $('.payment').change(function(){
                    var payment = $('.payment').val();
                     if(payment == 'Cash_on_dalivari'){
                       $('#cash-on-delivery').removeClass('hidden');
                       $('#roket-payment').addClass('hidden');
                       $('#bKash-payment').addClass('hidden');
                       $('.payment_number').addClass('hidden');
                    }else if(payment == 'bKash'){
                        $('#bKash-payment').removeClass('hidden'); 
                        $('#cash-on-delivery').addClass('hidden');
                        $('#roket-payment').addClass('hidden');
                        $('.payment_number').removeClass('hidden'); 
                    }else if(payment == 'Roket'){
                        $('#roket-payment').removeClass('hidden'); 
                        $('#cash-on-delivery').addClass('hidden');
                        $('#bKash-payment').addClass('hidden'); 
                        $('.payment_number').removeClass('hidden'); 
                    }else if(payment == ''){
                        $('#roket-payment').addClass('hidden'); 
                        $('#cash-on-delivery').addClass('hidden');
                        $('#bKash-payment').addClass('hidden'); 
                        $('.payment_number').removeClass('hidden'); 
                    }
    
                    });
            });
            
                
           
           
        </script>
	<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/frontend/checkOut/index.blade.php ENDPATH**/ ?>