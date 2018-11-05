<?php

namespace App\Http\Controllers\Axios;

use App\Faith;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class faithController extends Controller
{
    public function axiosFaith()
    {
        $faith=Faith::all();

        return $faith;
    }
}
