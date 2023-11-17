<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function index(){
        return view('site.services-details');
    }
}
