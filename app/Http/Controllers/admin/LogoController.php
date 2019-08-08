<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logo;
class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::all();
        return view('admin/sitelogo/index', compact('logos'));
    }
    public function show($logoId)
    {
        $logo = Logo::where('id', $logoId)->first();
        return view('admin/sitelogo/show', compact('logo'));
    }
    public function edit($logoId)
    {
        $logo = Logo::where('id', $logoId)->first();
        return view('admin/sitelogo/edit', compact('logo'));
    }

    public function update(Request $request ,$logoId)
    {
        $updateLogo = Logo::where('id',$logoId)->first();
        $request->validate(
            [
                'slogan' => 'required',
                'image' => 'sometimes|image'
            ]
        );

        $UpLogo = $request->file('image');
   
        if ( $request->hasFile('image')) {
            
            $logoName = uniqid().'.'.$UpLogo->getClientOriginalExtension();
            unlink(public_path('uploads/logo/').$updateLogo->logo);
            $UpLogo->move(public_path('uploads/logo/'),$logoName);
           
            $updateLogo->logo = $logoName;
            $updateLogo->slogan = $request->slogan;
            $updateLogo->save();
           
           
        }else{

            $updateLogo->slogan =  $request->slogan;
          
            $updateLogo->save(); 
        }
        session()->flash('successMsg', 'Logo area update successfully.');
        return redirect()->route('logo.show', $logoId);
    }
}
