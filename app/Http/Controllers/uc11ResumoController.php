<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uc11ResumoController extends Controller
{
    public function index(){
       
        return view('uc11Resumo.list');
    }
}