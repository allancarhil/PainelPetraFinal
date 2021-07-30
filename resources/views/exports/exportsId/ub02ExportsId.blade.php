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
    
        <tr>
            <td>{{date( 'd/m/Y' , strtotime($dados->data))}}</td>
            <td>{{$dados->motorista}}</td>
            <td>{{$dados->horaInicial}}</td>
            <td>{{$dados->horaFinal}}</td>
            <td>{{$dados->horimetroInicial}}</td>
            <td>{{$dados->horimetroFinal}}</td>
            <td>{{$dados->balancaInicial}}</td>
            <td>{{$dados->balancaFinal}}</td>
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
            <td>{{$dados->pedraBritador}}</td>
            <td>{{$dados->tremonha}}</td>
            <td>{{$dados->bandeja}}</td>
            <td>{{$dados->utc01}}</td>
            <td>{{$dados->observacoes}}</td>
        </tr>
       
    </tbody>
</table>