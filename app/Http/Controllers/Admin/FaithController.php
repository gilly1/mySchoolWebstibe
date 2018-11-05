<?php

namespace App\Http\Controllers\Admin;

use App\Faith;
use App\FaithLink;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaithController extends Controller
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
        $pages=Faith::all();
        return view('Admin/pages/pagesDesign/faith/faith')->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages=FaithLink::all();
        return view('Admin/pages/pagesDesign/faith/faithAdd')->with('pages',$pages);
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
            'page'=>'required|unique:faiths,link',
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

        $faith=new Faith;
        $faith->link=$request->input('page');
        $faith->title=$request->input('heading');
        $faith->titlemesso=$request->input('headingmessage');
        $faith->body=$request->input('body');
        $faith->image=$fileNameToStore;
        $faith->save();

        session()->flash('success','Added Successfully');

        $pages=FaithLink::all();
        return view('Admin/pages/pagesDesign/faith/faithAdd')->with('pages',$pages);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faith  $faith
     * @return \Illuminate\Http\Response
     */
    public function show(Faith $faith)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faith  $faith
     * @return \Illuminate\Http\Response
     */
    public function edit($faith)
    {
        $faith= Faith::where('link',$faith)->first();
        return view('Admin/pages/pagesDesign/faith/faithEdit')->with('faith',$faith);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faith  $faith
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faith)
    {
        $this->validate($request,[
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

        $faith= Faith::where('link',$faith)->first();
        $faith->title=$request->input('heading');
        $faith->titlemesso=$request->input('headingmessage');
        $faith->body=$request->input('body');
        if($request->hasFile('image')){
            $faith->image=$fileNameToStore;
        }
        $faith->save();

        session()->flash('success','Updated Successfully');
        return view('Admin/pages/pagesDesign/faith/faithEdit')->with('faith',$faith);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faith  $faith
     * @return \Illuminate\Http\Response
     */
    public function destroy($faith)
    {
        $faith= Faith::where('link',$faith)->first();
        
        if($faith->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$faith->image);
        }
        $faith->delete();

        $pages=Faith::all();
        return view('Admin/pages/pagesDesign/faith/faith')->with('pages',$pages);
    }
}
