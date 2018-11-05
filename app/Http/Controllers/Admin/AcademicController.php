<?php

namespace App\Http\Controllers\Admin;

use App\Academic;
use App\AcademicLink;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicController extends Controller
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
        $pages=Academic::all();
        return view('Admin/pages/pagesDesign/academics/academics')->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages=AcademicLink::all();
        return view('Admin/pages/pagesDesign/academics/academicsAdd')->with('pages',$pages);
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
            'page'=>'required|unique:academics,link',
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

        $academics=new Academic;
        $academics->link=$request->input('page');
        $academics->title=$request->input('heading');
        $academics->titlemesso=$request->input('headingmessage');
        $academics->body=$request->input('body');
        $academics->image=$fileNameToStore;
        $academics->save();

        session()->flash('success','Added Successfully');

        $pages=AcademicLink::all();
        return view('Admin/pages/pagesDesign/academics/academicsAdd')->with('pages',$pages);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function show(Academic $academic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function edit($academic)
    {
        $academics= Academic::where('link',$academic)->first();
        return view('Admin/pages/pagesDesign/academics/academicsEdit')->with('academics',$academics);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $academic)
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

        $academics= Academic::where('link',$academic)->first();
        $academics->title=$request->input('heading');
        $academics->titlemesso=$request->input('headingmessage');
        $academics->body=$request->input('body');
        if($request->hasFile('image')){
            $academics->image=$fileNameToStore;
        }
        $academics->save();

        session()->flash('success','Updated Successfully');
        return view('Admin/pages/pagesDesign/academics/academicsEdit')->with('academics',$academics);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function destroy($academic)
    {
        $academic= Academic::where('link',$academic)->first();
        
        if($academic->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$academic->image);
        }
        $academic->delete();

        $pages=Academic::all();
        return view('Admin/pages/pagesDesign/academics/academics')->with('pages',$pages);
    }
}
