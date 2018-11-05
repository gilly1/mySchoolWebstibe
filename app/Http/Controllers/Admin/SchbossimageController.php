<?php

namespace App\Http\Controllers\Admin;

use App\schbossimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class SchbossimageController extends Controller
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
        $members=schbossimage::all();
        return view('Admin/pages/pagesDesign/adminGallery/schboss')->with('members',$members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
            'description'=>'required',
            'rank'=>'required',
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

        $schbossimage=new schbossimage;
        $schbossimage->name=$request->input('name');
        $schbossimage->desc=$request->input('description');
        $schbossimage->rank=$request->input('rank');
        $schbossimage->image=$fileNameToStore;
        $schbossimage->save();

        session()->flash('success','Added Successfully');

        $members=schbossimage::all();
        return view('Admin/pages/pagesDesign/adminGallery/schboss')->with('members',$members);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\schbossimage  $schbossimage
     * @return \Illuminate\Http\Response
     */
    public function show(schbossimage $schbossimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\schbossimage  $schbossimage
     * @return \Illuminate\Http\Response
     */
    public function edit($schbossimage)
    {
        $schbossimage= schbossimage::where('id',$schbossimage)->first(); 
        return view('Admin/pages/pagesDesign/adminGallery/schbossEdit')->with('schbossimage',$schbossimage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\schbossimage  $schbossimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $schbossimage)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',

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

        $schbossimage= schbossimage::find($schbossimage)->first();
        $schbossimage->name=$request->input('name');
        $schbossimage->desc=$request->input('description');
        //$schbossimage->rank=$request->input('rank');
        if($request->hasFile('image')){
            $schbossimage->image=$fileNameToStore;
        }
        $schbossimage->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/adminGallery/schbossEdit')->with('schbossimage',$schbossimage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\schbossimage  $schbossimage
     * @return \Illuminate\Http\Response
     */
    public function destroy($schbossimage)
    {
        $schbossimage= schbossimage::find($schbossimage)->first();

        if($schbossimage->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$schbossimage->image);
        }
        
        $schbossimage->delete();
        $members=schbossimage::all();
        return view('Admin/pages/pagesDesign/adminGallery/schboss')->with('members',$members);
    }
}
