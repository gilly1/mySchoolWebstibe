<?php

namespace App\Http\Controllers\Admin;

use App\GameLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameLinkController extends Controller
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
        //
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
            'name'=>'required|unique:game_links,link',
        ]);

        $GameLink=new GameLink;
        $GameLink->link=$request->input('name');
        $GameLink->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/superAdmin/setUpThings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GameLink  $gameLink
     * @return \Illuminate\Http\Response
     */
    public function show(GameLink $gameLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GameLink  $gameLink
     * @return \Illuminate\Http\Response
     */
    public function edit(GameLink $gameLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GameLink  $gameLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameLink $gameLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GameLink  $gameLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameLink $gameLink)
    {
        //
    }
}
