<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class us06ResumoController extends Controller
{
    public function index(){
       
        return view('us06Resumo.list');
    }
}