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
            <div style="margin-left:30px; margin-bottom:5px;"><a class="btn btn-sm btn-success my-3" href="{{route('social.media.index')}}">Back</a></div>
            
            <div class="box  span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                   
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{route('social.media.store')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                      @csrf
                        <fieldset>
                            <div class="control-group">
                              <label class="control-label"  for="focusedInput">social media name</label>
                              <div class="controls">
                                <input name="name" 
                                    value="{{old('name')}}"
                                    placeholder="Social media name" 
                                    class="input-xlarge focused" 
                                    id="focusedInput" 
                                    type="text"
                                  />
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="fileInput">social media url </label>
                              <div class="controls">
                                <input 
                                  name="link"  
                                  class="input-file uniform_on" 
                                  id="fileInput" 
                                  type="text"
                                  value="{{old('link')}}"
                                  placeholder="Social media url" 
                                />
                              </div>
                            </div> 
                            <div class="control-group">
                              <label class="control-label" for="fileInput">Social media logo</label>
                              <div class="controls">
                                <input 
                                  name="logo"  
                                  class="input-file uniform_on" 
                                  id="fileInput" 
                                  type="file"
                                  placeholder="Social media url" 
                                />                   
                              </div>
                            </div> 
                          <div class="form-actions">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </fieldset>
                      </form>
                </div>
            </div><!--/span-->
       
<div class="clearfix"></div>

@endsection	
@push('script')

@endpush