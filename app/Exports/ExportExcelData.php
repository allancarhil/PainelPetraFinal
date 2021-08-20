<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportExcelData implements FromView
{
    private $data;
    private $dados;
    private $url;
    private $equipamento;

    public function __construct($equipamento, $data) {
        $this->equipamento = $equipamento;
        $this->data = $data;
        $this->url = "http://127.0.0.1:8080/". $this->equipamento . "/data". "/" . $this->data;
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
        $dados = $this->dados;
        return view("exports.{$this->equipamento}Exports", [
            'dados' => $dados
        ]);
    }
}