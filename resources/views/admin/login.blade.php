@extends('layouts.app')

@section('title','Inicio')

@section('content')

<div class="container d-flex flex-column justify-content-center align-items-center gap-3 p-5 mt-5 mb-5 bg-dark rounded">
    <h1 class="display-1 p-1">Login</h1>
    <form class="d-flex flex-column gap-1" action="" method="get">
        <div class="d-flex flex-column gap-2" style="width: 20rem; height: 4rem">
            <input class="text-white bg-dark border border-danger" type="email" id="email" placeholder="Usuário"/>
            <input class="text-white bg-dark border border-danger" type="password" id="password" placeholder="Senha"/>
        </div>
    <button type="submit" class="p-1 m-2 btn btn-danger">Entrar</button>
    </form>
</div>


@endsection