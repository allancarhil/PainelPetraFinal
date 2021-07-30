@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card-header" style="background-color: #6ab2ec">
        <table class="table table-borderless justify">
            <tr>
                <th scope="col">
                    <h1 style="font-weight: bold;">Resumo UT-07,UT-08 e UT-37</h1>
                </th>
                <th scope="col" class="d-flex justify-content-end"><a class="btn btn-light" href="{{url('ut0708Resumo/form')}}" style="color:#000000">Voltar</a></th>
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
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Data</th>

                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{date( 'd/m/Y' , strtotime($d->data))}}</td>

                    </tr>
                </tbody>

                <br />
                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr style="background-color: #6ab2ec; color: black;">
                            <th scope="col" width="1500px">Viagens por hora</th>

                        </tr>

                    </thead>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>07:00 às 08:00</th>

                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens78078}}</td>

                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>08:00 às 09:00</th>

                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens78089}}</td>

                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>09:00 às 10:00</th>

                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens780910}}</td>

                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>10:00 às 11:00</th>

                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens7801011}}</td>

                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>11:00 às 12:00</th>

                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens7801112}}</td>

                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>12:00 às 13:00</th>

                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens7801213}}</td>

                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>13:00 às 14:00</th>

                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens7801314}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>14:00 às 15:00</th>

                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens7801415}}</td>

                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>15:00 às 16:00</th>
                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens7801516}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>16:00 às 17:00</th>
                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens7801617}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>17:00 às 18:00</th>

                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens7801718}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>Soma</th>

                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->soma780}}</td>
                        </tr>
                    </tbody>
                </table>

                <br />

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr style="background-color: #6ab2ec; color: black;">
                            <th scope="col" width="1500px">Viagens para estoque</th>
                        </tr>
                    </thead>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>Areia Média-Praça</th>
                            <th>Bica Contaminada</th>
                            <th>Areia Fina</th>
                            <th>Pedrisco</th>
                            <th>Bica-Praça</th>
                            <th>Bica-790</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagensAm}}</td>
                            <td>{{$d->numViagensBicaCont}}</td>
                            <td>{{$d->numViagensAf}}</td>
                            <td>{{$d->numViagensPedrisco}}</td>
                            <td>{{$d->numViagensBicaPr}}</td>
                            <td>{{$d->numViagensBica790}}</td>
                        </tr>
                    </tbody>

                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>Bica U&M</th>
                            <th>Brita 1-Praça</th>
                            <th>Brita 1-19mm</th>
                            <th>Brita 0-Praça</th>
                            <th>Brita 0 U&M</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagensBicaUm}}</td>
                            <td>{{$d->numViagensBr1Pr}}</td>
                            <td>{{$d->numViagensBr119}}</td>
                            <td>{{$d->numViagensBr0Pr}}</td>
                            <td>{{$d->numViagensBr0Um}}</td>
                        </tr>
                    </tbody>
                </table>

                <br />

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr style="background-color: #6ab2ec; color: black;">
                            <th scope="col" width="1500px">Demais Serviços</th>
                        </tr>
                    </thead>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>Bica para Forro</th>
                            <th>Brita 0 para Traços</th>
                            <th>Brita 1 para Traços</th>
                            <th>Brita 2 para Traços</th>
                            <th>AIM para traços</th>
                            <th>Fundo U&M</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagensBicaForro}}</td>
                            <td>{{$d->numViagensB0}}</td>
                            <td>{{$d->numViagensB1}}</td>
                            <td>{{$d->numViagensB2}}</td>
                            <td>{{$d->numViagensAim}}</td>
                            <td>{{$d->numViagensFundo}}</td>
                        </tr>
                    </tbody>
                </table>

                <br />

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr style="background-color: #6ab2ec; color: black;">
                            <th scope="col" width="588px">Viagens Fogacho</th>

                        </tr>
                    </thead>
                </table>

                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>780</th>
                            <th>790</th>
                            <th>800</th>
                            <th>810</th>
                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->numViagens780}}</td>
                            <td>{{$d->numViagens790}}</td>
                            <td>{{$d->numViagens800}}</td>
                            <td>{{$d->numViagens810}}</td>
                        </tr>
                    </tbody>
                </table>

                <br />

                <br />
                <table class="table">
                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <form action="ut078Resumo/{{$d->id}}/pdf" method="post" target="_blank">
                                @csrf
                                <button type="submit" class="btn" style="background-color: #6ab2ec;">Exportar PDF</button>
                            </form>
                        </tr>

                        <form action="ut07/{{$d->id}}/pdf" method="post" target="_blank">
                            @csrf
                            <button type="submit" class="btn" style="background-color: #6ab2ec;">Exportar EXCEL</button>
                        </form>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    <br />
    @endforeach
</div>

@endif
@endsection