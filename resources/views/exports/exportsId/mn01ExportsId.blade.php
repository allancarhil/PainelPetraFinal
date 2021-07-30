<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Operador</th>
            <th>Hora Inicial</th>
            <th>Hora Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Banco</th>
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
            <th>Lanternagem</th>
            <th>Pneus</th>
            <th>Nível de água</th>
            <th>Freios</th>
            <th>Direção</th>
            <th>Nível de óleo</th>
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
            <td>{{$dados->banco}}</td>
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
            <td>{{$dados->descricao6}}</td>x
            <td>{{$dados->lanternagem}}</td>
            <td>{{$dados->pneus}}</td>
            <td>{{$dados->h2o}}</td>
            <td>{{$dados->freios}}</td>
            <td>{{$dados->direcao}}</td>
            <td>{{$dados->oleo}}</td>
            <td>{{$dados->observacoes}}</td>
        </tr>
        
    </tbody>
</table>