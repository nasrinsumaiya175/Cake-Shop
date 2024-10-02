<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $cakes = Service::all();
        $team = Team::all();
        return view('front.pages.home', ['cake' => $cakes],['data'=>$team]);
    }
}
