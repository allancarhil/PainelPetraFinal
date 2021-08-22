<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Api;
use App\Exports\DataExport;
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
            $indice = 0;

            foreach ($dados as $d => $key) {
                if ($key != []) {
                    $indice++;
                    $result[$indice] = $key;
                }
            }

            return Excel::download(new DataExport($result), "{$result}-todosPorData.xlsx");
            //dd($dados);

        } catch (Exception $error) {
            echo  $error;
        }
    }
}
