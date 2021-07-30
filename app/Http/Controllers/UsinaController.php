<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Exception;
use App\Models\Api;
use App\Exports\ExportExcelId;
use App\Exports\ExportExcelData;
use App\Exports\ExportExcel;
use Maatwebsite\Excel\Facades\Excel as Excel;

class UsinaController extends Controller
{

    public function index(){
        try{
            $api = new Api();
            $dados = $api->getAll("usina");

            return view('usina.list', compact('dados'));
        }catch(Exception $error ){
            return view('error', compact('error'));
        }
    }

    public function index2(){
        try{
            $api = new Api();
            $dados = $api->getAll("usina");

            return view('usina.prelist', compact('dados'));
        }catch(Exception $error ){
            return view('error', compact('error'));
        }
    }

    public function data(Request $request){
        try{
            $data =  date( 'd-m-Y' , strtotime($request->get("data")));
            $api = new Api();
            $dados = $api->getAll("usina/data/" . $data);

            return view('usina.list', compact('dados'));
        }catch(Exception $error ){
            return view('error', compact('error'));
        }
    }


    public function form(){

        return view('usina.form');
    }

    public function exportPDF($id){

        try{
            $api = new Api();
            $d = $api->getAll("usina/" . $id);

            $pdf = PDF::loadView('usina.pdf', compact('d'))->setOptions(['isRemoteEnabled' => TRUE,'dpi' => 110, 'defaultFont' => 'sans-serif'])->setPaper('a4');
            return $pdf->stream('usina-relatorio.pdf', array("Attachment" => true));
        }catch(Exception $error ){
            return view('error', compact('error'));
        }
    }
    public function exportExcelId($equipamento, $id){
        try{
            return Excel::download(new ExportExcelId($equipamento, $id), "{$equipamento}-{$id}.xlsx");
        }catch(Exception $error){
            echo  $error;
        }
    }

    public function exportExcelData($equipamento, $data){
        try{
            return Excel::download(new ExportExcelData($equipamento, $data), "{$equipamento}-{$data}.xlsx");
        }catch(Exception $error){
            echo  $error;
        }
    }

    public function exportExcel($equipamento){
        try{
           return Excel::download(new ExportExcel($equipamento), "{$equipamento}-todos.xlsx");
        }catch(Exception $error){
            echo  $error;
        }
    }
}
