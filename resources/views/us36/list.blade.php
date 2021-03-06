@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card-header" style="background-color: #6ab2ec">
        <table class="table table-borderless justify">
            <tr>
                <th scope="col">
                    <h1 style="font-weight: bold;">US-37</h1>
                </th>
                <th scope="col" class="d-flex justify-content-end">
                    <a class="btn btn-light" href="{{url('us36/form')}}" style="color:#000000; margin-right: 10px;">Voltar</a>
                </th>
            </tr>
        </table>


    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    @if($dados == '' || $dados == null)
    <div style="font-weight: bold;" class="card card-body">Sem informacoes deste equipamento</div>

    @else


    @foreach($dados as $d)
    <div class="card">
        <div class="card-body ml-2 mr-2">

            <table class="table">
                <table class="table ">
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
                            <th scope="col">Km Inicial</th>
                            <th scope="col">Km Final</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->kmInicial}}</td>
                            <td>{{$d->kmFinal}}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-light table-bordered">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th scope="col">Servi??os</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td scope="row">{{$d->servicos}}</td>
                        </tr>
                    </tbody>
                </table>

                <br />
                <table class="table table-light table-bordered">
                    <thead>
                        <tr style="background-color: #6ab2ec; color:black">
                            <th scope="col" width="375px">Status de Equipamento</th>
                        </tr>

                    </thead>
                </table>

                <table class="table ">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th scope="col">Lanternagem</th>
                            <th scope="col">Pneus</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->lanternagem}}</td>
                            <td>{{$d->pneus}}</td>
                        </tr>
                    </tbody>
                </table>

                <br />
                <table class="table ">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th scope="col">Observa????es</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td scope="row">{{$d->observacoes}}</td>
                        </tr>
                    </tbody>
                </table>

                <br />

                <table class="table">

                    <tbody>
                        <tr>
                            <form action="/us36/{{$d->id}}/pdf" method="post" target="_blank">
                                @csrf
                                <button type="submit" class="btn" style="background-color: #6ab2ec; margin-right:2px;">Exportar PDF</button>
                            </form>
                        </tr>
                        <tr>
                            <form action="/us36/excel/{{$d->id}}" method="post" target="_blank">
                                @csrf
                                <button type="submit" class="btn" style="background-color: #6ab2ec; ">Exportar Excel</button>
                            </form>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>

    @endforeach
    <form action="/us36/excel/data/{{$d->data}}" method="post" target="_blank">
        @csrf
        <button type="submit" class="btn" style="background-color: #6ab2ec;">Exportar Excel</button>
    </form>
    <br />
</div>

@endif
@endsection