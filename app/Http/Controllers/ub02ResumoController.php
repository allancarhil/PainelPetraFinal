<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ub02ResumoController extends Controller
{
    public function index(){
       
        return view('ub02Resumo.list');
    }
}