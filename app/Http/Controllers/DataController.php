<?php

namespace App\Http\Controllers;

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

            $var = [];

            for ($i = 1; $i <= count($array); $i++) {
                foreach ($array[$i] as $arr => $key) {
                    $var[] = $key;
                }
            }

            return Excel::download(new ArrayExport($var,), "$data.todos.xlsx");
        } catch (Exception $error) {
            echo  $error;
        }
    }
}
