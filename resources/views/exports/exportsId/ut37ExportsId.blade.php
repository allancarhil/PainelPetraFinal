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
        
        <tr>
            <td>{{date( 'd/m/Y' , strtotime($dados->data))}}</td>
            <td>{{$dados->motorista}}</td>
            <td>{{$dados->horaInicial}}</td>
            <td>{{$dados->horaFinal}}</td>
            <td>{{$dados->horimetroInicial}}</td>
            <td>{{$dados->horimetroFinal}}</td>
            <td>{{$dados->condicaoPista}}</td>
            <td>{{$dados->condicaoPistaObservacoes}}</td>
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
            <td>{{$dados->numViagens78078}}</td>
            <td>{{$dados->numViagens78089}}</td>
            <td>{{$dados->numViagens780910}}</td>
            <td>{{$dados->numViagens7801011}}</td>
            <td>{{$dados->numViagens7801112}}</td>
            <td>{{$dados->numViagens7801213}}</td>
            <td>{{$dados->numViagens7801314}}</td>
            <td>{{$dados->numViagens7801415}}</td>
            <td>{{$dados->numViagens7801516}}</td>
            <td>{{$dados->numViagens7801617}}</td>
            <td>{{$dados->numViagens7801718}}</td>
            <td>{{$dados->soma780}}</td>
            <td>{{$dados->numViagensAm}}</td>
            <td>{{$dados->numViagensBicaCont}}</td>
            <td>{{$dados->numViagensAf}}</td>
            <td>{{$dados->numViagensPedrisco}}</td>
            <td>{{$dados->numViagensBicaPr}}</td>
            <td>{{$dados->numViagensBica790}}</td>
            <td>{{$dados->numViagensBicaUm}}</td>
            <td>{{$dados->numViagensBr1Pr}}</td>
            <td>{{$dados->numViagensBr119}}</td>
            <td>{{$dados->numViagensBr0Pr}}</td>
            <td>{{$dados->numViagensBr0Um}}</td>
            <td>{{$dados->numViagensBicaForro}}</td>
            <td>{{$dados->numViagensB0}}</td>
            <td>{{$dados->numViagensB1}}</td>
            <td>{{$dados->numViagensB2}}</td>
            <td>{{$dados->numViagensAim}}</td>
            <td>{{$dados->numViagensFundo}}</td>
            <td>{{$dados->numViagens780}}</td>
            <td>{{$dados->numViagens790}}</td>
            <td>{{$dados->numViagens800}}</td>
            <td>{{$dados->numViagens810}}</td>
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