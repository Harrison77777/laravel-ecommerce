<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Brand;
use App\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }
    
    public function index(){

        $products = Product::with('images')
        ->select(['sale_price', 'title', 'id', 'slug'])
        ->where('active', 1)
        ->where('status',1)
        ->orderBy('id','desc')
        ->take(10)
        ->get();

        $recommendedProducts = Product::with('images')
        ->select(['sale_price', 'title', 'id', 'slug'])
        ->where('active', 1)
        ->where('status',2)
        ->orderBy('id','desc')
        ->take(10)
        ->get();

        $newArrivalProducts = Product::with('images')
        ->select(['sale_price', 'title', 'id', 'slug'])
        ->where('active', 1)
        ->where('status',3)
        ->orderBy('id','desc')
        ->take(10)
        ->get();
        $slides = Slide::all();
        return view('frontend/home/index', compact('products','recommendedProducts', 'newArrivalProducts', 'slides'));

    }


    public function show($slug)
    {

        $detailsProduct = Product::with(['category','brand','images'])
        //->select(['sale_price', 'title', 'slug', 'id', 'description', 'stock'])
        ->where('slug', $slug)
        ->firstOrFail();
        return view('frontend/show/show',compact('detailsProduct'));

    }


    public function ShowProductByCategory($categoryId)
    {
        $category = Category::where('id',$categoryId)->firstOrFail();
        $products = Product::with('category')->where('category_id',$categoryId)->latest()->paginate(8);
        return view('/frontend/home/categoryWiseProduct', compact('products','category'));
    }


    public function showProductBrandWise($brandId)
    {
        $brand = Brand::where('id',$brandId)->firstOrFail();
        $products = Product::where('brand_id', $brandId)->get();
        return view('frontend/home/productBrandWise', compact('products', 'brand'));
    }


    public function search(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            return back();
        }
        
        $products = Product::orWhere('title', 'like', '%'.$search.'%')
        ->orWhere('slug', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->paginate(8);
       
            return view('frontend/home/searchPage', compact('products', 'search'));
        
    }
   
}
