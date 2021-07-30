<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Operador</th>
            <th>Hora Inicial</th>
            <th>Hora Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Inicio 1</th>
            <th>Fim 1</th>
            <th>Descrição 1</th>
            <th>Inicio 2</th>
            <th>Fim 2</th>
            <th>Descrição 2</th>
            <th>Inicio 3</th>
            <th>Fim 3</th>
            <th>Descrição 3</th>
            <th>Inicio 4</th>
            <th>Fim 4</th>
            <th>Descrição 4</th>
            <th>Inicio 5</th>
            <th>Fim 5</th>
            <th>Descrição 5</th>
            <th>Inicio 6</th>
            <th>Fim 6</th>
            <th>Descrição 6</th>
            <th>Inicio 7</th>
            <th>Fim 7</th>
            <th>Descrição 7</th>
            <th>Inicio 8</th>
            <th>Fim 8</th>
            <th>Descrição 8</th>
            <th>Inicio 9</th>
            <th>Fim 9</th>
            <th>Descrição 9</th>
            <th>Inicio 10</th>
            <th>Fim 10</th>
            <th>Descrição 10</th>
            <th>B0-Volume</th>
            <th>B0-Motorista</th>
            <th>B0-Número de viagens</th>
            <th>B1-Volume</th>
            <th>B1-Motorista</th>
            <th>B1-Número de viagens</th>
            <th>B2-Volume</th>
            <th>B2-Motorista</th>
            <th>B2-Número de viagens</th>
            <th>B4-Volume</th>
            <th>B4-Motorista</th>
            <th>B4-Número de viagens</th>
            <th>AIM-Volume</th>
            <th>AIM-Motorista</th>
            <th>AIM-Número de viagens</th>
            <th>AIF-Volume</th>
            <th>AIF-Motorista</th>
            <th>AIF-Número de viagens</th>
            <th>Bica-Volume</th>
            <th>Bica-Motorista</th>
            <th>Bica-Número de viagens</th>
            <th>Areia média Praça-Toco</th>
            <th>Areia média Praça-Truck</th>
            <th>Areia média Praça-Carreta</th>
            <th>Areia média Praça-Axor</th>
            <th>Areia média Praça-Observações</th>
            <th>Areia média UM-Toco</th>
            <th>Areia média UM-Truck</th>
            <th>Areia média UM-Carreta</th>
            <th>Areia média UM-Axor</th>
            <th>Areia média UM-Observações</th>
            <th>Areia fina-Toco</th>
            <th>Areia fina-Truck</th>
            <th>Areia fina-Carreta</th>
            <th>Areia fina-Axor</th>
            <th>Areia fina-Observações</th>
            <th>Pedrisco-Toco</th>
            <th>Pedrisco-Truck</th>
            <th>Pedrisco-Carreta</th>
            <th>Pedrisco-Axor</th>
            <th>Pedrisco-Observações</th>
            <th>Bica Praça-Toco</th>
            <th>Bica Praça-Truck</th>
            <th>Bica Praça-Carreta</th>
            <th>Bica Praça-Axor</th>
            <th>Bica Praça-Observações</th>
            <th>Bica 790-Toco</th>
            <th>Bica 790-Truck</th>
            <th>Bica 790-Carreta</th>
            <th>Bica 790-Axor</th>
            <th>Bica 790-Observações</th>
            <th>Bica UM-Toco</th>
            <th>Bica UM-Truck</th>
            <th>Bica UM-Carreta</th>
            <th>Bica UM-Axor</th>
            <th>Bica UM-Observações</th>
            <th>B1 Praça-Toco</th>
            <th>B1 Praça-Truck</th>
            <th>B1 Praça-Carreta</th>
            <th>B1 Praça-Axor</th>
            <th>B1 Praça-Observações</th>
            <th>B1 19mm-Toco</th>
            <th>B1 19mm-Truck</th>
            <th>B1 19mm-Carreta</th>
            <th>B1 19mm-Axor</th>
            <th>B1 19mm-Observações</th>
            <th>B1 UM-Toco</th>
            <th>B1 UM-Truck</th>
            <th>B1 UM-Carreta</th>
            <th>B1 UM-Axor</th>
            <th>B1 UM-Observações</th>
            <th>B0 Praça-Toco</th>
            <th>B0 Praça-Truck</th>
            <th>B0 Praça-Carreta</th>
            <th>B0 Praça-Axor</th>
            <th>B0 Praça-Observações</th>
            <th>B0 UM-Toco</th>
            <th>B0 UM-Truck</th>
            <th>B0 UM-Carreta</th>
            <th>B0 UM-Axor</th>
            <th>B0 UM-Observações</th>
            <th>Soma Toco</th>
            <th>Soma Truck</th>
            <th>Soma Carreta</th>
            <th>Soma Axor</th>
            <th>Lanternagem</th>
            <th>Pneus</th>
            <th>Nível de água</th>
            <th>Parte elétrica</th>
            <th>Nível de óleo</th>
            <th>Freios</th>
            <th>Direção</th>
            <th>Observações</th>

        </tr>
    </thead>

    <tbody>
        @foreach($dados as $d)
        <tr>
            <td>{{date( 'd/m/Y' , strtotime($d->data))}}</td>
            <td>{{$d->motorista}}</td>
            <td>{{$d->horaInicial}}</td>
            <td>{{$d->horaFinal}}</td>
            <td>{{$d->horimetroInicial}}</td>
            <td>{{$d->horimetroFinal}}</td>
            <td>{{$d->paradaInicial1}}</td>
            <td>{{$d->paradaFinal1}}</td>
            <td>{{$d->descricao1}}</td>
            <td>{{$d->paradaInicial2}}</td>
            <td>{{$d->paradaFinal2}}</td>
            <td>{{$d->descricao2}}</td>
            <td>{{$d->paradaInicial3}}</td>
            <td>{{$d->paradaFinal3}}</td>
            <td>{{$d->descricao3}}</td>
            <td>{{$d->paradaInicial4}}</td>
            <td>{{$d->paradaFinal4}}</td>
            <td>{{$d->descricao4}}</td>
            <td>{{$d->paradaInicial5}}</td>
            <td>{{$d->paradaFinal5}}</td>
            <td>{{$d->descricao5}}</td>
            <td>{{$d->paradaInicial6}}</td>
            <td>{{$d->paradaFinal6}}</td>
            <td>{{$d->descricao6}}</td>
            <td>{{$d->paradaInicial7}}</td>
            <td>{{$d->paradaFinal7}}</td>
            <td>{{$d->descricao7}}</td>
            <td>{{$d->paradaInicial8}}</td>
            <td>{{$d->paradaFinal8}}</td>
            <td>{{$d->descricao8}}</td>
            <td>{{$d->paradaInicial9}}</td>
            <td>{{$d->paradaFinal9}}</td>
            <td>{{$d->descricao9}}</td>
            <td>{{$d->paradaInicial10}}</td>
            <td>{{$d->paradaFinal10}}</td>
            <td>{{$d->descricao10}}</td>
            <td>{{$d->b0Vol}}</td>
            <td>{{$d->b0Mot}}</td>
            <td>{{$d->b0NumViagens}}</td>
            <td>{{$d->b1Vol}}</td>
            <td>{{$d->b1Mot}}</td>
            <td>{{$d->b1NumViagens}}</td>
            <td>{{$d->b2Vol}}</td>
            <td>{{$d->b2Mot}}</td>
            <td>{{$d->b2NumViagens}}</td>
            <td>{{$d->b4Vol}}</td>
            <td>{{$d->b4Mot}}</td>
            <td>{{$d->b4NumViagens}}</td>
            <td>{{$d->aimVol}}</td>
            <td>{{$d->aimMot}}</td>
            <td>{{$d->aimNumViagens}}</td>
            <td>{{$d->aifVol}}</td>
            <td>{{$d->aifMot}}</td>
            <td>{{$d->aifNumViagens}}</td>
            <td>{{$d->bicaVol}}</td>
            <td>{{$d->bicaMot}}</td>
            <td>{{$d->bicaNumViagens}}</td>
            <td>{{$d->amprToco}}</td>
            <td>{{$d->amprTruck}}</td>
            <td>{{$d->amprCarreta}}</td>
            <td>{{$d->amprAxor}}</td>
            <td>{{$d->amprObs}}</td>
            <td>{{$d->amumToco}}</td>
            <td>{{$d->amumTruck}}</td>
            <td>{{$d->amumCarreta}}</td>
            <td>{{$d->amumAxor}}</td>
            <td>{{$d->amumObs}}</td>
            <td>{{$d->afToco}}</td>
            <td>{{$d->afTruck}}</td>
            <td>{{$d->afCarreta}}</td>
            <td>{{$d->afAxor}}</td>
            <td>{{$d->afObs}}</td>
            <td>{{$d->pedToco}}</td>
            <td>{{$d->pedTruck}}</td>
            <td>{{$d->pedCarreta}}</td>
            <td>{{$d->pedAxor}}</td>
            <td>{{$d->pedObs}}</td>
            <td>{{$d->bicaPrToco}}</td>
            <td>{{$d->bicaPrTruck}}</td>
            <td>{{$d->bicaPrCarreta}}</td>
            <td>{{$d->bicaPrAxor}}</td>
            <td>{{$d->bicaPrObs}}</td>
            <td>{{$d->bica790Toco}}</td>
            <td>{{$d->bica790Truck}}</td>
            <td>{{$d->bica790Carreta}}</td>
            <td>{{$d->bica790Axor}}</td>
            <td>{{$d->bica790Obs}}</td>
            <td>{{$d->bicaUmToco}}</td>
            <td>{{$d->bicaUmTruck}}</td>
            <td>{{$d->bicaUmCarreta}}</td>
            <td>{{$d->bicaUmAxor}}</td>
            <td>{{$d->bicaUmObs}}</td>
            <td>{{$d->br1PrToco}}</td>
            <td>{{$d->br1PrTruck}}</td>
            <td>{{$d->br1PrCarreta}}</td>
            <td>{{$d->br1PrAxor}}</td>
            <td>{{$d->br1PrObs}}</td>
            <td>{{$d->br119Toco}}</td>
            <td>{{$d->br119Truck}}</td>
            <td>{{$d->br119Carreta}}</td>
            <td>{{$d->br119Axor}}</td>
            <td>{{$d->br119Obs}}</td>
            <td>{{$d->br0PrToco}}</td>
            <td>{{$d->br0PrTruck}}</td>
            <td>{{$d->br0PrCarreta}}</td>
            <td>{{$d->br0PrAxor}}</td>
            <td>{{$d->br0PrObs}}</td>
            <td>{{$d->br0UmToco}}</td>
            <td>{{$d->br0UmTruck}}</td>
            <td>{{$d->br0UmCarreta}}</td>
            <td>{{$d->br0UmAxor}}</td>
            <td>{{$d->br0UmObs}}</td>
            <td>{{$d->somaToco}}</td>
            <td>{{$d->somaTruck}}</td>
            <td>{{$d->somaCarreta}}</td>
            <td>{{$d->somaAxor}}</td>
            <td>{{$d->somaAxor}}</td>
            <td>{{$d->lanternagem}}</td>
            <td>{{$d->pneus}}</td>
            <td>{{$d->h2o}}</td>
            <td>{{$d->parteEletrica}}</td>
            <td>{{$d->oleo}}</td>
            <td>{{$d->freios}}</td>
            <td>{{$d->direcao}}</td>
            <td>{{$d->observacoes}}</td>
        </tr>
        @endforeach
    </tbody>
</table>