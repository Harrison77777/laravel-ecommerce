@extends('layouts.layout')
	@section('title', 'Laravel-E-commerce')
		
	@push('css')
		<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
		<style>
				.active_carousal {position: relative;}
				.owl-nav {position: absolute;top: 12%;font-size: 76px;color: #FE980F;outline: none;}
				button.owl-next {position: absolute;left: 3681%;}
				button {outline: none;}
		</style>
	@endpush
	@section('content')

	@include('frontendPartial/slide')
	<section>
		<div class="container">
			<div class="row">
				
				@include('frontendPartial/left_bar')
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">features_items</h2>
						@foreach ($products as $product)
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
											@php
												$i =1;
											@endphp	
											@foreach ($product->images as $image)
											
											@if ($i > 0)
											<img src="{{asset('uploads/product/'.$image->image)}}" alt="" />
											@endif
											@php
												$i--;
											@endphp
											@endforeach
												<h2>${{$product->sale_price}}</h2>
												<p>{{$product->title}}</p>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>${{$product->sale_price}}</h2>
													<p>{{$product->title}}</p>
												
							
						<a class="btn btn-info btn-sm" href="{{route('details',$product->slug)}}"><i class="fa fa-plus-square"></i>Details</a>
												
												</div>
											</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
											<li><a href="{{route('details',$product->slug)}}"><i class="fa fa-plus-square"></i>Details</a></li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach
					</div><!--features_items-->


					<div class="row">
						@if (count($newArrivalProducts) > 3)
						<section class="col-md-12" style="height:362px">
								<div class="heading-section">
									<h2 class="title text-center">New arrival</h2>
								</div>
								<div style="height:100%;" class="active_carousal active owl-carousel">
									@foreach ($newArrivalProducts as $product)
									<div class="itemSize item col-md-2"> 
										@php $i=1; @endphp
										@foreach ($product->images as $image)
										@if ($i > 0)
										<img style="width:100%; height: 180px;" src="{{asset('uploads/product/'.$image->image)}}" alt=""> 
										@endif
										@php $i--; @endphp
										@endforeach
										<div style="margin-top:3px;" class="text-center">
											<h5>Title: {{$product->title}}</h5>
											<h5>Price: {{$product->sale_price}}</h5>
											<a class="btn btn-info btn-sm" href="{{route('details', $product->slug)}}">Details</a>
										</div>
									</div>
									@endforeach
								  </div>
							</section>
						@endif
					</div>
					
					<!--/recommended_items-->
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Recommended items</h2>
						@foreach ($recommendedProducts as $product)
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
											@php
												$i =1;
											@endphp	
											@foreach ($product->images as $image)
											
											@if ($i > 0)
											<img height="350" width="200" src="{{asset('uploads/product/'.$image->image)}}" alt="" />
											@endif
											@php
												$i--;
											@endphp
											@endforeach
												<h2>Tk. {{$product->sale_price}}</h2>
												<p>{{$product->title}}</p>
												
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>TK. {{$product->sale_price}}</h2>
													<p>{{$product->title}}</p>
													<a href="{{route('details',$product->slug)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Detials</a>
												</div>
											</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
											<li><a href="{{route('details',$product->slug)}}"><i class="fa fa-plus-square"></i>Details</a></li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	@endsection
	@push('script')
	
	
	@endpush
	
	
	