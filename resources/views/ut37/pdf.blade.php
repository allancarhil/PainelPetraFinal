@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<div>
    <div class="card-header" style="background-color: #6ab2ec">
        <h1 style="font-weight: bold;">UT-37</h1>
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
                    <th scope="col">Condições de pista</th>
                    <th scope="col">Observações</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>{{$d->condicaoPista}}</td>
                    <td>{{$d->condicaoPistaObservacoes}}</td>
                </tr>
            </tbody>
        </table>

        <br />
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec; color: black;">
                    <th scope="col" width="588px">Paradas de Equipamento</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec; color: black;">
                    <th scope="col" >Inicio</th>
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

        <br />
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec; color: black;">
                    <th scope="col" width="588px">Viagens por hora</th>

                </tr>

            </thead>
        </table>


        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-07:00 às 08:00</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens78078}}</td>
                   
                </tr>
            </tbody>
        </table>



        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-08:00 às 09:00</th>
                    
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->numViagens78089}}</td>
                    
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-09:00 às 10:00</th>
                    
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens780910}}</td>
                   
                </tr>

            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-10:00 às 11:00</th>
                   
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens7801011}}</td>
                    
                </tr>

            </tbody>
        </table>



        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-11:00 às 12:00</th>
                    
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens7801112}}</td>
                   
                </tr>

            </tbody>
        </table>


        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-12:00 às 13:00</th>
                   
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens7801213}}</td>
                    
                </tr>

            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-13:00 às 14:00</th>
                   
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens7801314}}</td>
                    
                </tr>

            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-14:00 às 15:00</th>
                   
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens7801415}}</td>
                   
                </tr>

            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-15:00 às 16:00</th>
                    
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens7801516}}</td>
                   
                </tr>

            </tbody>
        </table>


        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-16:00 às 17:00</th>
                    
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens7801617}}</td>
                    
                </tr>

            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>780-17:00 às 18:00</th>
                    
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>{{$d->numViagens7801718}}</td>
                   
                </tr>

            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Soma 780</th>
                   
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


        <br />
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec; color: black;">
                    <th scope="col" width="588px">Status de Equipamento</th>

                </tr>

            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th scope="col">Lanternagem</th>
                    <th scope="col">Pneus</th>
                    <th scope="col">Nível de água</th>
                    <th scope="col">Parte elétrica</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$d->lanternagem}}</td>
                    <td>{{$d->pneus}}</td>
                    <td>{{$d->h2o}}</td>
                    <td>{{$d->parteEletrica}}</td>
                </tr>
            </tbody>

            <thead class="table-light table-bordered">
                <tr>

                    <th scope="col">Nível de óleo</th>
                    <th scope="col">Freios</th>
                    <th scope="col">Direção</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>{{$d->oleo}}</td>
                    <td>{{$d->freios}}</td>
                    <td>{{$d->direcao}}</td>
                    <td></td>

                </tr>
            </tbody>
        </table>

        <br />
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


@endsection