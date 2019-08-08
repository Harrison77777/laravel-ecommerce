@extends('layouts/backendLayout')
@push('css')

@endpush
@section('backContent')

<div class="container-fluid-full">
    <div class="row-fluid">
            
      @include('backendPartial.sidebar-left')
        
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>
        
        
        <div style="margin-right:30px;" id="content" class="span12">
            @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-info p-0 m-0">{{$error}}</div>
        @endforeach 
        @endif
            <div style="margin-left:30px; margin-bottom:5px;"><a class="btn btn-sm btn-success my-3" href="{{route('productIndex')}}">Back</a></div>
            
            <div class="box  span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                   
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{route('Product.update', $product->id)}}" class="form-horizontal" method="POST" >
                      @csrf
                      @method('PUT')
                        <fieldset>

                          <div class="control-group">
                            <label class="control-label"  for="focusedInput">Product title</label>
                            <div class="controls">
                              <input name="title" 
                              value="{{$product->title}}"
                               placeholder="Product title" 
                               class="input-xlarge focused" 
                               id="focusedInput" type="text"
                                >
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label" for="selectError3">Category</label>
                            <div class="controls">
                              <select name="category" id="selectError3">
                                <option value="">Select Categroy</option>
                                @foreach ($categories as $category)
                                <option {{($product->category_id == $category->id) ? 'SELECTED' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="selectError3">Brand</label>
                            <div class="controls">
                              <select name="brand" id="selectError3">
                                <option value="">Select Brand</option>
                                @foreach ($brands as $brand)
                                <option {{($product->brand_id == $brand->id) ? 'SELECTED' : ''}} value="{{$brand->id}}">{{$brand->brand}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label">Price</label>
                            <div class="controls">
                              <input class="input-xlarge" value="{{$product->price}}" name="price" id="disabledInput" type="text" placeholder="Product price">
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label">Quantity</label>
                            <div class="controls">
                              <input class="input-xlarge" value="{{$product->stock}}" name="quantity" id="disabledInput" type="number" placeholder="Product quantity">
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label">Sale price</label>
                            <div class="controls">
                              <input class="input-xlarge" value="{{$product->sale_price}}" name="sale_price" id="disabledInput" type="text" placeholder="Product price">
                            </div>
                          </div>

                          <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls">
                            <textarea name="description"  class="cleditor" id="textarea2" rows="3">{{$product->description}}</textarea>
                            </div>
                          </div>

                          <div class="control-group">
                            <label class="control-label" for="selectError3">Product status</label>
                            <div class="controls">
                              <select name="status" id="selectError3">
                                <option value="">Select product status</option>
                                <option {{($product->status == 0) ? 'SELECTED' : ''}} value="0">Reguler</option>
                                <option {{($product->status == 1) ? 'SELECTED' : ''}} value="1">Featured</option>
                                <option {{($product->status == 2) ? 'SELECTED' : ''}} value="2">Recommended</option>
                                <option {{($product->status == 3) ? 'SELECTED' : ''}} value="3">New Arrival</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button class="btn">Cancel</button>
                          </div>
                        </fieldset>
                      </form>
                </div>
            </div><!--/span-->
       

<div class="clearfix"></div>

@endsection	
@push('script')

@endpush