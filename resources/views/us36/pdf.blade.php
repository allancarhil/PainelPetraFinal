@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<div class="container">
    <div class="card-header" style="background-color: #6ab2ec">
        <h1>US-37</h1>
    </div>
    <div class="card">

        <div class="card-body">

            <table class="table ">
                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Operador</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{date( 'd/m/Y' , strtotime($d->data))}}</td>
                        <td>{{$d->motorista}}</td>
                    </tr>
                </tbody>

                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Hora Inicial</th>
                        <th scope="col">Hora Final</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$d->horaInicial}}</td>
                        <td>{{$d->horaFinal}}</td>
                    </tr>
                </tbody>

                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Km Inicial</th>
                        <th scope="col">Km Final</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$d->kmInicial}}</td>
                        <td>{{$d->kmFinal}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-light table-bordered">
                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Serviços</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">{{$d->servicos}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-light table-bordered">
                <thead>
                    <tr style="background-color: #6ab2ec; color:black">
                        <th scope="col" width="375px">Status de Equipamento</th>
                    </tr>

                </thead>
            </table>

            <table class="table ">
                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Lanternagem</th>
                        <th scope="col">Pneus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$d->lanternagem}}</td>
                        <td>{{$d->pneus}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table ">
                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">{{$d->observacoes}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection