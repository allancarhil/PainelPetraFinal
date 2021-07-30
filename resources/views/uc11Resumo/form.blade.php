@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card justify-content-center">
        <div class="card-header " style="background-color: #6ab2ec">
            <h1 style="font-weight: bold;">UC-11</h1>
        </div>
        <div class="card-body">
             @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{url('uc11')}}" method ="POST">
                @csrf
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
