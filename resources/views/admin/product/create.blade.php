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
                    <form action="{{route('productStore')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                      @csrf
                        <fieldset>
                          <div class="control-group">
                            <label class="control-label"  for="focusedInput">Product title</label>
                            <div class="controls">
                              <input name="title" 
                              value="{{old("name")}}"
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
                                <option value="{{$category->id}}">{{$category->name}}</option>
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
                                <option value="{{$brand->id}}">{{$brand->brand}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Price</label>
                            <div class="controls">
                              <input class="input-xlarge" value="{{old("price")}}" name="price" id="disabledInput" type="text" placeholder="Product price">
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Quantity</label>
                            <div class="controls">
                              <input class="input-xlarge" value="{{old("quantity")}}" name="quantity" id="disabledInput" type="number" placeholder="Product quantity">
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Sale price</label>
                            <div class="controls">
                              <input class="input-xlarge" value="{{old("sale_price")}}" name="sale_price" id="disabledInput" type="text" placeholder="Product price">
                            </div>
                          </div>
                          <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls">
                            <textarea name="description"  class="cleditor" id="textarea2" rows="3">{{old("description")}}</textarea>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="selectError3">Product status</label>
                            <div class="controls">
                              <select name="status" id="selectError3">
                                <option value="">Select Brand</option>
                                <option value="0">Reguler</option>
                                <option value="1">Featured</option>
                                <option value="2">Recommended</option>
                                <option value="3">New Arrival</option>
                              </select>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Product image</label>
                            <div class="controls">
                            <input name="image[]"  class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                          </div> 
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Product image</label>
                            <div class="controls">
                            <input name="image[]" class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                          </div> 
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Product image</label>
                            <div class="controls">
                            <input name="image[]" class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                          </div> 
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Product image</label>
                            <div class="controls">
                            <input name="image[]" class="input-file uniform_on" id="fileInput" type="file">
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