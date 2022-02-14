@extends('layouts.default')

@section('conteudo')
<div class="cardsize">
    <form action={{  route('login.manage') }} method="POST">
        @csrf
        <div class=" col-12">
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label" title="name">Nome:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="name" name="name"  placeholder="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label" title="email">E-mail:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="email" name="email"  placeholder="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-2 col-form-label" title="password">Senha:</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" id="password" name="password"  placeholder="password">
                </div>
            </div>
            <div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{ route("login.index") }}" class="btn btn-secondary" role="button">Voltar</a>
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