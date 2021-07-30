@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card-header" style="background-color: #6ab2ec">
        <table class="table table-borderless justify">
            <tr>
                <th scope="col">
                    <h1 style="font-weight: bold;">UP-0507</h1>
                </th>
                <th scope="col" class="d-flex justify-content-end"><a class="btn btn-light" href="{{url('up0507/form')}}" style="color:#000000">Voltar</a></th>
            </tr>
        </table>
    </div>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    @if($dados == '' || $dados == null)
    <div class="card card-body" style="font-weight: bold;">Sem informacoes deste equipamento</div>

    @else

    @foreach($dados as $d)
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="table-light table-bordered">
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

                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Turno</th>
                        <th scope="col">Banco</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->turno}}</td>
                        <td>{{$d->banco}}</td>
                    </tr>
                </tbody>


                <thead class="table-light table-bordered">
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

                <thead class="table-light table-bordered">
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

            </table>

            <table class="table">
                <thead class="table-light table-bordered">
                    <tr style="background-color: #6ab2ec">
                        <th scope="col" width="560px">Paradas de Equipamento</th>

                    </tr>

                </thead>
            </table>

            <table class="table">
                <thead class="table-light table-bordered">
                    <tr style="background-color: #6ab2ec">
                        <th scope="col">Inicio</th>
                        <th scope="col">Fim</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
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
                <thead class="table-light table-bordered">
                    <tr style="background-color: #6ab2ec">
                        <th scope="col" width="1500 px">Minas perfuradas</th>

                    </tr>

                </thead>
            </table>

            <table class="table">
                <thead class="table-light table-bordered">
                    <tr style="background-color: #6ab2ec">
                        <th scope="col">Furo</th>
                        <th scope="col">Profundidade</th>
                        <th scope="col">Bit</th>
                        <th scope="col">Furo</th>
                        <th scope="col">Profundidade</th>
                        <th scope="col">Bit</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->furo1}}</td>
                        <td>{{$d->profundidade1}}</td>
                        <td>{{$d->bit1}}</td>
                        <td>{{$d->furo21}}</td>
                        <td>{{$d->profundidade21}}</td>
                        <td>{{$d->bit21}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo2}}</td>
                        <td>{{$d->profundidade2}}</td>
                        <td>{{$d->bit2}}</td>
                        <td>{{$d->furo22}}</td>
                        <td>{{$d->profundidade22}}</td>
                        <td>{{$d->bit22}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo3}}</td>
                        <td>{{$d->profundidade3}}</td>
                        <td>{{$d->bit3}}</td>
                        <td>{{$d->furo23}}</td>
                        <td>{{$d->profundidade23}}</td>
                        <td>{{$d->bit23}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo4}}</td>
                        <td>{{$d->profundidade4}}</td>
                        <td>{{$d->bit4}}</td>
                        <td>{{$d->furo24}}</td>
                        <td>{{$d->profundidade24}}</td>
                        <td>{{$d->bit24}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo5}}</td>
                        <td>{{$d->profundidade5}}</td>
                        <td>{{$d->bit5}}</td>
                        <td>{{$d->furo25}}</td>
                        <td>{{$d->profundidade25}}</td>
                        <td>{{$d->bit25}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo6}}</td>
                        <td>{{$d->profundidade6}}</td>
                        <td>{{$d->bit6}}</td>
                        <td>{{$d->furo26}}</td>
                        <td>{{$d->profundidade26}}</td>
                        <td>{{$d->bit26}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo7}}</td>
                        <td>{{$d->profundidade7}}</td>
                        <td>{{$d->bit7}}</td>
                        <td>{{$d->furo27}}</td>
                        <td>{{$d->profundidade27}}</td>
                        <td>{{$d->bit27}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo8}}</td>
                        <td>{{$d->profundidade8}}</td>
                        <td>{{$d->bit8}}</td>
                        <td>{{$d->furo28}}</td>
                        <td>{{$d->profundidade28}}</td>
                        <td>{{$d->bit28}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo9}}</td>
                        <td>{{$d->profundidade9}}</td>
                        <td>{{$d->bit9}}</td>
                        <td>{{$d->furo29}}</td>
                        <td>{{$d->profundidade29}}</td>
                        <td>{{$d->bit29}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo10}}</td>
                        <td>{{$d->profundidade10}}</td>
                        <td>{{$d->bit10}}</td>
                        <td>{{$d->furo30}}</td>
                        <td>{{$d->profundidade30}}</td>
                        <td>{{$d->bit30}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo11}}</td>
                        <td>{{$d->profundidade11}}</td>
                        <td>{{$d->bit11}}</td>
                        <td>{{$d->furo31}}</td>
                        <td>{{$d->profundidade31}}</td>
                        <td>{{$d->bit31}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo12}}</td>
                        <td>{{$d->profundidade12}}</td>
                        <td>{{$d->bit12}}</td>
                        <td>{{$d->furo32}}</td>
                        <td>{{$d->profundidade32}}</td>
                        <td>{{$d->bit32}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo13}}</td>
                        <td>{{$d->profundidade13}}</td>
                        <td>{{$d->bit13}}</td>
                        <td>{{$d->furo33}}</td>
                        <td>{{$d->profundidade33}}</td>
                        <td>{{$d->bit33}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo14}}</td>
                        <td>{{$d->profundidade14}}</td>
                        <td>{{$d->bit14}}</td>
                        <td>{{$d->furo34}}</td>
                        <td>{{$d->profundidade34}}</td>
                        <td>{{$d->bit34}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo15}}</td>
                        <td>{{$d->profundidade15}}</td>
                        <td>{{$d->bit15}}</td>
                        <td>{{$d->furo35}}</td>
                        <td>{{$d->profundidade35}}</td>
                        <td>{{$d->bit35}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo16}}</td>
                        <td>{{$d->profundidade16}}</td>
                        <td>{{$d->bit16}}</td>
                        <td>{{$d->furo36}}</td>
                        <td>{{$d->profundidade36}}</td>
                        <td>{{$d->bit36}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo17}}</td>
                        <td>{{$d->profundidade17}}</td>
                        <td>{{$d->bit17}}</td>
                        <td>{{$d->furo37}}</td>
                        <td>{{$d->profundidade37}}</td>
                        <td>{{$d->bit37}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo18}}</td>
                        <td>{{$d->profundidade18}}</td>
                        <td>{{$d->bit18}}</td>
                        <td>{{$d->furo38}}</td>
                        <td>{{$d->profundidade38}}</td>
                        <td>{{$d->bit38}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo19}}</td>
                        <td>{{$d->profundidade19}}</td>
                        <td>{{$d->bit19}}</td>
                        <td>{{$d->furo39}}</td>
                        <td>{{$d->profundidade39}}</td>
                        <td>{{$d->bit39}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->furo20}}</td>
                        <td>{{$d->profundidade20}}</td>
                        <td>{{$d->bit20}}</td>
                        <td>{{$d->furo40}}</td>
                        <td>{{$d->profundidade40}}</td>
                        <td>{{$d->bit40}}</td>
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
                        <th scope="col">Lanternagem</th>
                        <th scope="col">Nível de água</th>
                        <th scope="col">Nível de óleo</th>

                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->lanternagem}}</td>
                        <td>{{$d->h2o}}</td>
                        <td>{{$d->oleo}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-light table-bordered">
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
        <form action="/up0507/{{$d->id}}/pdf" method="post" target="_blank">
            @csrf
            <button type="submit" class="btn" style="background-color: #6ab2ec; margin-right:2px;">Exportar PDF</button>
        </form>
    </tr>
    <tr>
        <form action="/up0507/excel/{{$d->id}}" method="post" target="_blank">
            @csrf
            <button type="submit" class="btn" style="background-color: #6ab2ec; ">Exportar Excel</button>
        </form>
    </tr>
</tbody>
</table>
</div>
</div>

@endforeach
<form action="/up0507/excel/data/{{$d->data}}" method="post" target="_blank">
@csrf
<button type="submit" class="btn" style="background-color: #6ab2ec;">Exportar Excel</button>
</form>
<br />
</div>


@endif
@endsection