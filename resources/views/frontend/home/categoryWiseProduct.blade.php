@extends('layouts.layout')
	@section('title')
		{{'Category '.$category->name}} | ' Laravel-E-commerce'
	@endsection
	@push('css')
		
	@endpush
	@section('content')

	
	<section>
		<div class="container">
			<div class="row">
				
				@include('frontendPartial/left_bar')
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">All product of {{$category->name}} category</h2>
						@foreach ($products as $product)
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
                                        <div class="productinfo text-center">
											
											@php
												$i = 1;
											@endphp
											
											@foreach ($product->images as $image)
											@if ($i > 0)
											<img src="{{asset('uploads/product/'.$image->image)}}" alt="" />	
											@endif
											@php
												$i--;
											@endphp
											@endforeach
                                            
                                            <h2>${{$product->price}}</h2>
                                            <p>{{$product->title}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>${{$product->price}}</h2>
                                                <p>{{$product->title}}</p>
                                                <a href="{{$product->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                    </div>
                    {{$products->links()}}
			    </div>
		    </div>
	</section>
	@endsection
	@push('script')
		
	@endpush
	