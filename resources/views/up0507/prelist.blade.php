@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card-header" style="background-color: #6ab2ec">
        <table class="table table-borderless justify">
            <tr>
                <th scope="col">
                    <h1 style="font-weight: bold;">UP-0507</h1>
                </th>
                <th scope="col" class="d-flex justify-content-end">
                    <a class="btn btn-light" href="{{url('up0507/form')}}" style="color:#000000; margin-right: 10px;">Voltar</a>
                </th>
            </tr>
        </table>
    </div>
    <div class="card-body">
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
            <div class="card-body ml-2 mr-2" style="display: flex;">
                <table class="table">
                    <form action="{{url('/up0507')}}" method="POST">
                        @csrf
                            <td>
                                <input name="data" label="Dia-Mes-Ano" class="form-control" value="<?= $d->data ?>">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary" style="float: right;">Abrir</button>
                            </td>
                    </form>
                </table>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection