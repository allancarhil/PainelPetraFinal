@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<div>
    <div class="card-header" style="background-color: #6ab2ec">
        <h1 style="font-weight: bold;">UT-07, 08 e 37</h1>
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


         <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Soma de viagens</th>
                   
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->soma780}}</td>
                </tr>

            </tbody>
        </table>

        <br />
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec; color: black;">
                    <th scope="col" width="588px">Viagens para estoque</th>

                </tr>

            </thead>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Areia Média-Praça</th>
                    <th>Bica Contaminada</th>
                    <th>Areia Fina</th>
                    <th>Pedrisco</th>
                    <th>Bica-Praça</th>
                    <th>Bica-790</th>
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagensAm}}</td>
                    <td>{{$d->numViagensBicaCont}}</td>
                    <td>{{$d->numViagensAf}}</td>
                    <td>{{$d->numViagensPedrisco}}</td>
                    <td>{{$d->numViagensBicaPr}}</td>
                    <td>{{$d->numViagensBica790}}</td>
                </tr>

            </tbody>

            <thead class="table-light table-bordered">
                <tr>
                    <th>Bica U&M</th>
                    <th>Brita 1-Praça</th>
                    <th>Brita 1-19mm</th>
                    <th>Brita 0-Praça</th>
                    <th>Brita 0 U&M</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagensBicaUm}}</td>
                    <td>{{$d->numViagensBr1Pr}}</td>
                    <td>{{$d->numViagensBr119}}</td>
                    <td>{{$d->numViagensBr0Pr}}</td>
                    <td>{{$d->numViagensBr0Um}}</td>
                    <td></td>
                </tr>

            </tbody>
        </table>



        <br />
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec; color: black;">
                    <th scope="col" width="588px">Demais Serviços</th>

                </tr>

            </thead>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Bica para Forro</th>
                    <th>Brita 0 para Traços</th>
                    <th>Brita 1 para Traços</th>
                    <th>Brita 2 para Traços</th>
                    <th>AIM para traços</th>
                    <th>Fundo U&M</th>
                </tr>


            </thead>
            <tbody>
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
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec; color: black;">
                    <th scope="col" width="588px">Viagens Fogacho</th>

                </tr>

            </thead>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780</th>
                    <th>790</th>
                    <th>800</th>
                    <th>810</th>
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens780}}</td>
                    <td>{{$d->numViagens790}}</td>
                    <td>{{$d->numViagens800}}</td>
                    <td>{{$d->numViagens810}}</td>
                </tr>

            </tbody>
        </table>


       
    </div>
</div>


@endsection