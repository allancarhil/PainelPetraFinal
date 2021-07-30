<?php

use App\Mail\newparteDiaria;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

#Us36 Routes
Route::get('/us36/index', [App\Http\Controllers\Us36Controller::class, 'index'])->middleware('auth');
Route::post('/us36', [App\Http\Controllers\Us36Controller::class, 'data'])->middleware('auth');
Route::get('/us36/form', [App\Http\Controllers\Us36Controller::class, 'form'])->middleware('auth');
Route::post('us36/{id}/pdf', [App\Http\Controllers\Us36Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Us36Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Us36Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Us36Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/us36/index2', [App\Http\Controllers\Us36Controller::class, 'index2'])->middleware('auth');

#End Us36 Routes

#Us06 Routes
Route::get('/us06/index', [App\Http\Controllers\Us06Controller::class, 'index'])->middleware('auth');
Route::post('/us06', [App\Http\Controllers\Us06Controller::class, 'data'])->middleware('auth');
Route::get('/us06/form', [App\Http\Controllers\Us06Controller::class, 'form'])->middleware('auth');
Route::post('us06/{id}/pdf', [App\Http\Controllers\Us06Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Us06Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Us06Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Us06Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/us06/index2', [App\Http\Controllers\Us06Controller::class, 'index2'])->middleware('auth');

#End Us06 Routes

#Mn01 Routes
Route::get('/mn01/index', [App\Http\Controllers\Mn01Controller::class, 'index'])->middleware('auth');
Route::post('/mn01', [App\Http\Controllers\Mn01Controller::class, 'data'])->middleware('auth');
Route::get('/mn01/form', [App\Http\Controllers\Mn01Controller::class, 'form'])->middleware('auth');
Route::post('mn01/{id}/pdf', [App\Http\Controllers\Mn01Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Mn01Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Mn01Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Mn01Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/mn01/index2', [App\Http\Controllers\Mn01Controller::class, 'index2'])->middleware('auth');
#End Mn01 Routes

#Ut07 Routes
Route::get('/ut07/index', [App\Http\Controllers\Ut07Controller::class, 'index'])->middleware('auth');
Route::post('/ut07', [App\Http\Controllers\Ut07Controller::class, 'data'])->middleware('auth');
Route::get('/ut07/form', [App\Http\Controllers\Ut07Controller::class, 'form'])->middleware('auth');
Route::post('ut07/{id}/pdf', [App\Http\Controllers\Ut07Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Ut07Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Ut07Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Ut07Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/ut07/index2', [App\Http\Controllers\Ut07Controller::class, 'index2'])->middleware('auth');
#End Ut07 Routes

#Ut08 Routes
Route::get('/ut08/index', [App\Http\Controllers\Ut08Controller::class, 'index'])->middleware('auth');
Route::post('/ut08', [App\Http\Controllers\Ut08Controller::class, 'data'])->middleware('auth');
Route::get('/ut08/form', [App\Http\Controllers\Ut08Controller::class, 'form'])->middleware('auth');
Route::post('ut08/{id}/pdf', [App\Http\Controllers\Ut08Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Ut08Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Ut08Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Ut08Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/ut08/index2', [App\Http\Controllers\Ut08Controller::class, 'index2'])->middleware('auth');
#End Ut08 Routes

#Ut37 Routes
Route::get('/ut37/index', [App\Http\Controllers\Ut37Controller::class, 'index'])->middleware('auth');
Route::post('/ut37', [App\Http\Controllers\Ut37Controller::class, 'data'])->middleware('auth');
Route::get('/ut37/form', [App\Http\Controllers\Ut37Controller::class, 'form'])->middleware('auth');
Route::post('ut37/{id}/pdf', [App\Http\Controllers\Ut37Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Ut37Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Ut37Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Ut37Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/ut37/index2', [App\Http\Controllers\Ut37Controller::class, 'index2'])->middleware('auth');

#End Ut37 Routes

#Up0507 Routes
Route::get('/up0507/index', [App\Http\Controllers\Up0507Controller::class, 'index'])->middleware('auth');
Route::post('/up0507', [App\Http\Controllers\Up0507Controller::class, 'data'])->middleware('auth');
Route::get('/up0507/form', [App\Http\Controllers\Up0507Controller::class, 'form'])->middleware('auth');
Route::post('up0507/{id}/pdf', [App\Http\Controllers\Up0507Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Up0507Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Up0507Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Up0507Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/up0507/index2', [App\Http\Controllers\Up0507Controller::class, 'index2'])->middleware('auth');
#End Up0507 Routes


#Uc06 Routes
Route::get('/uc06/index', [App\Http\Controllers\Uc06Controller::class, 'index'])->middleware('auth');
Route::post('/uc06', [App\Http\Controllers\Uc06Controller::class, 'data'])->middleware('auth');
Route::get('/uc06/form', [App\Http\Controllers\Uc06Controller::class, 'form'])->middleware('auth');
Route::post('uc06/{id}/pdf', [App\Http\Controllers\Uc06Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Uc06Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Uc06Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Uc06Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/uc06/index2', [App\Http\Controllers\Uc06Controller::class, 'index2'])->middleware('auth');
#End Uc06 Routes

#Uc07 Routes
Route::get('/uc07/index', [App\Http\Controllers\Uc07Controller::class, 'index'])->middleware('auth');
Route::post('/uc07', [App\Http\Controllers\Uc07Controller::class, 'data'])->middleware('auth');
Route::get('/uc07/form', [App\Http\Controllers\Uc07Controller::class, 'form'])->middleware('auth');
Route::post('uc07/{id}/pdf', [App\Http\Controllers\Uc07Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Uc07Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Uc07Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Uc07Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/uc07/index2', [App\Http\Controllers\Uc07Controller::class, 'index2'])->middleware('auth');
#End Uc07 Routes

#Uc11 Routes
Route::get('/uc11/index', [App\Http\Controllers\Uc11Controller::class, 'index'])->middleware('auth');
Route::post('/uc11', [App\Http\Controllers\Uc11Controller::class, 'data'])->middleware('auth');
Route::get('/uc11/form', [App\Http\Controllers\Uc11Controller::class, 'form'])->middleware('auth');
Route::post('uc11/{id}/pdf', [App\Http\Controllers\Uc11Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Uc11Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Uc11Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Uc11Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/uc11/index2', [App\Http\Controllers\Uc11Controller::class, 'index2'])->middleware('auth');
#End Uc11 Routes

#Uc13 Routes
Route::get('/uc13/index', [App\Http\Controllers\Uc13Controller::class, 'index'])->middleware('auth');
Route::post('/uc13', [App\Http\Controllers\Uc13Controller::class, 'data'])->middleware('auth');
Route::get('/uc13/form', [App\Http\Controllers\Uc13Controller::class, 'form'])->middleware('auth');
Route::post('uc13/{id}/pdf', [App\Http\Controllers\Uc13Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Uc13Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Uc13Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Uc13Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/uc13/index2', [App\Http\Controllers\Uc13Controller::class, 'index2'])->middleware('auth');
#End Uc13 Routes

#Uc14 Routes
Route::get('/uc14/index', [App\Http\Controllers\Uc14Controller::class, 'index'])->middleware('auth');
Route::post('/uc14', [App\Http\Controllers\Uc14Controller::class, 'data'])->middleware('auth');
Route::get('/uc14/form', [App\Http\Controllers\Uc14Controller::class, 'form'])->middleware('auth');
Route::post('uc14/{id}/pdf', [App\Http\Controllers\Uc14Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Uc14Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Uc14Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Uc14Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/uc14/index2', [App\Http\Controllers\Uc14Controller::class, 'index2'])->middleware('auth');
#End Uc14 Routes

#Ub02 Routes
Route::get('/ub02/index', [App\Http\Controllers\Ub02Controller::class, 'index'])->middleware('auth');
Route::post('/ub02', [App\Http\Controllers\Ub02Controller::class, 'data'])->middleware('auth');
Route::get('/ub02/form', [App\Http\Controllers\Ub02Controller::class, 'form'])->middleware('auth');
Route::post('ub02/{id}/pdf', [App\Http\Controllers\Ub02Controller::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\Ub02Controller::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\Ub02Controller::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\Ub02Controller::class, 'exportExcelData'])->name('excelData');
Route::get('/ub02/index2', [App\Http\Controllers\Ub02Controller::class, 'index2'])->middleware('auth');
#End Ub02 Routes

#Usina Routes
Route::get('/usina/index', [App\Http\Controllers\UsinaController::class, 'index'])->middleware('auth');
Route::post('/usina', [App\Http\Controllers\UsinaController::class, 'data'])->middleware('auth');
Route::get('/usina/form', [App\Http\Controllers\UsinaController::class, 'form'])->middleware('auth');
Route::post('usina/{id}/pdf', [App\Http\Controllers\UsinaController::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\UsinaController::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\UsinaController::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\UsinaController::class, 'exportExcelData'])->name('excelData');
Route::get('/usina/index2', [App\Http\Controllers\UsinaController::class, 'index2'])->middleware('auth');
#End Usina Routes

#Rebritagem Routes
Route::get('/rebritagem/index', [App\Http\Controllers\RebritagemController::class, 'index'])->middleware('auth');
Route::post('/rebritagem', [App\Http\Controllers\RebritagemController::class, 'data'])->middleware('auth');
Route::get('/rebritagem/form', [App\Http\Controllers\RebritagemController::class, 'form'])->middleware('auth');
Route::post('rebritagem/{id}/pdf', [App\Http\Controllers\RebritagemController::class, 'exportPDF'])->name('pdf');
Route::post('/{equipamento}/excel', [App\Http\Controllers\RebritagemController::class, 'exportExcel'])->name('excel');
Route::post('/{equipamento}/excel/{id}', [App\Http\Controllers\RebritagemController::class, 'exportExcelId'])->name('excelId');
Route::post('/{equipamento}/excel/data/{data}', [App\Http\Controllers\RebritagemController::class, 'exportExcelData'])->name('excelData');
Route::get('/rebritagem/index2', [App\Http\Controllers\RebritagemController::class, 'index2'])->middleware('auth');
#End Rebritagem Routes


//Resumo Routes
Route::get('/resumo', [App\Http\Controllers\ResumoController::class, 'index'])->middleware('auth');


//Resumo Routes
Route::get('/us36Resumo', [App\Http\Controllers\us36ResumoController::class, 'index'])->middleware('auth');
//Resumo Routes
Route::get('/us06Resumo', [App\Http\Controllers\us06ResumoController::class, 'index'])->middleware('auth');
//Resumo Routes
Route::get('/mn01Resumo', [App\Http\Controllers\mn01ResumoController::class, 'index'])->middleware('auth');
//Resumo Routes
Route::get('/up0507Resumo', [App\Http\Controllers\up0507ResumoController::class, 'index'])->middleware('auth');
//Resumo Routes
Route::post('/ut0708Resumo', [App\Http\Controllers\ut0708ResumoController::class, 'data'])->middleware('auth');
Route::get('/ut0708Resumo/form', [App\Http\Controllers\ut0708ResumoController::class, 'form'])->middleware('auth');
Route::post('ut0708Resumo/{id}/pdf', [App\Http\Controllers\ut0708ResumoController::class, 'exportPDF'])->name('pdf');
//Resumo Routes
Route::post('/uc06Resumo', [App\Http\Controllers\uc06ResumoController::class, 'data'])->middleware('auth');
Route::get('/uc06Resumo/form', [App\Http\Controllers\uc06ResumoController::class, 'form'])->middleware('auth');
Route::post('uc06Resumo/{id}/pdf', [App\Http\Controllers\uc06ResumoController::class, 'exportPDF'])->name('pdf');
//Resumo Routes
Route::post('/uc07Resumo', [App\Http\Controllers\uc07ResumoController::class, 'data'])->middleware('auth');
Route::get('/uc07Resumo/form', [App\Http\Controllers\uc07ResumoController::class, 'form'])->middleware('auth');
Route::post('uc07Resumo/{id}/pdf', [App\Http\Controllers\uc07ResumoController::class, 'exportPDF'])->name('pdf');
//Resumo Routes
Route::post('/uc11Resumo', [App\Http\Controllers\uc11ResumoController::class, 'data'])->middleware('auth');
Route::get('/uc11Resumo/form', [App\Http\Controllers\uc11ResumoController::class, 'form'])->middleware('auth');
Route::post('uc11Resumo/{id}/pdf', [App\Http\Controllers\uc11ResumoController::class, 'exportPDF'])->name('pdf');
//Resumo Routes
Route::post('/uc13Resumo', [App\Http\Controllers\uc13ResumoController::class, 'data'])->middleware('auth');
Route::get('/uc13Resumo/form', [App\Http\Controllers\uc13ResumoController::class, 'form'])->middleware('auth');
Route::post('uc13Resumo/{id}/pdf', [App\Http\Controllers\uc13ResumoController::class, 'exportPDF'])->name('pdf');
//Resumo Routes
Route::post('/uc14Resumo', [App\Http\Controllers\uc14ResumoController::class, 'data'])->middleware('auth');
Route::get('/uc14Resumo/form', [App\Http\Controllers\uc14ResumoController::class, 'form'])->middleware('auth');
Route::post('uc14Resumo/{id}/pdf', [App\Http\Controllers\uc14ResumoController::class, 'exportPDF'])->name('pdf');
//Resumo Routes
Route::get('/ub02Resumo', [App\Http\Controllers\ub02ResumoController::class, 'index'])->middleware('auth');
//Resumo Routes
Route::get('/usinaResumo', [App\Http\Controllers\usinaResumoController::class, 'index'])->middleware('auth');
//Resumo Routes
Route::get('/rebritagemResumo', [App\Http\Controllers\rebritagemResumoController::class, 'index'])->middleware('auth');


//Route email
Route::get('/mn01/envio-email',function(){
    
    $user=new stdClass();
    $user->name='Allan';
    $user->email='allan@petraagregados.com';
    //return new newparteDiaria($user);
    Mail::send(new newparteDiaria($user));
    }
);