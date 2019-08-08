<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SocialMediaLink;
class SocialMediaController extends Controller
{
    public function index()
    {

        $socialMedias = SocialMediaLink::select(['id','name','logo', 'link'])->get();
        return view('admin.socialMedia.index', compact('socialMedias'));   
    }
    public function create(){
     return view('admin.socialMedia.create');   
    }
    public function store(Request $request)
    {
     
        $this->validate($request, 
            [
                'name' => 'required',
                'link' => 'required|url',
                'logo' => 'required|image'
            ]
        );

        $socialMediaLogo = $request->file('logo');

        if ($request->hasFile('logo')) {
            $logoName = uniqid().'.'.$socialMediaLogo->getClientOriginalExtension();
            $socialMediaLogo->move(public_path('uploads/socialMediaLogo/'),$logoName);
            SocialMediaLink::create([
                'name' => $request->name,
                'link' => $request->link,
                'logo' => $logoName,
            ]);
        }
        session()->flash('successMsg', 'successfully social media link is created!!');
        return redirect()->route('social.media.index');
        
    }
    public function edit($editId)
    {
        $socialMediaLink = SocialMediaLink::where('id', $editId)->firstOrFail();
        return view('admin.socialMedia.edit', compact('socialMediaLink'));
    }
    public function update(Request $request, $updateId)
    {
        $this->validate($request,
            [
               'name' => 'required', 
               'link' => 'required', 
               'logo' => 'sometimes|image', 
            ]
        );

        $updateLogo = $request->file('logo');
       $updateSocialMediaLink = SocialMediaLink::find($updateId);

        if ($request->hasFile('logo')) {
           $updateLogoName = uniqid().'.'.$updateLogo->getClientOriginalExtension();
           if ($updateSocialMediaLink->logo) {
            unlink(public_path('uploads/socialMediaLogo/').$updateSocialMediaLink->logo);
           }
           $updateLogo->move(public_path('uploads/socialMediaLogo/'),$updateLogoName);
           $updateSocialMediaLink->update(
               [
                   'name' => $request->name,
                   'link' => $request->link,
                   'logo' => $updateLogoName
               ]
           );
        }else{
            $updateSocialMediaLink->update(
                [
                    'name' => $request->name,
                    'link' => $request->link,
                ]
            );
        }
        session()->flash('successMsg', 'successfully social media link updated!!');
        return back();
    }

    public function delete($deleteId)
    {
        $deleteSocialMediaLink = SocialMediaLink::find($deleteId);
        if (!is_null($deleteSocialMediaLink)) {
            $deleteSocialMediaLink->delete();
        }
        session()->flash('successMsg', 'successfully social media link deleted!!');
        return back();
    }










}
