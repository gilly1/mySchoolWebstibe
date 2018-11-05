<?php

namespace App\Http\Controllers\Axios;

use App\About;
use App\event;
use App\Tender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class aboutController extends Controller
{
    public function axiosAbout()
    {
        $about=About::all();

        return $about;
    }
    public function axiosNews()
    {
        $event=event::all();

        return $event;
    }
    public function axiosTender()
    {
        $tender=Tender::all();

        return $tender;
    }
}
