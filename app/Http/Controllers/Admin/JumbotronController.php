<?php

namespace App\Http\Controllers\Admin;

use App\Coverpagegallery;
use App\coverimage;
use App\jumbotron;
use App\Whyus;
use App\Counter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JumbotronController extends Controller
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
            'forunique'=>'required|unique:jumbotrons,forunique',
        ]);

        $jumbotron=new jumbotron;
        $jumbotron->forunique=$request->input('forunique');
        $jumbotron->title=$request->input('title');
        $jumbotron->body=$request->input('body');
        $jumbotron->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/indexpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function show(jumbotron $jumbotron)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function edit(jumbotron $jumbotron)
    {
        $jumbotron= jumbotron::find($jumbotron)->first();
        return view('Admin/pages/pagesDesign/indexpageEdit/jumbotron')->with('jumbotron',$jumbotron);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jumbotron $jumbotron)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
        ]);

        $jumbotron= jumbotron::find($jumbotron)->first();
        $jumbotron->title=$request->input('title');
        $jumbotron->body=$request->input('body');
        $jumbotron->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/indexpageEdit/jumbotron')->with('jumbotron',$jumbotron);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function destroy(jumbotron $jumbotron)
    {
        $jumbotron= jumbotron::find($jumbotron)->first();
        $jumbotron->delete();
        
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
