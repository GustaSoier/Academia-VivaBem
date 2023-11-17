<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetoDetailsController extends Controller
{
    public function index(){
        return view('site.project-details');
    }
}
