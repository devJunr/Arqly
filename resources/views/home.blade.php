@extends('layouts.app')

@section('title','Home')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide mt-5">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/banner/image1.png" class="d-block w-100" alt="Banner do header falando sobre o projeto">
    </div>
    <div class="carousel-item">
      <img src="/images/banner/image2.png" class="d-block w-100" alt="Banner do header falando sobre o projeto">
    </div>
    <div class="carousel-item">
      <img src="/images/banner/image3.png" class="d-block w-100" alt="Banner do header falando sobre o projeto">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class=" p-5 container">
<h1 class="display-1 text-white">LockPassManager</h1>
<p class="text-white">O LockPassManager é um gerenciador de senhas seguro e fácil de usar, desenvolvido para ajudar os usuários a armazenar e gerenciar suas senhas de forma eficiente. Com uma interface intuitiva e recursos robustos, ele garante a segurança das suas informações.</p>

<h1 class="display-6 text-white pt-5">Funcionalidades</h1>
<ul>
<li class="pt-1">Armazenamento seguro de senhas: Guarde suas senhas em um local seguro, protegido contra acessos não autorizados.</li>
<li class="pt-1">Geração de senhas fortes: Crie senhas robustas e difíceis de adivinhar com apenas um clique.</li>
<li class="pt-1">Recuperação de senhas: Recupere facilmente suas senhas caso você as esqueça.</li>
<li class="pt-1">Verificação se o email vazou: Fique informado se seu email foi exposto em vazamentos de dados.</li>
<li class="pt-1">Interface amigável: Navegue pelo aplicativo de maneira fácil e intuitiva, sem complicações.</li>
<li class="pt-1">Nada de guardar na nuvem: Todos os dados são armazenados localmente, garantindo total controle e privacidade das suas informações.</li>
</ul>
</div>
@endsection
