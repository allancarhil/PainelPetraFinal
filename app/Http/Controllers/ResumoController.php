<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumoController extends Controller
{
    public function index(){
       
        return view('resumo.list');
    }
}
