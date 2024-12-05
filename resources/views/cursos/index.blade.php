@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
<div class="container">
    <section class="text-center display-6 p-5">
        <h2>Cursos Disponíveis</h2>
    </section>

    <div class="row">
        @foreach($cursos as $curso)
        <div class="col-md-4 mb-4">
            <div class="card border-danger text-white bg-dark" style="box-shadow: -11px 7px 89px -13px rgba(255,0,0,0.84);">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $curso['title'] }}</h5>
                    <a href="{{ route('cursos.show', $curso['name']) }}" class="btn btn-danger mt-3">
                        Ver Curso
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
