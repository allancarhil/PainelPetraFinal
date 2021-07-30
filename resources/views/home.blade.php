@extends('adminlte::page')

@section('content')

<div class="container">
    <div class="card justify-content-center">
<table class="table">
                <thead class="table-light table-bordered">
                    <tr style="background-color: #6ab2ec">
                        <th scope="col" width="500px" style="text-align:center">SEJA BE-VINDO AO PAINEL DE GESTÃO DE PARTES DIÁRIAS DA PETRA AGREGADOS</th>

                    </tr>
                </thead>
                <tbody>
                <tr>
                <td style="text-align:center">ESCOLHA AO LADO O EQUIPAMENTO QUE DESEJA REALIZAR A CONSULTA</td>
                </tr>
                </tbody>
</table>
</div>
</div>
    
<div class="container">
    <div class="card justify-content-center">
        
        <div class="card-body">
             @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
                <form action="{{url('us36')}}" method ="POST">
            
                @csrf
                <div class="form-group">
                    <label for="exampleInputData">Equipamento: </label>
                    <input type="Text" name="equipamento" label="Equipamento" class="form-control " >
                </div> 
                    
                <div class="form-group">
                    <label for="exampleInputData">Data: </label>
                    <input type="date" name="data" label="Dia-Mes-Ano" class="form-control " >
                </div>               
                 <button type="submit" class="btn btn-primary">Buscar</button>
            </form>        
        </div>
    </div>
</div>

@endsection
