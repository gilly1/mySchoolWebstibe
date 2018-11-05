<?php

namespace App\Http\Controllers\Admin;

use App\schbosspageLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchbosspageLinkController extends Controller
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
            'name'=>'required|unique:schbosspage_links,link',
        ]);

        $schbosspageLink=new schbosspageLink;
        $schbosspageLink->link=$request->input('name');
        $schbosspageLink->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/superAdmin/setUpThings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\schbosspageLink  $schbosspageLink
     * @return \Illuminate\Http\Response
     */
    public function show(schbosspageLink $schbosspageLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\schbosspageLink  $schbosspageLink
     * @return \Illuminate\Http\Response
     */
    public function edit(schbosspageLink $schbosspageLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\schbosspageLink  $schbosspageLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, schbosspageLink $schbosspageLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\schbosspageLink  $schbosspageLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(schbosspageLink $schbosspageLink)
    {
        //
    }
}
