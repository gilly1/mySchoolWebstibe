<?php

namespace App\Http\Controllers\Admin;

use App\Newsalumni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsalumniController extends Controller
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
        $links=Newsalumni::all();
        return view('Admin/pages/pagesDesign/About/alumni')->with('links',$links);
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

        $Newsalumni=new Newsalumni;
        $Newsalumni->link=$request->input('link');
        $Newsalumni->platform=$request->input('platform');
        $Newsalumni->save();

        session()->flash('success','Added Successfully');

        $links=Newsalumni::all();
        return view('Admin/pages/pagesDesign/About/alumni')->with('links',$links);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsalumni  $newsalumni
     * @return \Illuminate\Http\Response
     */
    public function show(Newsalumni $newsalumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsalumni  $newsalumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsalumni $newsalumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsalumni  $newsalumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsalumni $newsalumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsalumni  $newsalumni
     * @return \Illuminate\Http\Response
     */
    public function destroy($newsalumni)
    {
        $newsalumni= Newsalumni::find($newsalumni)->first();
        $newsalumni->delete();
        $links=Newsalumni::all();
        return view('Admin/pages/pagesDesign/About/alumni')->with('links',$links);
    }
}
