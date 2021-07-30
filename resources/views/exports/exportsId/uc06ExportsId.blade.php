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
    
        <tr>
            <td>{{date( 'd/m/Y' , strtotime($dados->data))}}</td>
            <td>{{$dados->motorista}}</td>
            <td>{{$dados->horaInicial}}</td>
            <td>{{$dados->horaFinal}}</td>
            <td>{{$dados->horimetroInicial}}</td>
            <td>{{$dados->horimetroFinal}}</td>
            <td>{{$dados->paradaInicial1}}</td>
            <td>{{$dados->paradaFinal1}}</td>
            <td>{{$dados->descricao1}}</td>
            <td>{{$dados->paradaInicial2}}</td>
            <td>{{$dados->paradaFinal2}}</td>
            <td>{{$dados->descricao2}}</td>
            <td>{{$dados->paradaInicial3}}</td>
            <td>{{$dados->paradaFinal3}}</td>
            <td>{{$dados->descricao3}}</td>
            <td>{{$dados->paradaInicial4}}</td>
            <td>{{$dados->paradaFinal4}}</td>
            <td>{{$dados->descricao4}}</td>
            <td>{{$dados->paradaInicial5}}</td>
            <td>{{$dados->paradaFinal5}}</td>
            <td>{{$dados->descricao5}}</td>
            <td>{{$dados->paradaInicial6}}</td>
            <td>{{$dados->paradaFinal6}}</td>
            <td>{{$dados->descricao6}}</td>
            <td>{{$dados->paradaInicial7}}</td>
            <td>{{$dados->paradaFinal7}}</td>
            <td>{{$dados->descricao7}}</td>
            <td>{{$dados->paradaInicial8}}</td>
            <td>{{$dados->paradaFinal8}}</td>
            <td>{{$dados->descricao8}}</td>
            <td>{{$dados->paradaInicial9}}</td>
            <td>{{$dados->paradaFinal9}}</td>
            <td>{{$dados->descricao9}}</td>
            <td>{{$dados->paradaInicial10}}</td>
            <td>{{$dados->paradaFinal10}}</td>
            <td>{{$dados->descricao10}}</td>
            <td>{{$dados->b0Vol}}</td>
            <td>{{$dados->b0Mot}}</td>
            <td>{{$dados->b0NumViagens}}</td>
            <td>{{$dados->b1Vol}}</td>
            <td>{{$dados->b1Mot}}</td>
            <td>{{$dados->b1NumViagens}}</td>
            <td>{{$dados->b2Vol}}</td>
            <td>{{$dados->b2Mot}}</td>
            <td>{{$dados->b2NumViagens}}</td>
            <td>{{$dados->b4Vol}}</td>
            <td>{{$dados->b4Mot}}</td>
            <td>{{$dados->b4NumViagens}}</td>
            <td>{{$dados->aimVol}}</td>
            <td>{{$dados->aimMot}}</td>
            <td>{{$dados->aimNumViagens}}</td>
            <td>{{$dados->aifVol}}</td>
            <td>{{$dados->aifMot}}</td>
            <td>{{$dados->aifNumViagens}}</td>
            <td>{{$dados->bicaVol}}</td>
            <td>{{$dados->bicaMot}}</td>
            <td>{{$dados->bicaNumViagens}}</td>
            <td>{{$dados->amprToco}}</td>
            <td>{{$dados->amprTruck}}</td>
            <td>{{$dados->amprCarreta}}</td>
            <td>{{$dados->amprAxor}}</td>
            <td>{{$dados->amprObs}}</td>
            <td>{{$dados->amumToco}}</td>
            <td>{{$dados->amumTruck}}</td>
            <td>{{$dados->amumCarreta}}</td>
            <td>{{$dados->amumAxor}}</td>
            <td>{{$dados->amumObs}}</td>
            <td>{{$dados->afToco}}</td>
            <td>{{$dados->afTruck}}</td>
            <td>{{$dados->afCarreta}}</td>
            <td>{{$dados->afAxor}}</td>
            <td>{{$dados->afObs}}</td>
            <td>{{$dados->pedToco}}</td>
            <td>{{$dados->pedTruck}}</td>
            <td>{{$dados->pedCarreta}}</td>
            <td>{{$dados->pedAxor}}</td>
            <td>{{$dados->pedObs}}</td>
            <td>{{$dados->bicaPrToco}}</td>
            <td>{{$dados->bicaPrTruck}}</td>
            <td>{{$dados->bicaPrCarreta}}</td>
            <td>{{$dados->bicaPrAxor}}</td>
            <td>{{$dados->bicaPrObs}}</td>
            <td>{{$dados->bica790Toco}}</td>
            <td>{{$dados->bica790Truck}}</td>
            <td>{{$dados->bica790Carreta}}</td>
            <td>{{$dados->bica790Axor}}</td>
            <td>{{$dados->bica790Obs}}</td>
            <td>{{$dados->bicaUmToco}}</td>
            <td>{{$dados->bicaUmTruck}}</td>
            <td>{{$dados->bicaUmCarreta}}</td>
            <td>{{$dados->bicaUmAxor}}</td>
            <td>{{$dados->bicaUmObs}}</td>
            <td>{{$dados->br1PrToco}}</td>
            <td>{{$dados->br1PrTruck}}</td>
            <td>{{$dados->br1PrCarreta}}</td>
            <td>{{$dados->br1PrAxor}}</td>
            <td>{{$dados->br1PrObs}}</td>
            <td>{{$dados->br119Toco}}</td>
            <td>{{$dados->br119Truck}}</td>
            <td>{{$dados->br119Carreta}}</td>
            <td>{{$dados->br119Axor}}</td>
            <td>{{$dados->br119Obs}}</td>
            <td>{{$dados->br0PrToco}}</td>
            <td>{{$dados->br0PrTruck}}</td>
            <td>{{$dados->br0PrCarreta}}</td>
            <td>{{$dados->br0PrAxor}}</td>
            <td>{{$dados->br0PrObs}}</td>
            <td>{{$dados->br0UmToco}}</td>
            <td>{{$dados->br0UmTruck}}</td>
            <td>{{$dados->br0UmCarreta}}</td>
            <td>{{$dados->br0UmAxor}}</td>
            <td>{{$dados->br0UmObs}}</td>
            <td>{{$dados->somaToco}}</td>
            <td>{{$dados->somaTruck}}</td>
            <td>{{$dados->somaCarreta}}</td>
            <td>{{$dados->somaAxor}}</td>
            <td>{{$dados->somaAxor}}</td>
            <td>{{$dados->lanternagem}}</td>
            <td>{{$dados->pneus}}</td>
            <td>{{$dados->h2o}}</td>
            <td>{{$dados->parteEletrica}}</td>
            <td>{{$dados->oleo}}</td>
            <td>{{$dados->freios}}</td>
            <td>{{$dados->direcao}}</td>
            <td>{{$dados->observacoes}}</td>
        </tr>
     
    </tbody>
</table>