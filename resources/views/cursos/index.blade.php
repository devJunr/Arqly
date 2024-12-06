@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
<div class="container">
    <section class="text-center display-6 p-5">
        <h2>Leituras Disponíveis</h2>
    </section>

    <div class="row">
        @foreach($cursos as $curso)
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="card border-danger text-white course-card" style="background-color: transparent;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $curso['title'] }}</h5>
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

@section('styles')
<style>
    
    .course-card {
        transition: transform 0.3s ease, opacity 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); 
    }

    .course-card:hover {
        transform: scale(1.05); 
        opacity: 0.9; 
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }


    .btn-custom {
        background-color: #e63946;
        border-color: #e63946;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-custom:hover {
        background-color: #d62c1f; /* Cor do botão ao passar o mouse */
        transform: translateY(-2px); /* Levanta o botão ao passar o mouse */
    }

    /* Estilo do ícone dentro do botão */
    .btn-custom i {
        margin-right: 8px;
    }
</style>
@endsection

@section('scripts')
<script>
  AOS.init();
</script>
@endsection
