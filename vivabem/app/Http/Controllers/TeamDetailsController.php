<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamDetailsController extends Controller
{
    public function index(){
        return view('site.team-details');
    }
}
