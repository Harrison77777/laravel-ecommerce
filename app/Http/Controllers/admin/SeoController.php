<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Seo;
class SeoController extends Controller
{
    public function index()
    {
        $seo = Seo::first();
        return view('admin/seo/index', compact('seo'));
    }
    public function edit()
    {
        $seo = Seo::first();
        return view('admin/seo/edit', compact('seo'));
    }
    public function update($seoId)
    {
        request()->validate([
            'author' => 'required',
            'description' => 'required',
        ]);
        $seo = Seo::find($seoId);
        $seo->update(
            [
                'author' => request('author'), 
                'description' => request('description') 
            ]
        );
        session()->flash('Seo data updated successfully!!');
        return redirect()->route('seo.index');
    }
}
