@extends('layouts.app')
@section('title', 'Configurações')
@section('content')
<h1 class="display-4 text-center p-4">Configurações</h1>
<div class="container text-white bg-dark d-flex flex-column">
    <section class="m-3 d-flex gap-2">
        <p>Alterar Senha: </p>
        <form action="/alterar-senha" method="post">
            <input type="password" name="oldPassword" id="oldPassword" class="bg-dark border border-primary" placeholder="Senha atual" required>
            <input type="password" name="newPassword" id="newPassword" class="bg-dark border border-primary" placeholder="Nova senha" required>
                <section class="pt-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </section>
        </form>
    </section>
</div>
<br>
@endsection
