@extends('layouts.default')

@section('conteudo')
<div class="cardsize">
    <form action={{  route('agenda.manage') }} method="POST">
        @csrf
        <div class=" col-12">
            <div class="form-group row">
                <label for="nome" class="col-md-2 col-form-label" title="nome">Nome:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="nome" name="nome"  placeholder="nome">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label" title="email">E-mail:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="email" name="email"  placeholder="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="telefone" class="col-md-2 col-form-label" title="telefone">Telefone:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="telefone" name="telefone"  placeholder="telefone">
                </div>
            </div>
            <div class="form-group row">
                <label for="endereco" class="col-md-2 col-form-label" title="endereco">Endereço:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="endereco" name="endereco"  placeholder="endereco">
                </div>
            </div>
            <div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route("agenda.index") }}" class="btn btn-secondary" role="button">Voltar</a>
            </div>
            @if($errors->any())
            <div>
                @foreach($errors->all() as  $erro)
                    {{ $erro }}
                    <br>
                @endforeach
            </div>
            @endif
        </div>
    </form>
</div>
@endsection