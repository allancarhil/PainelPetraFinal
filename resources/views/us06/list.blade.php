@extends('adminlte::page')

@section('content')
<div class="container">

    <div class="card-header" style="background-color: #6ab2ec">
        <table class="table table-borderless justify">
            <tr>
                <th scope="col">
                    <h1 style="font-weight: bold;">US-06</h1>
                </th>
                <th scope="col" class="d-flex justify-content-end"><a class="btn btn-light" href="{{url('us06/form')}}" style="color:#000000">Voltar</a></th>
            </tr>
        </table>

    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    @if($dados == '' || $dados == null)
    <div class="card card-body">Sem informacoes deste equipamento</div>

    @else
    @foreach($dados as $d)

    <div class="card">

        <div class="card-body">

            <table class=" table">
                <table class=" table">

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
                            <th scope="col">Nº Tanques açude Interno</th>
                            <th scope="col">Nº Tanques açude Restaurante</th>
                        </tr>

                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->acudeInterno}}</td>
                            <td>{{$d->acudeRestaurante}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr style="background-color: #6ab2ec; color:black">
                            <th scope="col" width="560px"> Paradas de Equipamento</th>

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
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr style="background-color: #6ab2ec; color:black">
                            <th scope="col" width="562px">Status de Equipamento</th>

                        </tr>

                    </thead>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th scope="col">Lanternagem</th>
                            <th scope="col">Pneus</th>
                            <th scope="col">Nível de água</th>

                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->lanternagem}}</td>
                            <td>{{$d->pneus}}</td>
                            <td>{{$d->h2o}}</td>

                        </tr>
                    </tbody>

                    <thead class="table-dark table-bordered">
                        <tr>

                            <th scope="col">Nível de óleo</th>
                            <th scope="col">Freios</th>
                            <th scope="col">Direção</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>

                            <td>{{$d->oleo}}</td>
                            <td>{{$d->freios}}</td>
                            <td>{{$d->direcao}}</td>
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

                <table class="table">

<tbody>
    <tr>
        <form action="/us06/{{$d->id}}/pdf" method="post" target="_blank">
            @csrf
            <button type="submit" class="btn" style="background-color: #6ab2ec; margin-right:2px;">Exportar PDF</button>
        </form>
    </tr>
    <tr>
        <form action="/us06/excel/{{$d->id}}" method="post" target="_blank">
            @csrf
            <button type="submit" class="btn" style="background-color: #6ab2ec; ">Exportar Excel</button>
        </form>
    </tr>
</tbody>
</table>
</div>
</div>

@endforeach
<form action="/us06/excel/data/{{$d->data}}" method="post" target="_blank">
@csrf
<button type="submit" class="btn" style="background-color: #6ab2ec;">Exportar Excel</button>
</form>
<br />
</div>

@endif
@endsection