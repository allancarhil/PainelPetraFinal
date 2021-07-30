@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<div class="container">
    <div>
        <div class="card-header" style="background-color: #6ab2ec">
            <h1>MN-01</h1>
        </div>
        <div class="card-body">
            <table class="table">
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
                        <th scope="col">Horímetro Inicial</th>
                        <th scope="col">Horímetro Final</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$d->horimetroInicial}}</td>
                        <td>{{$d->horimetroFinal}}</td>
                    </tr>
                </tbody>

                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Banco</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>{{$d->banco}}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-light table-bordered">
                    <tr style="background-color: #6ab2ec">
                        <th scope="col" width="562px">Status de Equipamento</th>

                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Inicio</th>
                        <th scope="col">Fim</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$d->paradaInicial1}}</td>
                        <td>{{$d->paradaFinal1}}</td>
                        <td>{{$d->descricao1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial2}}</td>
                        <td>{{$d->paradaFinal2}}</td>
                        <td>{{$d->descricao2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial3}}</td>
                        <td>{{$d->paradaFinal3}}</td>
                        <td>{{$d->descricao3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial4}}</td>
                        <td>{{$d->paradaFinal4}}</td>
                        <td>{{$d->descricao4}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial5}}</td>
                        <td>{{$d->paradaFinal5}}</td>
                        <td>{{$d->descricao5}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial6}}</td>
                        <td>{{$d->paradaFinal6}}</td>
                        <td>{{$d->descricao6}}</td>
                    </tr>
                </tbody>
            </table>
            <br/>
            <table class="table">
                <thead class="table-light table-bordered">
                    <tr style="background-color: #6ab2ec">
                        <th scope="col" width="562px">Status de Equipamento</th>

                    </tr>

                </thead>
            </table>

            <table class="table">
                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Lanternagem</th>
                        <th scope="col">Pneus</th>
                        <th scope="col">Nível de água</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$d->lanternagem}}</td>
                        <td>{{$d->pneus}}</td>
                        <td>{{$d->h2o}}</td>

                    </tr>
                </tbody>

                <thead class="table-light table-bordered">
                    <tr>

                        <th scope="col">Nível de óleo</th>
                        <th scope="col">Freios</th>
                        <th scope="col">Direção</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$d->oleo}}</td>
                        <td>{{$d->freios}}</td>
                        <td>{{$d->direcao}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="table">
                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$d->observacoes}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection