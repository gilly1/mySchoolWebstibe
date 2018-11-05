<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaithServiceController extends Controller
{
    public function index(){
        return view('pages.faithAndservice');
    }
}
