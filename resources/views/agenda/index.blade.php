@extends('layouts.default')

@section('conteudo')

<div class="card" class="cardsize">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tableData as $data)
                <tr>
                    <td>{{$data->nome}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->telefone}}</td>
                    <td>{{$data->endereco}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div>
                <a href="{{ route('agenda.manage') }}" class="btn btn-primary" role="button"><i class="fas fa-plus fa-fw"></i>Novo Produto</a>
        </div>
    </div>
</div>

@endsection