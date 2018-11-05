<?php

namespace App\Http\Controllers\Admin;

use App\Coverpagegallery;
use App\coverimage;
use App\jumbotron;
use App\Whyus;
use App\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class CoverimageController extends Controller
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
        return view('Admin/pages/pagesDesign/indexpage');
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
            'desc'=>'required',
            'image'=>'required|image|nullable|max:1999',

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

        

        $coverimage=new coverimage;
        $coverimage->desc=$request->input('desc');
        $coverimage->image=$fileNameToStore;
        $coverimage->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/indexpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\coverimage  $coverimage
     * @return \Illuminate\Http\Response
     */
    public function show(coverimage $coverimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\coverimage  $coverimage
     * @return \Illuminate\Http\Response
     */
    public function edit(coverimage $coverimage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coverimage  $coverimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coverimage $coverimage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coverimage  $coverimage
     * @return \Illuminate\Http\Response
     */
    public function destroy(coverimage $coverimage)
    {
        $coverimage= coverimage::find($coverimage)->first();

        Storage::delete(public_path().'storage/thumbnails/'.$coverimage->image);
        

        $coverimage->delete();
        
        session()->flash('success','Deleted Successfully');

        $coverimage=coverimage::all();
        $Coverpagegallery=Coverpagegallery::all();
        $jumbotron=jumbotron::all();
        $Whyus=Whyus::all();
        $Counter=Counter::all();
        return view('Admin/pages/pagesDesign/indexpageEdit')->with('coverimage',$coverimage)
                                                            ->with('Coverpagegallery',$Coverpagegallery)
                                                            ->with('jumbotron',$jumbotron)
                                                            ->with('Whyus',$Whyus)
                                                            ->with('Counter',$Counter);
    }
}
