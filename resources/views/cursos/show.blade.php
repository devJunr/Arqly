@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container">
    <section class="text-center display-6 p-5" data-aos="fade-up" data-aos-duration="1200">
        <h2 class="display-4 font-weight-bold text-danger">{{ $title }}</h2>
    </section>

    <div class="card border-danger text-white bg-dark shadow-lg" style="border-radius: 10px;">
        <div class="card-body">
            <div class="content" data-aos="fade-in" data-aos-duration="1500">
                <!-- Exibe o conteúdo do Markdown já convertido em HTML -->
                {!! $htmlContent !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Ajuste de bordas arredondadas e sombra para o card */
    .card {
        border-radius: 12px; /* Bordas arredondadas */
        box-shadow: 0px 15px 30px rgba(255, 0, 0, 0.2); /* Sombra mais suave e grande */
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card:hover {
        box-shadow: 0px 20px 50px rgba(255, 0, 0, 0.4); /* Aumenta a sombra ao passar o mouse */
        transform: translateY(-5px); /* Eleva o card suavemente ao passar o mouse */
    }

    /* Estilo para o título da página */
    h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #e63946;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Estilo da área de conteúdo */
    .content {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #f1f1f1;
    }

    /* Melhorando o contraste da área de conteúdo */
    .content p {
        margin-bottom: 15px;
    }

    /* Definindo a aparência das imagens (se existirem no conteúdo) */
    .content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 15px 0;
    }

    /* Estilo de links dentro do conteúdo */
    .content a {
        color: #ff6347;
        text-decoration: none;
    }

    .content a:hover {
        text-decoration: underline;
        color: #e63946;
    }
</style>
@endsection

@section('scripts')
<script>
  // Inicializa AOS para as animações
  AOS.init();
</script>
@endsection
