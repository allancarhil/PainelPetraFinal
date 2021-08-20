<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;



class DataExport implements WithMultipleSheets
{
    use Exportable;

    protected $data;
    
    
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function sheets(): array
    {

        $sheets = new DataExport($this->data);
        $dataExcel=[];
        foreach($sheets as $s){
            
           Array($dataExce) = new DataExport($s);
        }
       

        return $dataExcel;
    }
}