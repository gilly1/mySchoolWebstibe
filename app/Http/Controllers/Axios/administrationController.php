<?php

namespace App\Http\Controllers\Axios;

use App\schbosspage;
use App\schbossimage;
use App\pta;
use App\board;
use App\teacher;
use App\worker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class administrationController extends Controller
{
    public function axiosSchbosspage()
    {
        $schbosspage=schbosspage::all();

        return $schbosspage;
    }

    public function axiosSchbossimage()
    {
        $schbossimage=schbossimage::all();

        return $schbossimage;
    }

    public function axiosPta()
    {
        $pta=pta::all();

        return $pta;
    }

    public function axiosBoard()
    {
        $board=board::all();

        return $board;
    }

    public function axiosTeachers()
    {
        $teacher=teacher::all();

        return $teacher;
    }

    public function axiosWorkers()
    {
        $worker=worker::all();

        return $worker;
    }
}
