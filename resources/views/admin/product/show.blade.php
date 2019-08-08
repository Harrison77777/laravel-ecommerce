@extends('layouts/backendLayout')
@push('css')

<style>
    ul.pagination {
        list-style: none;
        display: inline-flex;
    }
    li#DataTables_Table_0_previous {
        padding: 0px;
        margin: 9px;
    }
    li.paginate_button.page-item {
        margin: 9px;
    }
    div#DataTables_Table_0_length {
        float: left;
    }
    div#DataTables_Table_0_filter {
        float: right;
    }
    .box-header{
        margin-left: -28px;
    }
    
</style>
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
                @if (Session::has('successMsg'))
                <div style="width: 100%;" class="alert alert-success d-block">
                    {{session('successMsg')}}
                </div>
            @endif
            <div style="margin-left:3px; margin-bottom:5px;">
                <a class="btn btn-sm btn-success my-3" href="{{route('productIndex')}}">Back</a>
            </div>
            
            <div class="span12">
                <div class="box-header" data-original-title>
                    {{-- <h2><i class="halflings-icon user"></i><span class="break"></span>All of {{$product->title}}</h2> --}}
                    
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div>
                        <h4>product name: {{$product->title}} </h4> 
                        <h4>product brand: {{$product->brand->brand}} </h4> 
                        <h4>product category: {{$product->category->name}} </h4> 
                        <h4>product price: {{$product->price}} </h4> 
                        <h4>product price: {{$product->sale_price}} </h4> 
                        <h4>product stock: {{$product->stock}} </h4> 
                        <h4>product status: {{$product->status ? 'Active' : 'Unactive'}} </h4> 
                    </div>
                    <div class="product-all-image">
                        <h5>All product photo</h5>
                        @foreach ($product->images as $image)
                            <img height="200" width="250" src="{{asset('uploads/product/'.$image->image)}}" alt="">
                        @endforeach
                    </div>    
                </div>
            </div><!--/span-->
        </div>

<div class="clearfix"></div>

@endsection	
@push('script')

</script>
@endpush
