<?php

namespace App\Http\Controllers\Admin;

use App\Newsparent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsparentController extends Controller
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
        $links=Newsparent::all();
        return view('Admin/pages/pagesDesign/About/parents')->with('links',$links);
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
            'link'=>'required',
            'platform'=>'required',

        ]);

        $Newsparent=new Newsparent;
        $Newsalumni->link=$request->input('link');
        $Newsalumni->platform=$request->input('platform');
        $Newsparent->save();

        session()->flash('success','Added Successfully');

        $links=Newsparent::all();
        return view('Admin/pages/pagesDesign/About/parents')->with('links',$links);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsparent  $newsparent
     * @return \Illuminate\Http\Response
     */
    public function show(Newsparent $newsparent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsparent  $newsparent
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsparent $newsparent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsparent  $newsparent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsparent $newsparent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsparent  $newsparent
     * @return \Illuminate\Http\Response
     */
    public function destroy($newsparent)
    {
        $newsparent= Newsparent::find($newsparent)->first();
        $newsparent->delete();
        $links=Newsparent::all();
        return view('Admin/pages/pagesDesign/About/parents')->with('links',$links);
    }
}
