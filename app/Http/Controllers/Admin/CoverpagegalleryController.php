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

class CoverpagegalleryController extends Controller
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
            'forunique'=>'required|unique:coverpagegalleries,forunique',
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

        $Coverpagegallery=new Coverpagegallery;
        $Coverpagegallery->desc=$request->input('desc');
        $Coverpagegallery->forunique=$request->input('forunique');
        $Coverpagegallery->image=$fileNameToStore;
        $Coverpagegallery->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/indexpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coverpagegallery  $coverpagegallery
     * @return \Illuminate\Http\Response
     */
    public function show(Coverpagegallery $coverpagegallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coverpagegallery  $coverpagegallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Coverpagegallery $coverpagegallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coverpagegallery  $coverpagegallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coverpagegallery $coverpagegallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coverpagegallery  $coverpagegallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($coverpagegallery)
    {
        $coverpagegallery= coverpagegallery::where('id',$coverpagegallery)->first();
        
        Storage::delete(public_path().'storage/thumbnails/'.$coverpagegallery->image);
        $coverpagegallery->delete();
        
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
