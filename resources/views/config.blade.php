@extends('layouts.app')
@section('title', 'Configurações')
@section('content')
<h1 class="display-4 text-center p-4">Configurações</h1>
<div class="container">
<form action="" method="POST">
        <div class="mb-4">
            <label for="nova_senha" class="form-label ">Novo email:</label>
            <input type="email" id="nova_senha" name="nova_senha" class="form-control">
        </div>
        <div class="mb-4">
            <label for="nova_senha" class="form-label">Nova Senha:</label>
            <input type="password" id="nova_senha" name="nova_senha" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Alterar</button>
        <hr>
    </form>
</div>
@endsection
