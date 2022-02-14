@extends('layouts.default')

@section('conteudo')
<div class="cardsize">
    <form action={{  route('login.index') }} method="POST">
        @csrf
        <div class=" col-12">
            <div class="form-group row">
                <label for="usuario" class="col-md-2 col-form-label" title="usuario">Usuário:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="usuario" name="usuario"  placeholder="usuario" value="{{  old('usuario') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="senha" class="col-md-2 col-form-label" title="senha">Senha:</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" id="senha" name="senha"  placeholder="senha" value="{{  old('senha') }}">
                </div>
            </div>
            <div>
            <button type="submit" class="btn btn-primary">Acessar</button>
            <a href="{{ route("login.manage") }}" class="btn btn-secondary" role="button">Cadastrar-se</a>
            </div>
            @if($errors->any())
            <div>
                @foreach($errors->all() as  $error)
                    {{ $error }}
                    <br>
                @endforeach
            </div>
            @endif
        </div>
    </form>
</div>
{{ isset($erro) && $erro != '' ? $erro : '' }}
@endsection