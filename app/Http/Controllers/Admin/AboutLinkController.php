<?php

namespace App\Http\Controllers\Admin;

use App\AboutLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutLinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('Admin/pages/superAdmin/setUpThings');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:about_links,link',
        ]);

        $aboutLink=new AboutLink;
        $aboutLink->link=$request->input('name');
        $aboutLink->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/superAdmin/setUpThings');
    }
}
