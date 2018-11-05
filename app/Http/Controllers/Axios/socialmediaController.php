<?php

namespace App\Http\Controllers\Axios;

use App\Newsalumni;
use App\Newsparent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class socialmediaController extends Controller
{
    public function parents()
    {
        $parentLinks=Newsparent::all();

        return $parentLinks;
        
    }
    public function alumni()
    {
        $alumniLinks=Newsalumni::all();
        
        return $alumniLinks;
    }
}
