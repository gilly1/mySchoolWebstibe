<?php

namespace App\Http\Controllers\Admin;

use App\AcademicLink;
use App\GameLink;
use App\FaithLink;
use App\AboutLink;
use App\schbosspageLink;
use App\page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicLinkController extends Controller
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
        $link=AcademicLink::all();
        return view('Admin/pages/superAdmin/setUpThings')->with('link',$link);
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
        $AcademicLinks=array("Library","Guidance and Counselling","Sciences","Humanities","Languages","Mathematics","Technical And Creative");
        $GamesLinks=array("Rugby","Hockey","FootBall","VoleyBall","BasketBall","HandBall","Indoor Games");
        $FaithLinks=array("S.D.A","Christian union","Catholics","Muslims");
        $OverviewLinks=array("About","Academics","Administration","Co-Curriculars","Faith and Service");
        $AdminLinks=array("Principal","Deputy Principal","Senior Teacher");
        $AboutLinks=array("Boarding");
        
        foreach($AcademicLinks as $link){
            $Link=new AcademicLink;
            $Link->link=$link;
            $Link->save();
        }

        foreach($GamesLinks as $link){
            $Link=new GameLink;
            $Link->link=$link;
            $Link->save();
        }

        foreach($FaithLinks as $link){
            $Link=new FaithLink;
            $Link->link=$link;
            $Link->save();
        }

        foreach($OverviewLinks as $link){
            $Link=new page;
            $Link->pages=$link;
            $Link->save();
        }

        foreach($AdminLinks as $link){
            $Link=new schbosspageLink;
            $Link->link=$link;
            $Link->save();
        }

        foreach($AboutLinks as $link){
            $Link=new AboutLink;
            $Link->link=$link;
            $Link->save();
        }

        session()->flash('success','Added Successfully');

        $link=AcademicLink::all();
        return view('Admin/pages/superAdmin/setUpThings')->with('link',$link);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AcademicLink  $academicLink
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicLink $academicLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AcademicLink  $academicLink
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicLink $academicLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AcademicLink  $academicLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicLink $academicLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AcademicLink  $academicLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicLink $academicLink)
    {
        //
    }
}
