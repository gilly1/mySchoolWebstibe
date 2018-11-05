<?php

namespace App\Http\Controllers\Admin;

use App\Tender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenderController extends Controller
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
        $tenders=Tender::all();
        return view('Admin/pages/pagesDesign/about/tender')->with('tenders',$tenders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/pages/pagesDesign/about/tenderAdd');
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
            'body'=>'required'
        ]);

        $tender=new Tender;
        $tender->title=$request->input('title');
        $tender->body=$request->input('body');
        $tender->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/about/tenderAdd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit($tender)
    {
        $tenders=Tender::where('title',$tender)->first();

        return view('Admin/pages/pagesDesign/about/tenderEdit')->with('tenders',$tenders);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tender)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);

        $tenders=Tender::where('title',$tender)->first();
        $tenders->title=$request->input('title');
        $tenders->body=$request->input('body');
        $tenders->save();

        session()->flash('success','Added Successfully');

        return view('Admin/pages/pagesDesign/about/tenderEdit')->with('tenders',$tenders);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy($tender)
    {
        $tenders= Tender::where('id',$tender)->first();
        $tenders->delete();
        
        session()->flash('success','Deleted Successfully');

        
        $tenders=Tender::all();
        return view('Admin/pages/pagesDesign/about/tender')->with('tenders',$tenders);
    }
}
