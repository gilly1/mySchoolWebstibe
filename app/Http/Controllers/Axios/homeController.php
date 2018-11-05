<?php

namespace App\Http\Controllers\Axios;

use App\coverimage;
use App\jumbotron;
use App\Whyus;
use App\Coverpagegallery;
use App\Counter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function coverimage()
    {
        $coverimage=coverimage::all();

        return $coverimage;
    }

    public function jumbotron()
    {
        $jumbotron=jumbotron::all();

        return $jumbotron;
    }

    public function whyus()
    {
        $Whyus=Whyus::all();

        return $Whyus;
    }

    public function frontgallery()
    {
        $Coverpagegallery=Coverpagegallery::all();

        return $Coverpagegallery;
    }

    public function counter()
    {
        $Counter=Counter::all();

        return $Counter;
    }
}
