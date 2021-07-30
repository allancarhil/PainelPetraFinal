<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Operador</th>
            <th>Hora Inicial</th>
            <th>Hora Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Condições da pista</th>
            <th>Observações</th>
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
            <th>Viagens-07:00 às 08:00</th>
            <th>Viagens-08:00 às 09:00</th>
            <th>Viagens-09:00 às 10:00</th>
            <th>Viagens-10:00 às 11:00</th>
            <th>Viagens-11:00 às 12:00</th>
            <th>Viagens-12:00 às 13:00</th>
            <th>Viagens-13:00 às 14:00</th>
            <th>Viagens-14:00 às 15:00</th>
            <th>Viagens-15:00 às 16:00</th>
            <th>Viagens-16:00 às 17:00</th>
            <th>Viagens-17:00 às 18:00</th>
            <th>Total de viagens</th>
            <th>Areia Média-Praça</th>
            <th>Bica Contaminada</th>
            <th>Areia Fina</th>
            <th>Pedrisco</th>
            <th>Bica-Praça</th>
            <th>Bica-790</th>
            <th>Bica UeM</th>
            <th>Brita 1-Praça</th>
            <th>Brita 1-19mm</th>
            <th>Brita 0-Praça</th>
            <th>Brita 0 UeM</th>
            <th>Bica para Forro</th>
            <th>Brita 0 para Traços</th>
            <th>Brita 1 para Traços</th>
            <th>Brita 2 para Traços</th>
            <th>AIM para traços</th>
            <th>Fundo UeM</th>
            <th>Fogacho 780</th>
            <th>Fogacho 790</th>
            <th>Fogacho 800</th>
            <th>Fogacho 810</th>
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
            <td>{{$d->condicaoPista}}</td>
            <td>{{$d->condicaoPistaObservacoes}}</td>
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
            <td>{{$d->numViagens78078}}</td>
            <td>{{$d->numViagens78089}}</td>
            <td>{{$d->numViagens780910}}</td>
            <td>{{$d->numViagens7801011}}</td>
            <td>{{$d->numViagens7801112}}</td>
            <td>{{$d->numViagens7801213}}</td>
            <td>{{$d->numViagens7801314}}</td>
            <td>{{$d->numViagens7801415}}</td>
            <td>{{$d->numViagens7801516}}</td>
            <td>{{$d->numViagens7801617}}</td>
            <td>{{$d->numViagens7801718}}</td>
            <td>{{$d->soma780}}</td>
            <td>{{$d->numViagensAm}}</td>
            <td>{{$d->numViagensBicaCont}}</td>
            <td>{{$d->numViagensAf}}</td>
            <td>{{$d->numViagensPedrisco}}</td>
            <td>{{$d->numViagensBicaPr}}</td>
            <td>{{$d->numViagensBica790}}</td>
            <td>{{$d->numViagensBicaUm}}</td>
            <td>{{$d->numViagensBr1Pr}}</td>
            <td>{{$d->numViagensBr119}}</td>
            <td>{{$d->numViagensBr0Pr}}</td>
            <td>{{$d->numViagensBr0Um}}</td>
            <td>{{$d->numViagensBicaForro}}</td>
            <td>{{$d->numViagensB0}}</td>
            <td>{{$d->numViagensB1}}</td>
            <td>{{$d->numViagensB2}}</td>
            <td>{{$d->numViagensAim}}</td>
            <td>{{$d->numViagensFundo}}</td>
            <td>{{$d->numViagens780}}</td>
            <td>{{$d->numViagens790}}</td>
            <td>{{$d->numViagens800}}</td>
            <td>{{$d->numViagens810}}</td>
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