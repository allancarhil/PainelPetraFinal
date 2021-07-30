<table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Operador</th>
            <th>Hora Inicial</th>
            <th>Hora Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Horímetro Inicial</th>
            <th>Horímetro Final</th>
            <th>Balança UTC04</th>
            <th>Balança UTC05</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Metal UTC-02</th>
            <th>Engal. UA-02</th>
            <th>Engal. UR-01</th>
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
            <td>{{$d->horimetroInicialUa02}}</td>
            <td>{{$d->horimetroFinalUa02}}</td>
            <td>{{$d->horimetroInicialUa03}}</td>
            <td>{{$d->horimetroFinalUa03}}</td>
            <td>{{$d->horimetroInicialUa04}}</td>
            <td>{{$d->horimetroFinalUa04}}</td>
            <td>{{$d->horimetroInicialS3000}}</td>
            <td>{{$d->horimetroFinalS3000}}</td>
            <td>{{$d->horimetroInicialH4000}}</td>
            <td>{{$d->horimetroFinalH4000}}</td>
            <td>{{$d->horimetroInicialRemco}}</td>
            <td>{{$d->horimetroFinalRemco}}</td>
            <td>{{$d->balancaUtc04}}</td>
            <td>{{$d->balancaUtc05}}</td>
            <td>{{$d->paradaInicial1Cr1}}</td>
            <td>{{$d->paradaFinal1Cr1}}</td>
            <td>{{$d->equipamento1Cr1}}</td>
            <td>{{$d->descricao1Cr1}}</td>
            <td>{{$d->paradaInicial2Cr1}}</td>
            <td>{{$d->paradaFinal2Cr1}}</td>
            <td>{{$d->equipamento2Cr1}}</td>
            <td>{{$d->descricao2Cr1}}</td>
            <td>{{$d->paradaInicial3Cr1}}</td>
            <td>{{$d->paradaFinal3Cr1}}</td>
            <td>{{$d->equipamento3Cr1}}</td>
            <td>{{$d->descricao3Cr1}}</td>
            <td>{{$d->paradaInicial4Cr1}}</td>
            <td>{{$d->paradaFinal4Cr1}}</td>
            <td>{{$d->equipamento4Cr1}}</td>
            <td>{{$d->descricao4Cr1}}</td>
            <td>{{$d->paradaInicial5Cr1}}</td>
            <td>{{$d->paradaFinal5Cr1}}</td>
            <td>{{$d->equipamento5Cr1}}</td>
            <td>{{$d->descricao5Cr1}}</td>
            <td>{{$d->paradaInicial6Cr1}}</td>
            <td>{{$d->paradaFinal6Cr1}}</td>
            <td>{{$d->equipamento6Cr1}}</td>
            <td>{{$d->descricao6Cr1}}</td>
            <td>{{$d->paradaInicial7Cr1}}</td>
            <td>{{$d->paradaFinal7Cr1}}</td>
            <td>{{$d->equipamento7Cr1}}</td>
            <td>{{$d->descricao7Cr1}}</td>
            <td>{{$d->paradaInicial8Cr1}}</td>
            <td>{{$d->paradaFinal8Cr1}}</td>
            <td>{{$d->equipamento8Cr1}}</td>
            <td>{{$d->descricao8Cr1}}</td>
            <td>{{$d->paradaInicial9Cr1}}</td>
            <td>{{$d->paradaFinal9Cr1}}</td>
            <td>{{$d->equipamento9Cr1}}</td>
            <td>{{$d->descricao9Cr1}}</td>
            <td>{{$d->paradaInicial10Cr1}}</td>
            <td>{{$d->paradaFinal10Cr1}}</td>
            <td>{{$d->equipamento10Cr1}}</td>
            <td>{{$d->descricao10Cr1}}</td>
            <td>{{$d->paradaInicial11Cr1}}</td>
            <td>{{$d->paradaFinal11Cr1}}</td>
            <td>{{$d->equipamento11Cr1}}</td>
            <td>{{$d->descricao11Cr1}}</td>
            <td>{{$d->paradaInicial12Cr1}}</td>
            <td>{{$d->paradaFinal12Cr1}}</td>
            <td>{{$d->equipamento12Cr1}}</td>
            <td>{{$d->descricao12Cr1}}</td>
            <td>{{$d->paradaInicial13Cr1}}</td>
            <td>{{$d->paradaFinal13Cr1}}</td>
            <td>{{$d->equipamento13Cr1}}</td>
            <td>{{$d->descricao13Cr1}}</td>
            <td>{{$d->paradaInicial14Cr1}}</td>
            <td>{{$d->paradaFinal14Cr1}}</td>
            <td>{{$d->equipamento14Cr1}}</td>
            <td>{{$d->descricao14Cr1}}</td>
            <td>{{$d->paradaInicial15Cr1}}</td>
            <td>{{$d->paradaFinal15Cr1}}</td>
            <td>{{$d->equipamento15Cr1}}</td>
            <td>{{$d->descricao15Cr1}}</td>
            <td>{{$d->metalUtc02}}</td>
            <td>{{$d->engalUa02}}</td>
            <td>{{$d->engalUr01}}</td>          
            <td>{{$d->observacoes}}</td>
        </tr>
        @endforeach
    </tbody>
</table>