<?php

namespace App\Http\Controllers\Axios;

use App\Academic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class academicsController extends Controller
{
    public function axiosAcademics()
    {
        $academics=Academic::all();

        return $academics;
    }

}
