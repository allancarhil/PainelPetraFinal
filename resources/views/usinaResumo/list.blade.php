@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-top">
        <div class="row-md-12">
            <div class="card">
            <div class="card-header" style="background-color: #6ab2ec">
                <a href="{{url('usinaResumo')}}" style="color:#000000"><b>Resumo USINA</b></a>
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
                            <table class=" table-bordered">
                        <thead>
                            <tr style="background-color: #6ab2ec"  >
                                <th scope="col" width="1500px">USINA</th>
                            </tr>
                        </thead>
                        
                    </table>
                    <table class="table-bordered"> 
                    <tr>
                                <th scope="col">Horímetro</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="Operador" value=""></td>
                            </tr>
                    </table>
                    <table class="table-bordered">
                        
                       
                            <tr>
                            <th scope="col">Viagens por Motorista</th>
                            <th scope="col">Viagens por Material</th>
                            </tr>
                            <tr>
                            <td><textarea name="Observacoes" rows="10" cols="60"></textarea></td>    
                            <td><textarea name="Observacoes" rows="10" cols="60"></textarea></td>                          
                            </tr>
                            <table class="table-bordered">
                          <th scope="col">Observações</th>
                        </tr>
                        <tr>

                            <td><textarea name="Observacoes" rows="2" cols="30"></textarea></td>
                        </tr>
                        </table>
                    </table>



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
