<?php

namespace App\Http\Controllers\Admin;

use App\pta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PtaController extends Controller
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
        $members=pta::all();
        return view('Admin/pages/pagesDesign/adminGallery/pta')->with('members',$members);
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

        $pta=new pta;
        $pta->name=$request->input('name');
        $pta->desc=$request->input('description');
        $pta->class=$request->input('rank');
        $pta->image=$fileNameToStore;
        $pta->save();

        session()->flash('success','Added Successfully');

        $members=pta::all();
        return view('Admin/pages/pagesDesign/adminGallery/pta')->with('members',$members);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pta  $pta
     * @return \Illuminate\Http\Response
     */
    public function show(pta $pta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pta  $pta
     * @return \Illuminate\Http\Response
     */
    public function edit($pta)
    {
        $pta= pta::where('id',$pta)->first();
        return view('Admin/pages/pagesDesign/adminGallery/ptaEdit')->with('pta',$pta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pta  $pta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$pta)
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

        $pta= pta::where('id',$pta)->first();
        $pta->name=$request->input('name');
        $pta->desc=$request->input('description');
        //$pta->class=$request->input('rank');
        if($request->hasFile('image')){
            $pta->image=$fileNameToStore;
        }
        $pta->save();

        session()->flash('success','Added Successfully');
        return view('Admin/pages/pagesDesign/adminGallery/ptaEdit')->with('pta',$pta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pta  $pta
     * @return \Illuminate\Http\Response
     */
    public function destroy($pta)
    {
        $pta= pta::find($pta)->first();

        if($pta->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$pta->image);
        }

        $pta->delete();
        $members=pta::all();
        return view('Admin/pages/pagesDesign/adminGallery/pta')->with('members',$members);
    }
}
