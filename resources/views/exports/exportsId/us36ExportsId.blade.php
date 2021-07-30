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
        <tr>
            <td>{{$dados->data}}</td>
            <td>{{$dados->motorista}}</td>
            <td>{{$dados->horaInicial}}</td>
            <td>{{$dados->horaFinal}}</td>
            <td>{{$dados->kmInicial}}</td>
            <td>{{$dados->kmFinal}}</td>
            <td>{{$dados->servicos}}</td>
            <td>{{$dados->lanternagem}}</td>
            <td>{{$dados->pneus}}</td>
            <td>{{$dados->observacoes}}</td>
        </tr>
    </tbody>
</table>