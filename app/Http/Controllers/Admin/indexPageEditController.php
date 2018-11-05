<?php

namespace App\Http\Controllers\Admin;

use App\Coverpagegallery;
use App\coverimage;
use App\jumbotron;
use App\Whyus;
use App\Counter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexPageEditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
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
