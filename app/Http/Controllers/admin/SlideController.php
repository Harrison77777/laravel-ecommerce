<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        return view('admin/slide/index', compact('slides'));
    }
    public function create()
    {
        return view('admin/slide/create');
    }
    public function store()
    {
        request()->validate
        (
            [
                'slide_name' => 'required',
                'image' => 'required'
            ]
        );
        $uploadImage = request()->file('image'); 
        if (request()->hasFile('image')) {

            $imageName = uniqid().'.'.$uploadImage->getClientOriginalExtension();
            $uploadImage->move(public_path('uploads/slides/'),$imageName);
            Slide::create(
                [
                    'name' => request('slide_name'),
                    'image' => $imageName
                ]
            );
            
        }
        session()->flash('successMsg', 'Successfully slide created!!');
        return redirect()->route('slide.index');
    }

    public function delete($id)
    {
      $slide = Slide::find($id);
      unlink(public_path('uploads/slides/'). $slide->image);
      $slide->delete();
      session()->flash('successMsg', 'Successfully slide deleted!!');
      return back();
    }
}
