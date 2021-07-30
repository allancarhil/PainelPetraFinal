

@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card-header" style="background-color: #6ab2ec">
        <table class="table table-borderless justify">
            <tr>
                <th scope="col">
                    <h1 style="font-weight: bold;">Resumo UC-07</h1>
                </th>
                <th scope="col" class="d-flex justify-content-end"><a class="btn btn-light" href="{{url('uc07Resumo/form')}}" style="color:#000000">Voltar</a></th>
            </tr>
        </table>

    </div>


    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    @if($dados == '' || $dados == null)
    <div class="card card-body" style="font-weight: bold;">Sem informacoes deste equipamento</div>

    @else
    @foreach($dados as $d)
    <div class="card">
        <div class="card-body">


            <table class="table">
                <thead class="table-light table-bordered">
                    <tr>
                        <th scope="col">Data</th>
                    </tr>
                </thead>

                <tr>
                    <td>{{date( 'd/m/Y' , strtotime($d->data))}}</td>
                </tr>
                </tbody>
            </table>





                <br />
                <table class="table">
                    <thead class="table-light table-bordered">
                        <tr style="background-color: #6ab2ec">
                            <th scope="col" width="442px">Viagens Internas</th>

                        </tr>

                    </thead>
                </table>


                <table class="table">
                    <thead class="table-light table-bordered">
                        <tr style="background-color: #6ab2ec">
                            <th scope="col" width="442px">B#0</th>
                            <th scope="col" width="442px">B#1</th>
                            <th scope="col" width="442px">B#2</th>
                            <th scope="col" width="442px">B#4</th>
                            <th scope="col" width="442px">AIM</th>
                            <th scope="col" width="442px">AIF</th>
                            <th scope="col" width="442px">Bica</th>
                        </tr>
                    </thead>



              

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                          
                            <td>{{$d->b0NumViagens}}</td>
                            <td>{{$d->b1NumViagens}}</td>
                            <td>{{$d->b2NumViagens}}</td>
                            <td>{{$d->b4NumViagens}}</td>
                            <td>{{$d->aimNumViagens}}</td>
                            <td>{{$d->aifNumViagens}}</td>
                            <td>{{$d->bicaNumViagens}}</td>
                        </tr>
                    </tbody>
                </table>


                <br />
                <table class="table">
                    <thead class="table-light table-bordered">
                        <tr style="background-color: #6ab2ec">
                            <th scope="col" width="735 px">Viagens por hora</th>

                        </tr>

                    </thead>
                </table>

               
                <table class="table">
                    <thead class="table-light table-bordered">
                        <tr style="background-color: #6ab2ec">
                            <th>Toco</th>
                            <th>Truck</th>
                            <th>Carreta</th>
                            <th>Axor</th>
                        </tr>
                    </thead>

                    <tbody style="font-size: 20px; font-weight:500;">
                        <tr>
                            <td>{{$d->somaToco}}</td>
                            <td>{{$d->somaTruck}}</td>
                            <td>{{$d->somaCarreta}}</td>
                            <td>{{$d->somaAxor}}</td>
                        </tr>
                    </tbody>
                </table>

                <br />
               

                <table class="table">

                    <tbody>
                        <tr>
                            <form action="uc07Resumo/{{$d->id}}/pdf" method="post" target="_blank">
                                @csrf
                                <button type="submit" class="btn" style="background-color: #6ab2ec;">Exportar</button>
                            </form>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
<br/>
@endforeach
</div>


@endif
@endsection