@extends('layouts.app')

@section('title', 'Artigos')

@section('content')
<div class="container">
    <section class="text-center display-6 p-5">
        <h2>Leituras Disponíveis</h2>
    </section>

    <div class="row">
        @foreach($cursos as $curso)
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="card border-danger course-card" style="background-color: transparent;">
                <div class="card-body text-center">
                    <h5 class="title-curso">{{ $curso['title'] }}</h5>
                    <a href="{{ route('cursos.show', $curso['name']) }}" class="btn btn-custom mt-3">
                        <i class="fas fa-play-circle"></i> Acessar Agora
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    :root {
        --cor-primaria: #000000;
        --cor-secundaria: #F6F6F6;
        --cor-terciaria: #fd2222;
        --cor-hover-botao: #f0484875;
        --cor-hover-cabecario: #ff6666;
        --fonte-primaria: 'Krona One', sans-serif;
        --fonte-secundaria: 'Montserrat', sans-serif;

        --cor-fundo-modal: rgba(0, 0, 0, 0.7); 
        --cor-modal-fundo: #fff; 
        --cor-modal-texto: #000; 
        --cor-botao-fundo: var(--cor-terciaria);
        --cor-botao-hover: var(--cor-hover-botao);

        /* Cores do modo claro */
        --cor-titulo: #000;
        --cor-card-fundo: #fff;
        --cor-card-texto: #000;
        --cor-btn-fundo: var(--cor-terciaria);
        --cor-btn-hover: #d62c1f;
        --cor-card-title: #000; /* Cor do título no modo claro */
    }

    @media (prefers-color-scheme: dark) {
        :root {
            --cor-titulo: #fff;
            --cor-card-fundo: #333;
            --cor-card-texto: #fff;
            --cor-btn-fundo: #fd2222;
            --cor-btn-hover: #ff6666;
            --cor-fundo-modal: rgba(0, 0, 0, 0.9);
            --cor-modal-fundo: #333;
            --cor-modal-texto: #fff;
            --cor-card-title: #fff; 
        }
    }


    .course-card {
        transition: transform 0.3s ease, opacity 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        background-color: var(--cor-card-fundo);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); 
    }

    .course-card:hover {
        transform: scale(1.05); 
        opacity: 0.9; 
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }

    h2 {
        color: var(--cor-titulo);
    }

    .title-curso {
        color: var(--cor-card-texto);
    }

    .btn-custom {
        background-color: var(--cor-btn-fundo);
        border-color: var(--cor-btn-fundo);
        color: var(--cor-card-texto);
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-custom:hover {
        background-color: var(--cor-btn-hover);
        transform: translateY(-2px);
    }

    .btn-custom i {
        margin-right: 8px;
    }
</style>

@section('scripts')
<script>
  AOS.init();
</script>
@endsection
