@extends('layouts.app')

@section('title', 'Configurações')

@section('content')
<h1 class="display-4 text-center p-4" data-aos="fade-up" data-aos-duration="1000">Configurações</h1>
<div class="container">
    <form action="" method="POST" data-aos="fade-up" data-aos-duration="1200">
        <div class="mb-4">
            <label for="novo_email" class="form-label">Novo Email:</label>
            <input type="email" id="novo_email" name="novo_email" class="form-control" placeholder="Digite seu novo email">
        </div>
        <div class="mb-4">
            <label for="nova_senha" class="form-label">Nova Senha:</label>
            <input type="password" id="nova_senha" name="nova_senha" class="form-control" placeholder="Digite sua nova senha">
        </div>
        <div class="mb-4">
            <label for="confirmar_senha" class="form-label">Confirmar Nova Senha:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" class="form-control" placeholder="Confirme sua nova senha">
        </div>
        <button type="submit" class="btn btn-custom mb-3">Alterar</button>
        <hr>
    </form>
</div>
@endsection

@section('styles')
<style>
    /* Animação de hover no botão */
    .btn-custom {
        background-color: #007bff; /* Cor personalizada do botão */
        border-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-custom:hover {
        background-color: #0056b3; /* Cor do botão ao passar o mouse */
        transform: translateY(-2px); /* Levanta o botão ao passar o mouse */
    }

    /* Estilos para os campos de input */
    .form-control {
        border-radius: 5px; /* Bordas arredondadas */
        padding: 12px; /* Mais espaço no interior do campo */
        border: 1px solid #ccc; /* Cor do borda */
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff; /* Cor da borda ao focar */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Sombra no foco */
    }

    /* Ajuste do espaçamento e centralização da página */
    .container {
        max-width: 600px;
        margin: 0 auto;
    }

    /* Título com animação */
    h1 {
        font-weight: bold;
    }
</style>
@endsection

@section('scripts')
<script>
  AOS.init();
</script>
@endsection
