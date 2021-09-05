<?php

namespace App\Http\Controllers;

use App\Models\Cabecalhos;
use App\Exports\ArrayExport;
use App\Exports\ExportExcel;
use Exception;
use App\Models\Api;
use Maatwebsite\Excel\Facades\Excel as Excel;

use PDF;

class DataController extends Controller
{
    public function exportExcel($data)
    {
        try {

            $api = new Api();
            $dados = $api->getAll("data/" . $data);

            $excel = new ArrayExport($dados);
            $array = $excel->dados;

            //dd(new ArrayExport($array));
            return (new ArrayExport($array))->download("$data.xlsx");
        } catch (Exception $error) {
            echo  $error;
        }
    }
}
