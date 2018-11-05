<?php

namespace App\Http\Controllers\Axios;

use App\overview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class overviewController extends Controller
{
    public function axiosOverview()
    {
        $overview=overview::all();

        return $overview;
    }
}
