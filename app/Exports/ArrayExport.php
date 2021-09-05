<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ArrayExport implements FromArray, WithMultipleSheets, WithHeadings
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */

    public $dados;
    public $teste = [];
    public function __construct($dados)
    {

        $indice = 0;
        $result = [];

        if ($dados == [] || $dados == null) {
            return "Error";
        } else {
            foreach ($dados as $d => $key) {
                if ($key != []) {
                    $indice++;
                    $result[$indice] = $key;
                }
            }
        }
        $this->dados = $result;
    }


    public function array(): array
    {
        return $this->dados;
    }

    public function sheets(): array
    {

        $sheets = [];

        for ($i = 1; $i <= count($this->dados); $i++) {
            $sheets[] = new ArrayExport($this->dados[$i]);
        }
        return $sheets;
    }

    public function headings(): array
    {
       return $this->teste;
    }
}
