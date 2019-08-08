@extends('layouts.layout')
    @section('title')
        {{$detailsProduct->slug.  " | Laravel E-commerce" }}
	@endsection	
	@push('css')
		
	@endpush
	@section('content')
	<section>
		<div class="container">
			<div class="row">				
            @include('frontendPartial/left_bar')             
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            @foreach ($detailsProduct->images as $image)
                            <img src="{{asset('uploads/product/'.$image->image)}}" alt="" /> 
                            @endforeach                            
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                         
                            <h2>{{$detailsProduct->title}}</h2>
                          
                            <span>
                                <span>{{$detailsProduct->sale_price}}</span>
                                <form class="col-md-12" action="{{route('addCart')}}" method="post">
                                    @csrf
                                        <input type="hidden" name="product_id" value='{{$detailsProduct->id}}'>
                                        @csrf
                                        <div style="margin-bottom:-6px!impotant;" class="form-group d-flex">
                                            <label>Quantity:</label>
                                            <input class="form-controll" name="quantity" type="number" value="1" />
                                            <button type="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                        </div>
                                        @if ($errors->has('quantity'))
                                        <span style="color:red;font-size:18px;" class='alert alert-danger'>{{$errors->first('quantity')}} </span>
                                        @endif
                                </form>
                            </span>
                            <p><b>Availability:</b> {{$detailsProduct->stock ? 'Stock In' : 'Stock out'}}</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Category:</b> {{$detailsProduct->category->name}}</p>
                            <p><b>Brand:</b> {{$detailsProduct->brand->brand}}</p>
                            <a href=""><img src="{{asset('frontend/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->                
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">Details</a></li>                           
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <hr>
                                {!!$detailsProduct->description!!}
                                <hr>
                            </div>
                        </div>                        
                    </div>
                </div><!--/category-tab-->
            </div>

    @endsection
    @push('script')
        
    @endpush
                