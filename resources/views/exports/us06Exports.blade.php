<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Operador</th>
            <th>Hora Inicial</th>
            <th>Hora Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Nº Tanques açude Interno</th>
            <th>Nº Tanques açude Restaurante</th>
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
        @foreach($dados as $d)
        <tr>
            <td>{{date( 'd/m/Y' , strtotime($d->data))}}</td>
            <td>{{$d->motorista}}</td>
            <td>{{$d->horaInicial}}</td>
            <td>{{$d->horaFinal}}</td>
            <td>{{$d->horimetroInicial}}</td>
            <td>{{$d->horimetroFinal}}</td>
            <td>{{$d->acudeInterno}}</td>
            <td>{{$d->acudeRestaurante}}</td>
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
            <td>{{$d->descricao6}}</td>x
            <td>{{$d->lanternagem}}</td>
            <td>{{$d->pneus}}</td>
            <td>{{$d->h2o}}</td>
            <td>{{$d->freios}}</td>
            <td>{{$d->direcao}}</td>
            <td>{{$d->oleo}}</td>
            <td>{{$d->observacoes}}</td>
        </tr>
        @endforeach
    </tbody>
</table>