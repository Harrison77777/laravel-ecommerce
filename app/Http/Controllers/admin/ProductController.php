<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\Product_image;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::with(['category','brand','images'])->orderBy('id','desc')->get();
        
        return view('admin/product/index', compact('products'));
    }
    public function create()
    {   
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin/product/create',compact('categories','brands'));
    }

    public function store(Request $request){

        $request->validate
        (
            [
                'title' => 'required|unique:products,title',
                'category' => 'required',
                'brand' => 'required',
                'price' => 'required|numeric',
                'sale_price' => 'required|numeric',
                'description' => 'required',
                'status' => 'required',
                'quantity' => 'required|numeric',
            ]
        );

        $product = new Product();
        
        $product->title = $request->title;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->description = $request->description;
        $product->stock = $request->quantity;
        $product->status = $request->status;
        $product->save();
        $uploaded_image = $request->file("image");
        // if ($request->hasFile("image")){
        //    $imageName = uniqid().".".$uploaded_image->getClientOriginalExtension();
        //    $uploaded_image->move(public_path('uploads/product/'),$imageName);
        //    $productImage->product_id = $product->id; 
        //    $productImage->image = $imageName; 
        //    $productImage->save();
        // }
        if(count($uploaded_image) > 0){
            foreach ($uploaded_image as $image) {
                $imageName = uniqid().".".$image->getClientOriginalExtension();
                $image->move(public_path('uploads/product/'),$imageName);
                $productImage= new Product_image();
                $productImage->product_id = $product->id; 
                $productImage->image = $imageName; 
                $productImage->save();
            }
        }
        session()->flash('successMsg', 'Product created successfully!!');
        return redirect()->route('productIndex');
    }
    public function delete($id){
        $product = Product::find($id);
        $productImages = Product_image::where('product_id',$id)->get();
       
        if (!is_null($product)) {
            $product->delete();
            foreach ($productImages as  $image) {
                unlink(public_path('uploads/product/').$image->image);
            }
            
        }
        session()->flash('successMsg','Data deleted successfully!!');
        return back();
    }
    public function show($productId)
    {
        $product = Product::with(['images', 'brand', 'category'])->where('id',$productId)->firstOrFail();
        return view('admin/product/show', compact('product'));
    }
    public function edit($productId)
    {
        $product = Product::with(['brand', 'category'])->where('id',$productId)->firstOrFail();
        return view('admin/product/edit', compact('product'));
    }
    public function update(Request $request, $productId){

        $request->validate
        (
            [
                'title' => 'required',
                'brand' => 'required',
                'price' => 'required|numeric',
                'sale_price' => 'required|numeric',
                'description' => 'required',
                'status' => 'required',
                'quantity' => 'required|numeric',
            ]
        );

        $product = Product::find($productId);
        $product->update
        (
            [

                'title' => $request->title,
                'brand_id' => $request->brand,
                'category_id' => $request->category,
                'description' => $request->description,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'stock' => $request->quantity,
                'status' => $request->status,

            ]
        ); 
        
      
        session()->flash('successMsg', 'Product update successfully!!');
        return redirect()->route('productIndex');
    }
}
