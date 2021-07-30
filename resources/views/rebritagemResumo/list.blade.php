@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-top">
        <div class="row-md-12">
            <div class="card">
            <div class="card-header" style="background-color: #6ab2ec">
                <a href="{{url('rebritagemResumo')}}" style="color:#000000"><b>Resumo REBRITAGEM</b></a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   

                    </table>
                    <table class="table-bordered1" >
                        
                            <tr >
                                <th scope="col">Dia</th>
                                <th scope="col">Semana</th>
                                <th scope="col">Mês</th>
                            </tr>
                            <tr>
                               
                                <td><input type="date" name="Operador" value=""></td>
                                <td><input type="week" name="Operador" value=""></td>
                                <td><input type="month" name="Operador" value=""></td>
                            </tr>
                    </table>

                    
                    <br/>

                   
                    <br/>
                    <table class=" table-bordered" Style="justify-center" >
                        <thead>
                            <tr style="background-color: #6ab2ec"  >
                                <th scope="col" width="936px">REBRITAGEM</th> 
                            </tr>
                        </thead>
                    </table>
                    <table class="table-bordered">
                            <tr>
                                <th scope="col">Horímetro UA-02</th>
                                <th scope="col">Horímetro UA-03</th>
                                <th scope="col">Horímetro UA-04</th>
                                <th scope="col">Horímetro S3000</th>
                                <th scope="col">Horímetro H4000</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>
                            </tr>
                    </table>
                    <table class="table-bordered">
                            <tr>
                                <th scope="col">Metal UC11</th>
                                <th scope="col">Metal UC03</th>
                                <th scope="col">Metal UC09</th>
                                <th scope="col">Metal UC09</th>
                                
                            </tr>
                            <tr>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>

                            </tr>
                    </table>
                    <table class="table-bordered">
                            <tr>
                                <th scope="col">Engaiolamento UC11</th>
                                <th scope="col">Engaiolamento UC11</th>
                                <th scope="col">Engaiolamento UC11</th>

                                
                            </tr>
                            <tr>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>
                            </tr>
                    </table>
                    <table class="table-bordered">
                            <tr>
                                <th scope="col">Balança UTC04</th>
                                <th scope="col">Balança UTC05</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="Operador" value=""></td>
                                <td><input type="text" name="Operador" value=""></td>
                            </tr>
                    </table>


<br/>
<br/>
                    



                    <br/>
                    <table class="table-bordered">
                                <tbody>
                                    <tr>
                                    

                                    <td><a href="ut07/edit" class="btn btn-info">Exportar PDF</a></td>
                                    <td><a href="ut07/edit" class="btn btn-info">Exportar CSV</a></td>
                                    <td><a href="ut07/edit" class="btn btn-info">Enviar por e-mail</a></td>
                                    </tr>
                                </tbody>
                            </table>


                           


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
