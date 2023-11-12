<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadesController extends Controller
{
    public function index(){
        return view('site.modalidade');
    }
}
