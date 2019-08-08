<div class="col-sm-3">
    <div class="left-sidebar">
        <h2  style="{{Request::is('/frontend/productDetails') ? 'margin-top:30px;' : ''}}">Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                @foreach ($categories as $category)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-parent="#accordian" 
                            href="#{{$category->slug}}">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                               <img style="height:22px; width:28px;border-radius: 7px;" src="{{asset('uploads/category/'.$category->banner)}}" alt=""> <a href="{{route('categoryWiseProduct', $category->id )}}">{{$category->name}}</a>
                            </a>
                        </h4>
                    </div>
                   
                    <div id="{{$category->slug}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="accodionList">
                                @foreach ($category->child_categories as $parent)
                                <li style="margin-top:4px;">
                                        <img style="height:20px; width:20px;border-radius: 7px;" src="{{asset('uploads/category/'.$parent->banner)}}" alt="">
                                    <a href="{{route('categoryWiseProduct',  $parent->id )}}">{{$parent->name}}</a>
                                </li> 
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>   
        </div><!--/category-products-->
    
        <div class="brands_products"><!--brands_products-->
            <h2>Brands</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    @foreach ($brands as $brand)
                    <li><a href="{{ url('frontend/brandWiseProducts', $brand->id)}}"> <span class="pull-right"></span>
                    {{$brand->brand}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div><!--/brands_products-->
    </div>
</div>