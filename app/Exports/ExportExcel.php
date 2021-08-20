<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportExcel implements FromView
{
    private $dados;
    private $url;
    private $equipamento;

    public function __construct($equipamento) {
        $this->equipamento = $equipamento;
        $this->url = "http://127.0.0.1:8080/". $this->equipamento;


        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
        $response = curl_exec($ch);
        $dados = json_decode($response);
        curl_close($ch);

        $this->dados = $dados;
        return $this->dados;
        
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {   
        return view("exports.{$this->equipamento}Exports", [
            'dados' => $this->dados
        ]);
    }
}
