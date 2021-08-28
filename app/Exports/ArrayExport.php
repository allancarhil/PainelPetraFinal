<?php

namespace App\Exports;

use App\Models\Api;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;

class ArrayExport implements FromArray
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */

    public $dados;

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
}
