<?php

namespace App\Http\Controllers\Axios;

use App\game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class gamesController extends Controller
{
    public function axiosGames()
    {
        $games=game::all();

        return $games;
    }
}
