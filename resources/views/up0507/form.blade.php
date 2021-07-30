@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card justify-content-center">
        <div class="card-header " style="background-color: #6ab2ec;display:inline-flexbox;">
            <h1 style="font-weight: bold;">UP-0507</h1>
            <form action="{{url('/up0507/excel')}}" method="POST" target="_blank">
                        @csrf
                        <button type="submit" class="btn btn-primary">Exportar todos via Excel</button>
                    </form>
        </div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="form-group" style="display:grid;">
                <form action="{{url('up0507')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputData">Data: </label>
                        <input type="date" name="data" label="Dia-Mes-Ano" class="form-control ">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Buscar</button>
                    
                    <a href="{{url('up0507/index2')}}" class="btn btn-primary" >Buscar Todos</a>
                    </form><br/>
                    
               
            </div>
        </div>
    </div>
</div>
@endsection