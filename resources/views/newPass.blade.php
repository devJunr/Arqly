@extends('layouts.app')
@section('title','Nova Senha')
@section('content')

<div class="d-flex justify-content-center align-items-center flex-column">
<h1 class="display-4 text-center p-4">Nova Senha</h1>
<p class="text-center">Adicione sua nova conta ou gere uma senha para ter mais segurança</p>
<div class="container text-white bg-dark m-4 d-flex p-4 text-white">
    <div class="box d-flex flex-column gap-2 align-items-center justify-content-center">
        <label for="qtde">Digite a quantidade de caracteres</label>
        <input class="text-black" type="text" name="qtde" id="qtde" placeholder="Digite um número">
        <button type="submit" id="btn-enviar" class="btn btn-primary">Gerar senha</button>
        <p class="senha-gerada" id="senha-gerada"></p>
        <button type="submit" class="btn btn-danger" id="btn-copiar" disable>Copiar</button>
    </div>
</div>
</div>

@endsection