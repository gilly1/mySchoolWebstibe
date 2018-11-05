<?php

namespace App\Http\Controllers\Admin;

use App\Coverpagegallery;
use App\coverimage;
use App\jumbotron;
use App\Whyus;
use App\Counter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CounterController extends Controller
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
        return view('Admin/pages/pagesDesign/indexpage');
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
            'value'=>'required',
            'forunique'=>'required|unique:counters,forunique',
        ]);

        $counter= new counter;
        $counter->name=$request->input('name');
        $counter->value=$request->input('value');
        $counter->forunique=$request->input('forunique');
        $counter->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/indexpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit(Counter $counter)
    {
        $counter= counter::find($counter)->first();
        return view('Admin/pages/pagesDesign/indexpageEdit/counter')->with('counter',$counter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counter $counter)
    {
        $this->validate($request,[
            'name'=>'required',
            'value'=>'required',
        ]);

        $counter= counter::find($counter)->first();
        $counter->name=$request->input('name');
        $counter->value=$request->input('value');
        $counter->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/indexpageEdit/counter')->with('counter',$counter);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy(counter $counter)
    {
        $counter= counter::find($counter)->first();
        $counter->delete();
        
        session()->flash('success','Deleted Successfully');

        $coverimage=coverimage::all();
        $Coverpagegallery=Coverpagegallery::all();
        $jumbotron=jumbotron::all();
        $Whyus=Whyus::all();
        $Counter=Counter::all();
        return view('Admin/pages/pagesDesign/indexpageEdit')->with('coverimage',$coverimage)
                                                            ->with('Coverpagegallery',$Coverpagegallery)
                                                            ->with('jumbotron',$jumbotron)
                                                            ->with('Whyus',$Whyus)
                                                            ->with('Counter',$Counter);
    }
}
