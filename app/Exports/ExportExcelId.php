<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportExcelId implements FromView
{
    private $id;
    private $dados;
    private $url;
    private $equipamento;

    public function __construct($equipamento, $id) {
        $this->equipamento = $equipamento;
        $this->id = $id;
        $this->url = "http://192.168.0.246:8080/". $this->equipamento . "/" . $this->id;


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
        return view("exports.exportsId.{$this->equipamento}ExportsId", [
            'dados' => $this->dados
        ]);
    }
}
