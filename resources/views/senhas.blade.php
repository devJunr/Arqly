@extends('layouts.app')

@section('title','Senhas')

@section('content')

<div class="container">
    <section class="text-center display-6 p-5">
        <h2>Senhas</h2>
    </section>
    
    <section class="container">
        <button class="btn btn-outline-success" onclick="adicionarNovaSenha()">Adicionar Nova Senha</button>
        <button style="display: none;" class="btn btn-danger" onclick="adicionarNovaSenha()">Fechar Menu</button>
    </section>

    <section class="newPassShow" style="display: none;">
        <iframe src="/newPass" width="100%" height="60%">
    </section>
</div>

<script>
    adicionarNovaSenha.onclick = function (e) {
        e.preventDefault();
        menuLateral.style.marginLeft = "1000%";
    }
</script>
@endsection