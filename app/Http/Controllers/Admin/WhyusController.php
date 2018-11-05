<?php

namespace App\Http\Controllers\Admin;

use App\Coverpagegallery;
use App\coverimage;
use App\jumbotron;
use App\Whyus;
use App\Counter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WhyusController extends Controller
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
            'title'=>'required',
            'body'=>'required',
            'forunique'=>'required|unique:whyuses,forunique',
        ]);

        $Whyus=new Whyus;
        $Whyus->forunique=$request->input('forunique');
        $Whyus->title=$request->input('title');
        $Whyus->body=$request->input('body');
        $Whyus->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/indexpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Whyus  $whyus
     * @return \Illuminate\Http\Response
     */
    public function show(Whyus $whyus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Whyus  $whyus
     * @return \Illuminate\Http\Response
     */
    public function edit(whyus $whyus)
    {
        $whyus= whyus::find($whyus)->first();
        return view('Admin/pages/pagesDesign/indexpageEdit/whyUs')->with('whyus',$whyus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Whyus  $whyus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, whyus $whyus)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
        ]);

        $whyus= whyus::find($whyus)->first();
        $whyus->title=$request->input('title');
        $whyus->body=$request->input('body');
        $whyus->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/indexpageEdit/whyUs')->with('whyus',$whyus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Whyus  $whyus
     * @return \Illuminate\Http\Response
     */
    public function destroy(whyus $whyus)
    {
        $whyus= whyus::find($whyus)->first();
        $whyus->delete();
        
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
