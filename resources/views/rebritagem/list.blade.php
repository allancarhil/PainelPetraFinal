@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card-header" style="background-color: #6ab2ec">
        <table class="table table-borderless justify">
            <tr>
                <th scope="col">
                    <h1 style="font-weight: bold;">REBRITAGEM</h1>
                </th>
                <th scope="col" class="d-flex justify-content-end"><a class="btn btn-light" href="{{url('rebritagem/form')}}" style="color:#000000">Voltar</a></th>
            </tr>
        </table>

    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    @if($dados == '' || $dados == null)
    <div style="font-weight: bold;" class="card card-body">Sem informacoes deste equipamento</div>

    @else
    @foreach($dados as $d)

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Operador</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{date( 'd/m/Y' , strtotime($d->data))}}</td>
                        <td>{{$d->motorista}}</td>
                    </tr>
                </tbody>


                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Hora Inicial</th>
                        <th scope="col">Hora Final</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->horaInicial}}</td>
                        <td>{{$d->horaFinal}}</td>
                    </tr>
                </tbody>

            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">Horímetro UA-02</th>

                    </tr>
                </thead>
            </table>
            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Horímetro Inicial</th>
                        <th scope="col">Horímetro Final</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->horimetroInicialUa02}}</td>
                        <td>{{$d->horimetroFinalUa02}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">Horímetro UA-03</th>

                    </tr>
                </thead>
            </table>
            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Horímetro Inicial</th>
                        <th scope="col">Horímetro Final</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->horimetroInicialUa03}}</td>
                        <td>{{$d->horimetroFinalUa03}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">Horímetro UA-04</th>
                    </tr>
                </thead>
            </table>
            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Horímetro Inicial</th>
                        <th scope="col">Horímetro Final</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->horimetroInicialUa04}}</td>
                        <td>{{$d->horimetroFinalUa04}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">Horímetro S3000</th>
                    </tr>
                </thead>
            </table>
            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Horímetro Inicial</th>
                        <th scope="col">Horímetro Final</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->horimetroInicialS3000}}</td>
                        <td>{{$d->horimetroFinalS3000}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">Horímetro H4000 </th>

                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Horímetro Inicial</th>
                        <th scope="col">Horímetro Final</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->horimetroInicialH4000}}</td>
                        <td>{{$d->horimetroFinalH4000}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">Horímetro REMCO</th>
                    </tr>
                </thead>
            </table>
            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Horímetro Inicial</th>
                        <th scope="col">Horímetro Final</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->horimetroInicialRemco}}</td>
                        <td>{{$d->horimetroFinalRemco}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">Balanças</th>
                    </tr>
                </thead>
            </table>
            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Balança UTC04</th>
                        <th scope="col">Balança UTC05</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->balancaUtc04}}</td>
                        <td>{{$d->balancaUtc05}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="748pxpx">Paradas: UR-01 Britador Secundário S3000</th>
                    </tr>
                </thead>
            </table>
            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Inicio</th>
                        <th scope="col">Fim</th>
                        <th scope="col">Equipamento</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->paradaInicial1Cr1}}</td>
                        <td>{{$d->paradaFinal1Cr1}}</td>
                        <td>{{$d->equipamento1Cr1}}</td>
                        <td>{{$d->descricao1Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial2Cr1}}</td>
                        <td>{{$d->paradaFinal2Cr1}}</td>
                        <td>{{$d->equipamento2Cr1}}</td>
                        <td>{{$d->descricao2Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial3Cr1}}</td>
                        <td>{{$d->paradaFinal3Cr1}}</td>
                        <td>{{$d->equipamento3Cr1}}</td>
                        <td>{{$d->descricao3Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial4Cr1}}</td>
                        <td>{{$d->paradaFinal4Cr1}}</td>
                        <td>{{$d->equipamento4Cr1}}</td>
                        <td>{{$d->descricao4Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial5Cr1}}</td>
                        <td>{{$d->paradaFinal5Cr1}}</td>
                        <td>{{$d->equipamento5Cr1}}</td>
                        <td>{{$d->descricao5Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial6Cr1}}</td>
                        <td>{{$d->paradaFinal6Cr1}}</td>
                        <td>{{$d->equipamento6Cr1}}</td>
                        <td>{{$d->descricao6Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial7Cr1}}</td>
                        <td>{{$d->paradaFinal7Cr1}}</td>
                        <td>{{$d->equipamento7Cr1}}</td>
                        <td>{{$d->descricao7Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial8Cr1}}</td>
                        <td>{{$d->paradaFinal8Cr1}}</td>
                        <td>{{$d->equipamento8Cr1}}</td>
                        <td>{{$d->descricao8Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial9Cr1}}</td>
                        <td>{{$d->paradaFinal9Cr1}}</td>
                        <td>{{$d->equipamento9Cr1}}</td>
                        <td>{{$d->descricao9Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial10Cr1}}</td>
                        <td>{{$d->paradaFinal10Cr1}}</td>
                        <td>{{$d->equipamento10Cr1}}</td>
                        <td>{{$d->descricao10Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial11Cr1}}</td>
                        <td>{{$d->paradaFinal11Cr1}}</td>
                        <td>{{$d->equipamento11Cr1}}</td>
                        <td>{{$d->descricao11Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial12Cr1}}</td>
                        <td>{{$d->paradaFinal12Cr1}}</td>
                        <td>{{$d->equipamento12Cr1}}</td>
                        <td>{{$d->descricao12Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial13Cr1}}</td>
                        <td>{{$d->paradaFinal13Cr1}}</td>
                        <td>{{$d->equipamento13Cr1}}</td>
                        <td>{{$d->descricao13Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial14Cr1}}</td>
                        <td>{{$d->paradaFinal14Cr1}}</td>
                        <td>{{$d->equipamento14Cr1}}</td>
                        <td>{{$d->descricao14Cr1}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial15Cr1}}</td>
                        <td>{{$d->paradaFinal15Cr1}}</td>
                        <td>{{$d->equipamento15Cr1}}</td>
                        <td>{{$d->descricao15Cr1}}</td>
                    </tr>
                </tbody>
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Metal UTC-02</th>
                        <th scope="col">Engal. UA-02</th>
                        <th scope="col">Engal. UR-01</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->metalUtc02}}</td>
                        <td>{{$d->engalUa02}}</td>
                        <td>{{$d->engalUr01}}</td>
                        <td></td>

                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="748pxpx">Paradas: UR-02 Britador Terciário H4000</th>

                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Inicio</th>
                        <th scope="col">Fim</th>
                        <th scope="col">Equipamento</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->paradaInicial1Cr2}}</td>
                        <td>{{$d->paradaFinal1Cr2}}</td>
                        <td>{{$d->equipamento1Cr2}}</td>
                        <td>{{$d->descricao1Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial2Cr2}}</td>
                        <td>{{$d->paradaFinal2Cr2}}</td>
                        <td>{{$d->equipamento2Cr2}}</td>
                        <td>{{$d->descricao2Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial3Cr2}}</td>
                        <td>{{$d->paradaFinal3Cr2}}</td>
                        <td>{{$d->equipamento3Cr2}}</td>
                        <td>{{$d->descricao3Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial4Cr2}}</td>
                        <td>{{$d->paradaFinal4Cr2}}</td>
                        <td>{{$d->equipamento4Cr2}}</td>
                        <td>{{$d->descricao4Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial5Cr2}}</td>
                        <td>{{$d->paradaFinal5Cr2}}</td>
                        <td>{{$d->equipamento5Cr2}}</td>
                        <td>{{$d->descricao5Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial6Cr2}}</td>
                        <td>{{$d->paradaFinal6Cr2}}</td>
                        <td>{{$d->equipamento6Cr2}}</td>
                        <td>{{$d->descricao6Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial7Cr2}}</td>
                        <td>{{$d->paradaFinal7Cr2}}</td>
                        <td>{{$d->equipamento7Cr2}}</td>
                        <td>{{$d->descricao7Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial8Cr2}}</td>
                        <td>{{$d->paradaFinal8Cr2}}</td>
                        <td>{{$d->equipamento8Cr2}}</td>
                        <td>{{$d->descricao8Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial9Cr2}}</td>
                        <td>{{$d->paradaFinal9Cr2}}</td>
                        <td>{{$d->equipamento9Cr2}}</td>
                        <td>{{$d->descricao9Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial10Cr2}}</td>
                        <td>{{$d->paradaFinal10Cr2}}</td>
                        <td>{{$d->equipamento10Cr2}}</td>
                        <td>{{$d->descricao10Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial11Cr2}}</td>
                        <td>{{$d->paradaFinal11Cr2}}</td>
                        <td>{{$d->equipamento11Cr2}}</td>
                        <td>{{$d->descricao11Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial12Cr2}}</td>
                        <td>{{$d->paradaFinal12Cr2}}</td>
                        <td>{{$d->equipamento12Cr2}}</td>
                        <td>{{$d->descricao12Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial13Cr2}}</td>
                        <td>{{$d->paradaFinal13Cr2}}</td>
                        <td>{{$d->equipamento13Cr2}}</td>
                        <td>{{$d->descricao13Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial14Cr2}}</td>
                        <td>{{$d->paradaFinal14Cr2}}</td>
                        <td>{{$d->equipamento14Cr2}}</td>
                        <td>{{$d->descricao14Cr2}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial15Cr2}}</td>
                        <td>{{$d->paradaFinal15Cr2}}</td>
                        <td>{{$d->equipamento15Cr2}}</td>
                        <td>{{$d->descricao15Cr2}}</td>
                    </tr>
                    <tr>

                        <td>{{$d->metalUtc11}}</td>
                        <td>{{$d->engalUr02}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="748pxpx">Paradas: UR-03 Britador Quaternário REMCO</th>

                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Inicio</th>
                        <th scope="col">Fim</th>
                        <th scope="col">Equipamento</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->paradaInicial1Cr3}}</td>
                        <td>{{$d->paradaFinal1Cr3}}</td>
                        <td>{{$d->equipamento1Cr3}}</td>
                        <td>{{$d->descricao1Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial2Cr3}}</td>
                        <td>{{$d->paradaFinal2Cr3}}</td>
                        <td>{{$d->equipamento2Cr3}}</td>
                        <td>{{$d->descricao2Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial3Cr3}}</td>
                        <td>{{$d->paradaFinal3Cr3}}</td>
                        <td>{{$d->equipamento3Cr3}}</td>
                        <td>{{$d->descricao3Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial4Cr3}}</td>
                        <td>{{$d->paradaFinal4Cr3}}</td>
                        <td>{{$d->equipamento4Cr3}}</td>
                        <td>{{$d->descricao4Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial5Cr3}}</td>
                        <td>{{$d->paradaFinal5Cr3}}</td>
                        <td>{{$d->equipamento5Cr3}}</td>
                        <td>{{$d->descricao5Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial6Cr3}}</td>
                        <td>{{$d->paradaFinal6Cr3}}</td>
                        <td>{{$d->equipamento6Cr3}}</td>
                        <td>{{$d->descricao6Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial7Cr3}}</td>
                        <td>{{$d->paradaFinal7Cr3}}</td>
                        <td>{{$d->equipamento7Cr3}}</td>
                        <td>{{$d->descricao7Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial8Cr3}}</td>
                        <td>{{$d->paradaFinal8Cr3}}</td>
                        <td>{{$d->equipamento8Cr3}}</td>
                        <td>{{$d->descricao8Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial9Cr3}}</td>
                        <td>{{$d->paradaFinal9Cr3}}</td>
                        <td>{{$d->equipamento9Cr3}}</td>
                        <td>{{$d->descricao9Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial10Cr3}}</td>
                        <td>{{$d->paradaFinal10Cr3}}</td>
                        <td>{{$d->equipamento10Cr3}}</td>
                        <td>{{$d->descricao10Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial11Cr3}}</td>
                        <td>{{$d->paradaFinal11Cr3}}</td>
                        <td>{{$d->equipamento11Cr3}}</td>
                        <td>{{$d->descricao11Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial12Cr3}}</td>
                        <td>{{$d->paradaFinal12Cr3}}</td>
                        <td>{{$d->equipamento12Cr3}}</td>
                        <td>{{$d->descricao12Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial13Cr3}}</td>
                        <td>{{$d->paradaFinal13Cr3}}</td>
                        <td>{{$d->equipamento13Cr3}}</td>
                        <td>{{$d->descricao13Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial14Cr3}}</td>
                        <td>{{$d->paradaFinal14Cr3}}</td>
                        <td>{{$d->equipamento14Cr3}}</td>
                        <td>{{$d->descricao14Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->paradaInicial15Cr3}}</td>
                        <td>{{$d->paradaFinal15Cr3}}</td>
                        <td>{{$d->equipamento15Cr3}}</td>
                        <td>{{$d->descricao15Cr3}}</td>
                    </tr>
                    <tr>
                        <td>{{$d->metalUtc09}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="748px">Status de Equipamento</th>
                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Nível de óleo S3000</th>
                        <th scope="col">Nível de óleo H4000</th>
                        <th scope="col">Bandejas</th>
                        <th scope="col">Skides Britadores</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->oleoS3000}}</td>
                        <td>{{$d->oleoH4000}}</td>
                        <td>{{$d->bandejas}}</td>
                        <td>{{$d->skides}}</td>

                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="748px">Sensores</th>

                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Temp. Cartucho REMCO</th>
                        <th scope="col">Temp Motor REMCO</th>
                        <th scope="col">Vibração REMCO</th>
                        <th scope="col">Pressão H4000</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->tempCartuchoRemco}}</td>
                        <td>{{$d->tempMotorRemco}}</td>
                        <td>{{$d->vibraRemco}}</td>
                        <td>{{$d->pressaoH4000}}</td>
                    </tr>
                </tbody>

                <thead class="table-dark table-bordered">
                    <tr>

                        <th scope="col">Pressão S3000</th>
                        <th></th>
                        <th scope="col">AMPERÍMETROS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>

                        <td>{{$d->pressaoS3000}}</td>
                        <td></td>
                        <td>{{$d->amperimetros}}</td>
                        <td></td>
                    </tr>
                </tbody>

                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Observações</th>
                        <th></th>
                        <th scope="col">Volume incial rachão</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->observacoes}}</td>
                        <td></td>
                        <td>{{$d->inicialRachao}}</td>
                        <td></td>
                    </tr>
                </tbody>

                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">Volume incial B#2</th>
                        <th></th>
                        <th scope="col">Volume incial B#4</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->inicialB2}}</td>
                        <td></td>
                        <td>{{$d->inicialB4}}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">Retorno de Materiais</th>
                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">BICA</th>
                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">%</th>
                        <th></th>
                        <th scope="col">Horários</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->retornoBicaPorcent}}</td>
                        <td></td>
                        <td>{{$d->retornoBicaHorario}}</td>
                    </tr>
                </tbody>
            </table>


            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">B#1</th>
                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">%</th>
                        <th scope="col">Horários</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->retornoB1Porcent}}</td>
                        <td>{{$d->retornoB1Horario}}</td>
                    </tr>
                </tbody>
            </table>


            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">B#0</th>
                    </tr>
                </thead>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">%</th>
                        <th scope="col">Horários</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->retornoB0Porcent}}</td>
                        <td>{{$d->retornoB0Horario}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr style="background-color: #6ab2ec; color:black;">
                        <th scope="col" width="375px">PEDRISCO</th>
                    </tr>
                </thead>

            </table>

            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th scope="col">%</th>
                        <th scope="col">Horários</th>
                    </tr>
                </thead>
                <tbody style="font-size: 20px; font-weight:500;">
                    <tr>
                        <td>{{$d->retornoPedriscoPorcent}}</td>
                        <td>{{$d->retornoPedriscoHorario}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">

                    <tbody>
                        <tr>
                            <form action="/rebritagem/{{$d->id}}/pdf" method="post" target="_blank">
                                @csrf
                                <button type="submit" class="btn" style="background-color: #6ab2ec; margin-right:2px;">Exportar PDF</button>
                            </form>
                        </tr>
                        <tr>
                            <form action="/rebritagem/excel/{{$d->id}}" method="post" target="_blank">
                                @csrf
                                <button type="submit" class="btn" style="background-color: #6ab2ec; ">Exportar Excel</button>
                            </form>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>

    @endforeach
    <form action="/rebritagem/excel/data/{{$d->data}}" method="post" target="_blank">
        @csrf
        <button type="submit" class="btn" style="background-color: #6ab2ec;">Exportar Excel</button>
    </form>
    <br />
</div>


@endif
@endsection