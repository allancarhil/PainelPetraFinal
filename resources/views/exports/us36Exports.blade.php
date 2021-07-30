<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Operador</th>
            <th>Hora Inicial</th>
            <th>Hora Final</th>
            <th>Km Inicial</th>
            <th>Km Final</th>
            <th>Serviços</th>
            <th>Status de Equipamento</th>
            <th>Lanternagem</th>
            <th>Pneus</th>
            <th>Observações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($dados as $d)
        <tr>
            <td>{{$d->data}}</td>
            <td>{{$d->motorista}}</td>
            <td>{{$d->horaInicial}}</td>
            <td>{{$d->horaFinal}}</td>
            <td>{{$d->kmInicial}}</td>
            <td>{{$d->kmFinal}}</td>
            <td>{{$d->servicos}}</td>
            <td>{{$d->lanternagem}}</td>
            <td>{{$d->pneus}}</td>
            <td>{{$d->observacoes}}</td>
        </tr>
        @endforeach
    </tbody>
</table>