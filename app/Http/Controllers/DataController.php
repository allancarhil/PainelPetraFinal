<?php

namespace App\Http\Controllers;

use App\Exports\ArrayExport;
use App\Exports\ExportExcel;
use Exception;
use App\Models\Api;
use Maatwebsite\Excel\Facades\Excel as Excel;

//use Maatwebsite\Excel\Excel as ExcelExcel;

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


            $indice = 0;
            //dd($array[1][0]);

            for ($i = 1; $i <= count($array); $i++) {
                foreach ($array[$i] as $arr => $key) {
                    return Excel::download(new ExportExcel(strtolower($key->nome_equipamento)), "{$key->nome_equipamento}-todos.xlsx");
                }
            }
        } catch (Exception $error) {
            echo  $error;
        }
    }
}
