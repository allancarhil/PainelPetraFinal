<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Operador</th>
            <th>Hora Inicial</th>
            <th>Hora Final</th>
            <th >Horímetro Inicial</th>
            <th >Horímetro Final</th>
            <th >Balança Inicial</th>
            <th >Balança Final</th>
            <th >Status de Equipamento</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Inicio</th>
            <th >Fim</th>
            <th >Descrição</th>
            <th >Há pedras no britador</th>
            <th >Tremonha UTC01</th>
            <th >Bandeja UTC01</th>
            <th >UTC01</th>
            <th >Observações</th>
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
            <td>{{$d->balancaInicial}}</td>
            <td>{{$d->balancaFinal}}</td>
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
            <td>{{$d->pedraBritador}}</td>
            <td>{{$d->tremonha}}</td>
            <td>{{$d->bandeja}}</td>
            <td>{{$d->utc01}}</td>
            <td>{{$d->observacoes}}</td>
        </tr>
        @endforeach
    </tbody>
</table>