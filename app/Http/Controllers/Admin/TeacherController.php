<?php

namespace App\Http\Controllers\Admin;

use App\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
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
        $members=teacher::all();
        return view('Admin/pages/pagesDesign/adminGallery/teachingStaff')->with('members',$members);
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

        $teachers=new teacher;
        $teachers->name=$request->input('name');
        $teachers->desc=$request->input('description');
        $teachers->image=$fileNameToStore;
        $teachers->save();

        session()->flash('success','Added Successfully');

        $members=teacher::all();
        return view('Admin/pages/pagesDesign/adminGallery/teachingStaff')->with('members',$members);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        $teachers= teacher::find($teacher)->first();
        return view('Admin/pages/pagesDesign/adminGallery/teachingStaffEdit')->with('teachers',$teachers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacher $teacher)
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

        $teachers= teacher::find($teacher)->first();
        $teachers->name=$request->input('name');
        $teachers->desc=$request->input('description');
        if($request->hasFile('image')){
            $teachers->image=$fileNameToStore;
        }
        $teachers->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/adminGallery/teachingStaffEdit')->with('teachers',$teachers);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        $teacher= teacher::find($teacher)->first();

        if($teacher->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$teacher->image);
        }
        
        $teacher->delete();
        $members=teacher::all();
        return view('Admin/pages/pagesDesign/adminGallery/teachingStaff')->with('members',$members);
    }
}
