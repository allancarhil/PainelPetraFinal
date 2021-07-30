@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<div>
    <div class="card-header" style="background-color: #6ab2ec">
        <h1 style="font-weight: bold;">UC-14</h1>
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

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="442px">Viagens Internas</th>
                </tr>
            </thead>
        </table>


        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="442px">B#0</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Volume</th>
                    <th>Motorista</th>
                    <th>Número de viagens</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->b0Vol}}</td>
                    <td>{{$d->b0Mot}}</td>
                    <td>{{$d->b0NumViagens}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="442px">B#1</th>
                </tr>
            </thead>

        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Volume</th>
                    <th>Motorista</th>
                    <th>Número de viagens</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->b1Vol}}</td>
                    <td>{{$d->b1Mot}}</td>
                    <td>{{$d->b1NumViagens}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="442px">B#2</th>
                </tr>
            </thead>

        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Volume</th>
                    <th>Motorista</th>
                    <th>Número de viagens</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->b2Vol}}</td>
                    <td>{{$d->b2Mot}}</td>
                    <td>{{$d->b2NumViagens}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="442px">B#4</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Volume</th>
                    <th>Motorista</th>
                    <th>Número de viagens</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->b4Vol}}</td>
                    <td>{{$d->b4Mot}}</td>
                    <td>{{$d->b4NumViagens}}</td>
                </tr>
            </tbody>
        </table>
        <br/>
        <br/>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="442px">AIM</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Volume</th>
                    <th>Motorista</th>
                    <th>Número de viagens</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->aimVol}}</td>
                    <td>{{$d->aimMot}}</td>
                    <td>{{$d->aimNumViagens}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="442px">AIF</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Volume</th>
                    <th>Motorista</th>
                    <th>Número de viagens</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->aifVol}}</td>
                    <td>{{$d->aifMot}}</td>
                    <td>{{$d->aifNumViagens}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="442px">Bica</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Volume</th>
                    <th>Motorista</th>
                    <th>Número de viagens</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->bicaVol}}</td>
                    <td>{{$d->bicaMot}}</td>
                    <td>{{$d->bicaNumViagens}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735 px">Viagens por hora</th>

                </tr>
            </thead>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Areia Média-Praça</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->amprToco}}</td>
                    <td>{{$d->amprTruck}}</td>
                    <td>{{$d->amprCarreta}}</td>
                    <td>{{$d->amprAxor}}</td>
                    <td>{{$d->amprObs}}</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Areia Média-U&M</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->amumToco}}</td>
                    <td>{{$d->amumTruck}}</td>
                    <td>{{$d->amumCarreta}}</td>
                    <td>{{$d->amumAxor}}</td>
                    <td>{{$d->amumObs}}</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Areia Fina</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->afToco}}</td>
                    <td>{{$d->afTruck}}</td>
                    <td>{{$d->afCarreta}}</td>
                    <td>{{$d->afAxor}}</td>
                    <td>{{$d->afObs}}</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Pedrisco</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->pedToco}}</td>
                    <td>{{$d->pedTruck}}</td>
                    <td>{{$d->pedCarreta}}</td>
                    <td>{{$d->pedAxor}}</td>
                    <td>{{$d->pedObs}}</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Bica-Praça</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->bicaPrToco}}</td>
                    <td>{{$d->bicaPrTruck}}</td>
                    <td>{{$d->bicaPrCarreta}}</td>
                    <td>{{$d->bicaPrAxor}}</td>
                    <td>{{$d->bicaPrObs}}</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Bica-790</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->bica790Toco}}</td>
                    <td>{{$d->bica790Truck}}</td>
                    <td>{{$d->bica790Carreta}}</td>
                    <td>{{$d->bica790Axor}}</td>
                    <td>{{$d->bica790Obs}}</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Bica-U&M</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->bicaUmToco}}</td>
                    <td>{{$d->bicaUmTruck}}</td>
                    <td>{{$d->bicaUmCarreta}}</td>
                    <td>{{$d->bicaUmAxor}}</td>
                    <td>{{$d->bicaUmObs}}</td>
                </tr>
            </tbody>
        </table>
        <br/>
        <br/>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Brita 1-Praça</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->br1PrToco}}</td>
                    <td>{{$d->br1PrTruck}}</td>
                    <td>{{$d->br1PrCarreta}}</td>
                    <td>{{$d->br1PrAxor}}</td>
                    <td>{{$d->br1PrObs}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Brita 1-19mm</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->br119Toco}}</td>
                    <td>{{$d->br119Truck}}</td>
                    <td>{{$d->br119Carreta}}</td>
                    <td>{{$d->br119Axor}}</td>
                    <td>{{$d->br119Obs}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Brita 0-praça</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->br0PrToco}}</td>
                    <td>{{$d->br0PrTruck}}</td>
                    <td>{{$d->br0PrCarreta}}</td>
                    <td>{{$d->br0PrAxor}}</td>
                    <td>{{$d->br0PrObs}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Brita 0-U&M</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->br0UmToco}}</td>
                    <td>{{$d->br0UmTruck}}</td>
                    <td>{{$d->br0UmCarreta}}</td>
                    <td>{{$d->br0UmAxor}}</td>
                    <td>{{$d->br0UmObs}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="735px">Total</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="table-light table-bordered">
                <tr>
                    <th>Toco</th>
                    <th>Truck</th>
                    <th>Carreta</th>
                    <th>Axor</th>
                    <th>Observações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$d->somaToco}}</td>
                    <td>{{$d->somaTruck}}</td>
                    <td>{{$d->somaCarreta}}</td>
                    <td>{{$d->somaAxor}}</td>
                    <td>{{$d->somaAxor}}</td>
                </tr>
            </tbody>
        </table>
        <br/>
        <br/>
        <table class="table">
            <thead class="table-light table-bordered">
                <tr style="background-color: #6ab2ec">
                    <th scope="col" width="748px">Status de Equipamento</th>
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