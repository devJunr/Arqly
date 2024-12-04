@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container pb-3">
  <h1 class="text-center display-5">LockPassManager</h1>
  <div class="container d-flex justify-content-center align-itens-center">
  
    <img src="images/icons/icon.png" class="img-fluid" width="260rem">
  </div>
  <p>O LockPassManager é um gerenciador de senhas seguro e fácil de usar, desenvolvido para ajudar os usuários a armazenar e gerenciar suas senhas de forma eficiente. Com uma interface intuitiva e recursos robustos, ele garante a segurança das suas informações.</p>

  <h1 class="display-6 pt-5">Funcionalidades</h1>

  <ul>
  <li class="pt-1">Armazenamento seguro de senhas: Guarde suas senhas em um local seguro, protegido contra acessos não autorizados.</li>
  <li class="pt-1">Geração de senhas fortes: Crie senhas robustas e difíceis de adivinhar com apenas um clique.</li>
  <li class="pt-1">Recuperação de senhas: Recupere facilmente suas senhas caso você as esqueça.</li>
  <li class="pt-1">Verificação se o email vazou: Fique informado se seu email foi exposto em vazamentos de dados.</li>
  <li class="pt-1">Interface amigável: Navegue pelo aplicativo de maneira fácil e intuitiva, sem complicações.</li>
  <li class="pt-1">Nada de guardar na nuvem: Todos os dados são armazenados localmente, garantindo total controle e privacidade das suas informações.</li>
  </ul>
  </div>
</div>  
@endsection
