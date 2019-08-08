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
            <div style="margin-left:30px; margin-bottom:5px;"><a class="btn btn-sm btn-success my-3" href="{{route('category.index')}}">Back</a></div>
            
            <div class="box  span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                   
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{route('category.store')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                      @csrf
                        <fieldset>

                          <div class="control-group">
                            <label class="control-label"  for="focusedInput">Category Name</label>
                            <div class="controls">
                              <input name="category_name" 
                              value="{{old('category_name')}}"
                               placeholder="Category name" 
                               class="input-xlarge focused" 
                               id="focusedInput" type="text"
                                >
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label" for="selectError3">Category parent(Opt)</label>
                            <div class="controls">
                              <select name="category_id" id="selectError3">
                                <option value="">Select parent Categroy</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                         
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Product image</label>
                            <div class="controls">
                            <input name="banner"  class="input-file uniform_on" id="fileInput" type="file">
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