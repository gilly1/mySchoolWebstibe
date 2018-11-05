<?php

namespace App\Http\Controllers\Admin;

use App\FaithLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaithLinkController extends Controller
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
            'name'=>'required|unique:faith_links,link',
        ]);

        $FaithLink=new FaithLink;
        $FaithLink->link=$request->input('name');
        $FaithLink->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/superAdmin/setUpThings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FaithLink  $faithLink
     * @return \Illuminate\Http\Response
     */
    public function show(FaithLink $faithLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FaithLink  $faithLink
     * @return \Illuminate\Http\Response
     */
    public function edit(FaithLink $faithLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FaithLink  $faithLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaithLink $faithLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FaithLink  $faithLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaithLink $faithLink)
    {
        //
    }
}
