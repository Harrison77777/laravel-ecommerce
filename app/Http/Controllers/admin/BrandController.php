<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin/brand/index', compact('brands'));
    }

    public function create()
    {
        
        return view('admin/brand/create');
    }

    public function store()
    {
        
        request()->validate
        (
            [
                'brand_name' => 'required|unique:brands,brand',
            ]
        );
        
        Brand::create
        (
            [
                'brand' => request('brand_name'),
            ]
        );
        session()->flash('successMsg', 'Brand created successfully!!');
        return redirect()->route('brand.index');
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        if (!is_null($brand)) 
        {
            $brand->delete();
        }
        session()->flash('successMsg','Data deleted successfully!!');
        return back();
    }

}
