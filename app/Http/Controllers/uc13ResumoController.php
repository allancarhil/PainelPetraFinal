<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uc13ResumoController extends Controller
{
    public function index(){
       
        return view('uc13Resumo.list');
    }
}