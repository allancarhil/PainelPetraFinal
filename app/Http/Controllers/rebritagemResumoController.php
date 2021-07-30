<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rebritagemResumoController extends Controller
{
    public function index(){
       
        return view('rebritagemResumo.list');
    }
}