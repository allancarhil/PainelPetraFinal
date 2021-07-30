<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use PDF;

class uc14ResumoController extends Controller
{
    /*public function index(){

        $ch = curl_init();
        $url = "http://127.0.0.1:8080/uc14";
       
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
        $response = curl_exec($ch);

        if($e = curl_error($ch)){
            echo $e;
        } else{
            $dados = json_decode($response);
        }

        return view('uc14.list', ['dados' =>$dados]);
        
    }*/

     #Função pega a data passada por parametro, consulta os dados no banco e retorna pra view
     public function data(Request $request){
        
        $data =  date( 'd-m-Y' , strtotime($request->get("data")));
        
        $ch = curl_init();
        $url = "http://127.0.0.1:8080/uc14/data/". $data;
       
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
        $response = curl_exec($ch);

        if($e = curl_error($ch)){
            echo $e;
        } else{
            $dados = json_decode($response);
        }

        
        
        return view('uc14Resumo.list', compact('dados'));
    }

    #função chama o formulário
    public function form(){

        return view('uc14Resumo.form');

    }

    public function exportPDF($id)
    {

        try {
            $ch = curl_init();
            $url = "http://127.0.0.1:8080/uc14Resumo/" . $id;

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
            $response = curl_exec($ch);

            if ($e = curl_error($ch)) {
                echo $e;
            } else {
                $d = json_decode($response);
            }
            //dd($dados);
            //return view('uc14.pdf', compact('d'));
            set_time_limit(300);
            
            
            
            $pdf = PDF::loadView('uc14Resumo.pdf', compact('d'))->setOptions([
                'isRemoteEnabled' => TRUE,
                'dpi' => 115, 
                'defaultFont' => 'sans-serif'
            ])->setPaper('a4');
            return $pdf->stream('uc14Resumo-relatorio.pdf');
            
        } catch (Exception $e) {
        }
    }
}
