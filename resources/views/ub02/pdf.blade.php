@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<div class="container">
    <div>
        <div class="card-header" style="background-color: #6ab2ec">
            <h1>UB-02</h1>
        </div>
        <div class="card">
            <div class="card-body">

                <table class="table">
                    <table class="table">
                        <thead class="table-dark table-bordered">
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Operador</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 20px; font-weight:500;">
                            <tr>
                                <td>{{date( 'd/m/Y' , strtotime($d->data))}}</td>
                                <td>{{$d->motorista}}</td>
                            </tr>
                        </tbody>

                        <thead class="table-dark table-bordered">
                            <tr>
                                <th scope="col">Hora Inicial</th>
                                <th scope="col">Hora Final</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 20px; font-weight:500;">
                            <tr>
                                <td>{{$d->horaInicial}}</td>
                                <td>{{$d->horaFinal}}</td>
                            </tr>
                        </tbody>

                        <thead class="table-dark table-bordered">
                            <tr>
                                <th scope="col">Horímetro Inicial</th>
                                <th scope="col">Horímetro Final</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 20px; font-weight:500;">
                            <tr>
                                <td>{{$d->horimetroInicial}}</td>
                                <td>{{$d->horimetroFinal}}</td>
                            </tr>
                        </tbody>

                        <thead class="table-dark table-bordered">
                            <tr>
                                <th scope="col">Balança Inicial</th>
                                <th scope="col">Balança Final</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 20px; font-weight:500;">
                            <tr>
                                <td>{{$d->balancaInicial}}</td>
                                <td>{{$d->balancaFinal}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead class="table-dark table-bordered">
                            <tr style="background-color: #6ab2ec">
                                <th scope="col" width="748px">Paradas de Equipamento</th>

                            </tr>

                        </thead>
                    </table>

                    <table class="table">
                        <thead class="table-dark table-bordered">
                            <tr>
                                <th scope="col">Inicio</th>
                                <th scope="col">Fim</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 20px; font-weight:500;">
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
                            <tr>
                                <td>{{$d->paradaInicial7}}</td>
                                <td>{{$d->paradaFinal7}}</td>
                                <td>{{$d->descricao7}}</td>
                            </tr>
                            <tr>
                                <td>{{$d->paradaInicial8}}</td>
                                <td>{{$d->paradaFinal8}}</td>
                                <td>{{$d->descricao8}}</td>
                            </tr>
                            <tr>
                                <td>{{$d->paradaInicial9}}</td>
                                <td>{{$d->paradaFinal9}}</td>
                                <td>{{$d->descricao9}}</td>
                            </tr>
                            <tr>
                                <td>{{$d->paradaInicial10}}</td>
                                <td>{{$d->paradaFinal10}}</td>
                                <td>{{$d->descricao10}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead class="table-dark table-bordered">
                            <tr style="background-color: #6ab2ec">
                                <th scope="col" width="748px">Status de Equipamento</th>

                            </tr>

                        </thead>
                    </table>

                    <table class="table">
                        <thead class="table-dark table-bordered">
                            <tr>
                                <th scope="col">Há pedras no britador</th>
                                <th scope="col">Tremonha UTC01</th>
                                <th scope="col">Bandeja UTC01</th>
                                <th scope="col">UTC01</th>

                            </tr>
                        </thead>
                        <tbody style="font-size: 20px; font-weight:500;">
                            <tr>
                                <td>{{$d->pedraBritador}}</td>
                                <td>{{$d->tremonha}}</td>
                                <td>{{$d->bandeja}}</td>
                                <td>{{$d->utc01}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead class="table-dark table-bordered">
                            <tr>
                                <th scope="col">Observações</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 20px; font-weight:500;">
                            <tr>
                                <td>{{$d->observacoes}}</td>
                            </tr>
                        </tbody>
                    </table>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection