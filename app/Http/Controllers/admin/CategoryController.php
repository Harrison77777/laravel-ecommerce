<?php

namespace App\Http\Controllers\admin;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
   public function index(){
       $categories = Category::all();
       return view('admin/category/index', compact('categories'));
   }
   public function create(){
       $categories = Category::where('category_id', NULL)->get();
       return view('admin/category/create', compact('categories'));
   }
   public function store(Request $request){
      
        $request->validate
        (
            [
                'category_name'=>'required|unique:categories,name',
                'banner'=>'sometimes|image',
            ]
        );
       
       
        $upload_banner = $request->file('banner');

        if ($request->hasFile('banner')) 
        {
            $bannerName = uniqid().'.'.$upload_banner->getClientOriginalExtension();
            $upload_banner->move(public_path('uploads/category/'),$bannerName);
            $category = new Category();
            $category->name = $request->category_name;
            $category->category_id = $request->category_id;
            $category->banner = $bannerName;
            $category->save();
        }
        else
        {
            $category = new Category();
            $category->name = $request->category_name;
            $category->category_id = $request->category_id;
            $category->save();
        }
            session()->flash('successMsg', 'Category created successfully!!');
            return redirect()->route('category.index');
   }
   public function delete($id){
       $category = Category::find($id);
       if (!is_null($category)) {
           $category->delete();
           if (!is_null($category->banner)) {
            unlink(public_path('uploads/category/').$category->banner); 
           }
          
       }
       session()->flash('successMsg','Data deleted successfully!!');
       return back();
   }
   public function show($categoryId){

        $category = Category::where('id', $categoryId)->firstOrFail();
        return view('admin/category/show', compact('category'));
   }
   public function edit($categoryId){

        $category = Category::where('id', $categoryId)->firstOrFail();
        return view('admin/category/edit', compact('category'));
   }
   public function update(Category $category , Request $request, $categoryId){
       
        $request->validate
        (
            [
                'category_name'=>'required',
                'banner'=>'sometimes|image',
            ]
        );
        $updateCategory = Category::find($categoryId);
        $updateImage = $request->file('banner');
        if ($request->hasFile('banner')) {
            $imageName = uniqid().'.'.$updateImage->getClientOriginalExtension();
            unlink(public_path('uploads/category/').$updateCategory->banner);
            $updateImage->move(public_path('uploads/category/'),$imageName);
            // Category::find($categoryId)->update(
            //     [
            //       'name' => $request->category_name,  
            //       'banner' => $imageName,  
            //       'category_id' =>$request->category_id,  
            //     ]
            // );
            $updateCategory->name =$request->category_name;
            $updateCategory->banner =$imageName;
            $updateCategory->category_id =$request->category_id;
            $updateCategory->save();

            }else {
                // Category::find($categoryId)->update(
                //     [
                //     'name' => $request->category_name,  
                //     'category_id' => $request->category_id,  
                //     ]
                // ); 
                $updateCategory->name =$request->category_name;
             
                $updateCategory->category_id =$request->category_id;
                $updateCategory->save();
        }
        session()->flash('successMsg', 'Category updated successfully!!');
        return redirect()->route('category.index');
   }
  
}
