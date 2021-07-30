<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Operador</th>
            <th>Hora Inicial</th>
            <th>Hora Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Status de Equipamento</th>
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
            <th>Traço Fácil 1</th>
            <th>Areia Média 1</th>
            <th>Brita #0 1</th>
            <th>Brita #1 1</th>
            <th>Total 1</th>
            <th>Traço Fácil 2</th>
            <th>Areia Média 2</th>
            <th>Brita #0 2</th>
            <th>Brita #1 2</th>
            <th>Total 2</th>
            <th>Traço Fácil 3</th>
            <th>Areia Média 3</th>
            <th>Brita #0 3</th>
            <th>Brita #1 3</th>
            <th>Total 3</th>
            <th>Traço Fácil 4</th>
            <th>Areia Média 4</th>
            <th>Brita #0 4</th>
            <th>Brita #1 4</th>
            <th>Total 4</th>
            <th>Traço Fácil 5</th>
            <th>Areia Média 5</th>
            <th>Brita #0 5</th>
            <th>Brita #1 5</th>
            <th>Total 5</th>
            <th>Traço Fácil 6</th>
            <th>Areia Média 6</th>
            <th>Brita #0 6</th>
            <th>Brita #1 6</th>
            <th>Total 6</th>

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
            <td>{{$d->mot1}}</td>
            <td>{{$d->tf1}}</td>
            <td>{{$d->am1}}</td>
            <td>{{$d->b01}}</td>
            <td>{{$d->b11}}</td>
            <td>{{$d->mot1Soma}}</td>
            <td>{{$d->mot2}}</td>
            <td>{{$d->tf2}}</td>
            <td>{{$d->am2}}</td>
            <td>{{$d->b02}}</td>
            <td>{{$d->b12}}</td>
            <td>{{$d->mot2Soma}}</td>
            <td>{{$d->mot3}}</td>
            <td>{{$d->tf3}}</td>
            <td>{{$d->am3}}</td>
            <td>{{$d->b03}}</td>
            <td>{{$d->b13}}</td>
            <td>{{$d->mot3Soma}}</td>
            <td>{{$d->mot4}}</td>
            <td>{{$d->tf4}}</td>
            <td>{{$d->am4}}</td>
            <td>{{$d->b04}}</td>
            <td>{{$d->b14}}</td>
            <td>{{$d->mot4Soma}}</td>
            <td>{{$d->mot5}}</td>
            <td>{{$d->tf5}}</td>
            <td>{{$d->am5}}</td>
            <td>{{$d->b05}}</td>
            <td>{{$d->b15}}</td>
            <td>{{$d->mot5Soma}}</td>
            <td>{{$d->mot6}}</td>
            <td>{{$d->tf6}}</td>
            <td>{{$d->am6}}</td>
            <td>{{$d->b06}}</td>
            <td>{{$d->b16}}</td>
            <td>{{$d->mot6Soma}}</td>
            <td>{{$d->observacoes}}</td>
        </tr>
        @endforeach
    </tbody>
</table>