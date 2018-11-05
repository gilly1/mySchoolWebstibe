<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CocurricularsController extends Controller
{
    public function index(){
        return view('pages.cocurriculars');
    }
}
