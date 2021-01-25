<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Experiance;
use App\Models\Skill;

class HomePageControler extends Controller
{
    public function index () {
        $experiances = Experiance::all();
        $skills = Skill::all();
        return view('front.index')->with(['experiances'=>$experiances,'skills'=>$skills]);
    }
}
