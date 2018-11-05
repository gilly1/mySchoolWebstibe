<?php

namespace App\Http\Controllers\Admin;

use App\game;
use App\GameLink;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
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
        $pages=game::all();
        return view('Admin/pages/pagesDesign/cocurricular/cocurricular')->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages=GameLink::all();
        return view('Admin/pages/pagesDesign/cocurricular/cocurricularAdd')->with('pages',$pages);
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
            'page'=>'required|unique:games,link',
            'heading'=>'required',
            'headingmessage'=>'required',
            'body'=>'required',
            'image'=>'required|image|nullable|max:1999',
            'image2'=>'required|image|nullable|max:1999'

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

        if($request->hasFile('image2')){
            //getting file name with extension
            $fileNamewithext2=$request->file('image2')->getClientOriginalName();
            //getting the file
            $fileName2=pathInfo($fileNamewithext2,PATHINFO_FILENAME);
            //getting the extension
            $extension2=$request->file('image2')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore2=$fileName2.'_'.time().'.'.$extension2;
            //upload image2
            $path=$request->file('image2')->move("storage/thumbnails",$fileNameToStore2);
        }else{
            $fileNameToStore2='noimage.jpg';
        }

        $games=new game;
        $games->link=$request->input('page');
        $games->title=$request->input('heading');
        $games->titlemesso=$request->input('headingmessage');
        $games->body=$request->input('body');
        $games->imageleft=$fileNameToStore;
        $games->imageright=$fileNameToStore2;
        $games->save();

        session()->flash('success','Added Successfully');

        $pages=GameLink::all();
        return view('Admin/pages/pagesDesign/cocurricular/cocurricularAdd')->with('pages',$pages);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit($game)
    {
        $games= game::where('link',$game)->first();
        return view('Admin/pages/pagesDesign/cocurricular/cocurricularEdit')->with('games',$games);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $game)
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

        if($request->hasFile('image2')){
            //getting file name with extension
            $fileNamewithext2=$request->file('image2')->getClientOriginalName();
            //getting the file
            $fileName2=pathInfo($fileNamewithext2,PATHINFO_FILENAME);
            //getting the extension
            $extension2=$request->file('image2')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore2=$fileName2.'_'.time().'.'.$extension2;
            //upload image2
            $path=$request->file('image2')->move("storage/thumbnails",$fileNameToStore2);
        }else{
            $fileNameToStore2='noimage.jpg';
        }

        $games=game::where('link',$game)->first();
        $games->title=$request->input('heading');
        $games->titlemesso=$request->input('headingmessage');
        $games->body=$request->input('body');
        if($request->hasFile('image')){
            $games->imageleft=$fileNameToStore;
        }
        if($request->hasFile('image2')){
            $games->imageright=$fileNameToStore2;
        }
        $games->save();

        session()->flash('success','Added Successfully');


        $games= game::where('link',$game)->first();
        return view('Admin/pages/pagesDesign/cocurricular/cocurricularEdit')->with('games',$games);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy($game)
    {
        $games= game::where('link',$game)->first();

        if($games->imageleft !='nonimage.jpg' & $games->imageright !='nonimage.jpg'){
            //Delete image in storage folder
            Storage::delete('storage/thumbnails/'.$games->imageright);
            Storage::delete('storage/thumbnails/'.$games->imageleft);
        }
        $games->delete();

        $pages=game::all();
        return view('Admin/pages/pagesDesign/cocurricular/cocurricular')->with('pages',$pages);
    }
}
