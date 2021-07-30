<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class up0507ResumoController extends Controller
{
    public function index(){
       
        return view('up0507Resumo.list');
    }
}