<?php

namespace App\Http\Controllers\Admin;

use App\event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
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
        $events=event::all();
        return view('Admin/pages/pagesDesign/about/news')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/pages/pagesDesign/about/newsAdd');
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
            'title'=>'required',
            'date'=>'required',
            'body'=>'required'
        ]);

        $event=new event;
        $event->title=$request->input('title');
        $event->date=$request->input('date');
        $event->body=$request->input('body');
        $event->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/about/newsAdd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($event)
    {
        $events=event::where('id',$event)->first();
        return view('Admin/pages/pagesDesign/about/newsEdit')->with('events',$events);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $event)
    {
        $this->validate($request,[
            'title'=>'required',
            'date'=>'required',
            'body'=>'required'
        ]);

        $events=event::where('title',$event)->first();
        $events->title=$request->input('title');
        $events->date=$request->input('date');
        $events->body=$request->input('body');
        $events->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/about/newsEdit')->with('events',$events);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($event)
    {
        $events= event::find($event)->first();
        $events->delete();
        
        session()->flash('success','Deleted Successfully');

        
        $events=event::all();
        return view('Admin/pages/pagesDesign/about/news')->with('events',$events);
    }
}
 