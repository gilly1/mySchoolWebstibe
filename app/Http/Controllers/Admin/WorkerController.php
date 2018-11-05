<?php

namespace App\Http\Controllers\Admin;

use App\worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class WorkerController extends Controller
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
        $members=worker::all();
        return view('Admin/pages/pagesDesign/adminGallery/nonteaching')->with('members',$members);
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

        $workers=new worker;
        $workers->name=$request->input('name');
        $workers->desc=$request->input('description');
        $workers->image=$fileNameToStore;
        $workers->save();

        session()->flash('success','Added Successfully');

        $members=worker::all();
        return view('Admin/pages/pagesDesign/adminGallery/nonteaching')->with('members',$members);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(worker $worker)
    {
        $workers= worker::find($worker)->first();
        return view('Admin/pages/pagesDesign/adminGallery/nonteachingEdit')->with('workers',$workers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, worker $worker)
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

        $workers= worker::find($worker)->first();
        $workers->name=$request->input('name');
        $workers->desc=$request->input('description');
        if($request->hasFile('image')){
            $workers->image=$fileNameToStore;
        }
        $workers->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/adminGallery/nonteachingEdit')->with('workers',$workers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(worker $worker)
    {
        $workers= worker::find($worker)->first();

        if($workers->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$workers->image);
        }
        
        $workers->delete();
        $members=worker::all();
        return view('Admin/pages/pagesDesign/adminGallery/nonteaching')->with('members',$members);
    }
}
