<?php

namespace App\Http\Controllers\Admin;

use App\schbosspage;
use App\schbosspageLink;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchbosspageController extends Controller
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
        $members=schbosspage::all();
        return view('Admin/pages/pagesDesign/adminhome/adminHome')->with('members',$members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members=schbosspageLink::all();
        return view('Admin/pages/pagesDesign/adminhome/adminHomeAdd')->with('members',$members);
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
            'page'=>'required|unique:schbosspages,position',
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

        $member=new schbosspage;
        $member->position=$request->input('page');
        $member->title=$request->input('heading');
        $member->titlemesso=$request->input('headingmessage');
        $member->body=$request->input('body');
        $member->image=$fileNameToStore;
        $member->save();

        session()->flash('success','Added Successfully');

        $members=schbosspageLink::all();
        return view('Admin/pages/pagesDesign/adminhome/adminHomeAdd')->with('members',$members);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\schbosspage  $schbosspage
     * @return \Illuminate\Http\Response
     */
    public function show(schbosspage $schbosspage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\schbosspage  $schbosspage
     * @return \Illuminate\Http\Response
     */
    public function edit($schbosspage)
    {
        $member= schbosspage::where('position',$schbosspage)->first();
        return view('Admin/pages/pagesDesign/adminhome/adminHomeEdit')->with('member',$member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\schbosspage  $schbosspage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $schbosspage)
    {
        $this->validate($request,[
            'heading'=>'required',
            'headingmessage'=>'required',
            'body'=>'required',

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

        $member= schbosspage::where('position',$schbosspage)->first();
        $member->title=$request->input('heading');
        $member->titlemesso=$request->input('headingmessage');
        $member->body=$request->input('body');
        if($request->hasFile('image')){
            $member->image=$fileNameToStore;
        }
        $member->save();

        session()->flash('success','Updated Successfully');
        return view('Admin/pages/pagesDesign/adminhome/adminHomeEdit')->with('member',$member);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\schbosspage  $schbosspage
     * @return \Illuminate\Http\Response
     */
    public function destroy($schbosspage)
    {
        $schbosspage= schbosspage::where('position',$schbosspage)->first();

        if($schbosspage->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$schbosspage->image);
        }
        $schbosspage->delete();

        $members=schbosspage::all();
        return view('Admin/pages/pagesDesign/adminhome/adminHome')->with('members',$members);
    }
}
