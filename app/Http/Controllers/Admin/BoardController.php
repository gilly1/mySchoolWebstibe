<?php

namespace App\Http\Controllers\Admin;

use App\board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class BoardController extends Controller
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
        $members=board::all();
        return view('Admin/pages/pagesDesign/adminGallery/board')->with('members',$members);
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

        $board=new board;
        $board->name=$request->input('name');
        $board->desc=$request->input('description');
        $board->rank=$request->input('rank');
        $board->image=$fileNameToStore;
        $board->save();

        session()->flash('success','Added Successfully');

        $members=board::all();
        return view('Admin/pages/pagesDesign/adminGallery/board')->with('members',$members);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(board $board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(board $board)
    {
        $board= board::find($board)->first();
        return view('Admin/pages/pagesDesign/adminGallery/boardEdit')->with('board',$board);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, board $board)
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

        $board= board::find($board)->first();
        $board->name=$request->input('name');
        $board->desc=$request->input('description');
        //$board->rank=$request->input('rank');
        if($request->hasFile('image')){
            $board->image=$fileNameToStore;
        }
        $board->save();

        session()->flash('success','Added Successfully');
        return view('Admin/pages/pagesDesign/adminGallery/boardEdit')->with('board',$board);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(board $board)
    {
        $board= board::find($board)->first();

        if($board->image !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$board->image);
        }

        $board->delete();
        $members=board::all();
        return view('Admin/pages/pagesDesign/adminGallery/board')->with('members',$members);
    }
}
