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
        
        <tr>
            <td>{{date( 'd/m/Y' , strtotime($dados->data))}}</td>
            <td>{{$dados->motorista}}</td>
            <td>{{$dados->horaInicial}}</td>
            <td>{{$dados->horaFinal}}</td>
            <td>{{$dados->horimetroInicial}}</td>
            <td>{{$dados->horimetroFinal}}</td>
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
            <td>{{$dados->mot1}}</td>
            <td>{{$dados->tf1}}</td>
            <td>{{$dados->am1}}</td>
            <td>{{$dados->b01}}</td>
            <td>{{$dados->b11}}</td>
            <td>{{$dados->mot1Soma}}</td>
            <td>{{$dados->mot2}}</td>
            <td>{{$dados->tf2}}</td>
            <td>{{$dados->am2}}</td>
            <td>{{$dados->b02}}</td>
            <td>{{$dados->b12}}</td>
            <td>{{$dados->mot2Soma}}</td>
            <td>{{$dados->mot3}}</td>
            <td>{{$dados->tf3}}</td>
            <td>{{$dados->am3}}</td>
            <td>{{$dados->b03}}</td>
            <td>{{$dados->b13}}</td>
            <td>{{$dados->mot3Soma}}</td>
            <td>{{$dados->mot4}}</td>
            <td>{{$dados->tf4}}</td>
            <td>{{$dados->am4}}</td>
            <td>{{$dados->b04}}</td>
            <td>{{$dados->b14}}</td>
            <td>{{$dados->mot4Soma}}</td>
            <td>{{$dados->mot5}}</td>
            <td>{{$dados->tf5}}</td>
            <td>{{$dados->am5}}</td>
            <td>{{$dados->b05}}</td>
            <td>{{$dados->b15}}</td>
            <td>{{$dados->mot5Soma}}</td>
            <td>{{$dados->mot6}}</td>
            <td>{{$dados->tf6}}</td>
            <td>{{$dados->am6}}</td>
            <td>{{$dados->b06}}</td>
            <td>{{$dados->b16}}</td>
            <td>{{$dados->mot6Soma}}</td>
            <td>{{$dados->observacoes}}</td>
        </tr>
       
    </tbody>
</table>