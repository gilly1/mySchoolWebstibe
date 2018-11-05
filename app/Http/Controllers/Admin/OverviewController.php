<?php

namespace App\Http\Controllers\Admin;

use App\overview;
use App\page;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=overview::all();
        return view('Admin/pages/pagesDesign/overview/overview')->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages=page::all();
        return view('Admin/pages/pagesDesign/overview/overviewAdd')->with('pages',$pages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'page'=>'required|unique:overviews,page',
            'heading'=>'required',
            'headingmessage'=>'required',
            'body'=>'required',
            'image'=>'required|image|nullable|max:1999'

        ]);

        if($request->hasFile('image')){
            //getting file name with extension
            $fileNamewithext=$request->file('image')->getClientOriginalName();
            //getting the file
            $fileName=pathInfo($fileNamewithext,PATHINFO_FILENAME);
            //getting the extension
            $extension=$request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('image')->move("storage/thumbnails",$fileNameToStore);
        }else{
            $fileNameToStore='noimage.jpg';
        }

        $overview=new overview;
        $overview->page=$request->input('page');
        $overview->title=$request->input('heading');
        $overview->titlemesso=$request->input('headingmessage');
        $overview->body=$request->input('body');
        $overview->image=$fileNameToStore;
        $overview->save();

        session()->flash('success','Added Successfully');

        $pages=page::all();
        return view('Admin/pages/pagesDesign/overview/overviewAdd')->with('pages',$pages);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\overview  $overview
     * @return \Illuminate\Http\Response
     */
    public function show(overview $overview)
    {
        return 123;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\overview  $overview
     * @return \Illuminate\Http\Response
     */
    public function edit($overview)
    {
        $overview= overview::where('page',$overview)->first();
        return view('Admin/pages/pagesDesign/overview/overviewEdit')->with('overview',$overview);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\overview  $overview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $overview)
    {
        $this->validate($request,[
            'page'=>'required',
            'heading'=>'required',
            'headingmessage'=>'required',
            'body'=>'required',
            'image'=>'image|nullable|max:1999',

        ]);

        if($request->hasFile('image')){
            //getting file name with extension
            $fileNamewithext=$request->file('image')->getClientOriginalName();
            //getting the file
            $fileName=pathInfo($fileNamewithext,PATHINFO_FILENAME);
            //getting the extension
            $extension=$request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('image')->move("storage/thumbnails",$fileNameToStore);
        }else{
            $fileNameToStore='noimage.jpg';
        }

        $overview= overview::where('page',$overview)->first();
        $overview->title=$request->input('heading');
        $overview->titlemesso=$request->input('headingmessage');
        $overview->body=$request->input('body');
        if($request->hasFile('image')){
            $overview->image=$fileNameToStore;
        }
        $overview->save();

        session()->flash('success','Updated Successfully');
        return view('Admin/pages/pagesDesign/overview/overviewEdit')->with('overview',$overview);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\overview  $overview
     * @return \Illuminate\Http\Response
     */
    public function destroy(overview $overview)
    {
        $overview= overview::find($overview)->first();
        
        if($overview->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$overview->image);
        }
        $overview->delete();

        $pages=overview::all();
        return view('Admin/pages/pagesDesign/overview/overview')->with('pages',$pages);
    }
}
