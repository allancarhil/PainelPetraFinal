@extends('adminlte::page')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header" style="background-color: #6ab2ec">
            <h1>Resumo</h1>
        </div>

        <div class="card-body">
            Em Construção
        </div>
    </div>
</div>
@endsection