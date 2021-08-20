<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Api;
use App\Exports\DataExport;
use App\Exports\ExportExcelId;
use App\Exports\ExportExcelData;
use App\Exports\ExportExcel;
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
            return Excel::download(new DataExport($dados), "{$dados}-todosPorData.xlsx");
            //dd($dados);
         
        } catch (Exception $error) {
            echo  $error;
        }
    }
}
