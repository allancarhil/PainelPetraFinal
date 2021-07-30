<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mn01ResumoController extends Controller
{
    public function index(){
       
        return view('mn01Resumo.list');
    }
}