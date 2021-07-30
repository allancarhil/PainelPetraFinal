<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Exception;
use App\Models\Api;
class ut0708ResumoController extends Controller
{
    /*public function index(){

        $ch = curl_init();
        $url = "http://127.0.0.1:8080/ut08";
       
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
        $response = curl_exec($ch);

        if($e = curl_error($ch)){
            echo $e;
        } else{
            $dados = json_decode($response);
        }

        return view('ut08.list', ['dados' =>$dados]);
        
    }*/

    public function data(Request $request){
        
        $data =  date( 'd-m-Y' , strtotime($request->get("data")));
        
        $ch = curl_init();
        $url = "http://127.0.0.1:8080/ut07/data/". $data;
        $ur2 = "http://127.0.0.1:8080/ut08/data/". $data;
        $ur3 = "http://127.0.0.1:8080/ut37/data/". $data;
       
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
        $response = curl_exec($ch);

        if($e = curl_error($ch)){
            echo $e;
        } else{
            $dados = json_decode($response);
            $dados2=json_decode($response);
            $dados3=json_decode($response);
        }

        
        return view('ut0708Resumo.list', compact('dados',));
    }

    public function form(){
        return view('ut0708Resumo.form');

    }

    public function exportPDF($id){

        try{
            $api = new Api();
            $d = $api->getAll("ut07/" . $id);

            $pdf = PDF::loadView('ut07.pdf', compact('d'))->setOptions(['isRemoteEnabled' => TRUE,'dpi' => 110, 'defaultFont' => 'sans-serif'])->setPaper('a4');
            return $pdf->stream('ut07-relatorio.pdf', array("Attachment" => true));
        }catch(Exception $error ){
            return view('error', compact('error'));
        }
    }
 
}