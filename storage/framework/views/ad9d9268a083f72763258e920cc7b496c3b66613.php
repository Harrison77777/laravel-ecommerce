<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo e($seo->description); ?>">
	<meta name="author" content="<?php echo e($seo->author); ?>">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title><?php echo $__env->yieldContent('title', 'Laravel E-commerce'); ?></title>
	<link rel="icon" href="<?php echo e(asset('uploads/logo/5d22ce58c3428.jpg')); ?>" type="image/x-icon">
	<link href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('frontend/css/prettyPhoto.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('frontend/css/price-range.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('frontend/css/animate.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('frontend/css/main.css')); ?>" rel="stylesheet">
	<!-- CSS -->


<!-- Bootstrap theme -->

	
	<link href="<?php echo e(asset('frontend/css/responsive.css')); ?>" rel="stylesheet">
	      
	<link rel="shortcut icon" href="<?php echo e(asset('uploads/logo/5cf43f9e92c9f.jpg')); ?>">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('frontend/images/ico/apple-touch-icon-144-precomposed.png')); ?>">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('frontend/images/ico/apple-touch-icon-114-precomposed.png')); ?>">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('frontend/images/ico/apple-touch-icon-72-precomposed.png')); ?>">
	<link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('frontend/images/ico/apple-touch-icon-57-precomposed.png')); ?>">
    <?php echo $__env->yieldPushContent('css'); ?>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<?php $__currentLoopData = $socialMediaLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMediaLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a target="_blank" href="<?php echo e($socialMediaLink->link); ?>">
											<img height="25" width="25" src="<?php echo e(asset('uploads/socialMediaLogo/'.$socialMediaLink->logo)); ?>" alt="Social media logo">
										</a>
									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a style="color:black;" href="<?php echo e(route('home')); ?>">
								<img height="50" width="100" src="<?php echo e(asset('uploads/logo/'.$logo->logo)); ?>" alt="">
							</a>
							<small><?php echo e($logo->slogan); ?></small>
						</div>
					
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li style="margin-right:8px;">
									<a href="<?php echo e(route('cartIndex')); ?>"><i class="fa fa-shopping-cart"></i> Cart 
										<span id="totalItems" class="badge-danger styleCart"><?php echo e($totalQuantity); ?></span></a>
								</li>
                                <?php if(auth()->guard()->guest()): ?>
                                
								<li>
									<a href=""><i class="fa fa-crosshairs"></i>Contract</a>
								</li>
								
								<li>
									<a href="<?php echo e(route('register')); ?>"><i class="fa fa-user"></i>Create an account</a>
								</li> 
                                <li>
									<a href="<?php echo e(route('login')); ?>"><i class="fa fa-lock"></i> Login</a>
								</li> 
                                <?php endif; ?>

								<?php if(auth()->guard()->check()): ?>
								<div class="btn-group">
									<button type="button" class="cStyle btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo e(Auth::user()->username); ?> <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li>
											<a href="<?php echo e(route('user.dashboard.index')); ?>">Dashboard</a>
										</li> 
										<li>
											<a href="#"></a>
										</li>
										<li>
											<a onclick=
												"
												event.preventDefault();
												document.getElementById('logout-form').submit();
												" href=""
											> Logout</a>
										</li> 
									</ul>
								</div>
									
								
								<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
									<?php echo csrf_field(); ?>
								</form>
                                <?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
						<li><a href="<?php echo e(route('home')); ?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="">Products</a></li>
										<li><a href="">Product Details</a></li> 
										<li><a href="">Checkout</a></li> 
										<li><a href="">Cart</a></li> 
										<li><a href="">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="<?php echo e(route('search')); ?>" method="get">
								<?php echo csrf_field(); ?>
								<input name="search" type="text" placeholder="Search"/>
								<button class="btn btn-success btn-md" type="submit">Search</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <?php echo $__env->yieldContent('content'); ?>

    <footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<?php if(Request::is("frontend/home")): ?>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="" class="searchform">
								
								<input type="text" name="search" placeholder="Your email address" />
								<button type="submit" class="btn btn-success">Subsribe</button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					<?php endif; ?>
					
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	<script src="<?php echo e(asset('frontend/js/jquery-3.3.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/jquery.scrollUp.min.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/price-range.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/jquery.prettyPhoto.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script> 
	<script>
		 $('.active_carousal').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		}); 	 
	</script>
		 
    <?php echo $__env->yieldPushContent('script'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\lvEcommerce\Ecommerce\resources\views/layouts/layout.blade.php ENDPATH**/ ?>