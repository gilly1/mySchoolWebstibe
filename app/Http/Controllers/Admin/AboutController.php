<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\AboutLink;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
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
        $pages=About::all();
        return view('Admin/pages/pagesDesign/about/about')->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages=AboutLink::all();
        return view('Admin/pages/pagesDesign/about/aboutAdd')->with('pages',$pages);
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
            'page'=>'required|unique:abouts,link',
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

        $about=new About;
        $about->link=$request->input('page');
        $about->title=$request->input('heading');
        $about->titlemesso=$request->input('headingmessage');
        $about->body=$request->input('body');
        $about->image=$fileNameToStore;
        $about->save();

        session()->flash('success','Added Successfully');

        $pages=AboutLink::all();
        return view('Admin/pages/pagesDesign/about/aboutAdd')->with('pages',$pages);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about= About::where('link',$id)->first();
        return view('Admin/pages/pagesDesign/about/aboutEdit')->with('about',$about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

        $about= About::where('link',$id)->first();
        $about->title=$request->input('heading');
        $about->titlemesso=$request->input('headingmessage');
        $about->body=$request->input('body');
        if($request->hasFile('image')){
            $about->image=$fileNameToStore;
        }
        $about->save();

        session()->flash('success','Updated Successfully');
        return view('Admin/pages/pagesDesign/about/aboutEdit')->with('about',$about);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about= About::where('link',$id)->first();
        
        if($about->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$about->image);
        }
        $about->delete();

        $pages=About::all();
        return view('Admin/pages/pagesDesign/about/about')->with('pages',$pages);
    }
}
