@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container pb-3">
<div class="banner" data-aos="fade-up" data-aos-duration="1000">
  <h1 class="text-center display-3">Arqly</h1>
</div>

  <p data-aos="fade-up" data-aos-duration="1200" class="text-center mt-4">Nossa plataforma de estudos foi criada para ajudar estudantes a organizar e acessar materiais de estudo de maneira prática e eficiente. Aqui, você pode armazenar artigos e outros arquivos educacionais que auxiliam no processo de aprendizado. 
  A plataforma é gratuita e oferece um espaço seguro para gerenciar seus recursos de estudo.</p>

  <h1 class="display-6 pt-5" data-aos="fade-up" data-aos-duration="1200">Funcionalidades</h1>

  <div class="row pt-4">
    <div class="col-md-6 d-flex align-items-start mb-3" data-aos="fade-up" data-aos-duration="1400">
      <i class="bi bi-cloud-arrow-up-fill text-primary display-6 me-3"></i>
      <div>
        <h5>Hospedagem de arquivos</h5>
        <p>Armazene e organize seus materiais de estudo em um só lugar.</p>
      </div>
    </div>
    <div class="col-md-6 d-flex align-items-start mb-3" data-aos="fade-up" data-aos-duration="1500">
      <i class="bi bi-layout-text-sidebar-reverse text-success display-6 me-3"></i>
      <div>
        <h5>Interface intuitiva</h5>
        <p>Navegação simples e amigável para facilitar o uso por estudantes.</p>
      </div>
    </div>
    <div class="col-md-6 d-flex align-items-start mb-3" data-aos="fade-up" data-aos-duration="1600">
      <i class="bi bi-shield-lock-fill text-danger display-6 me-3"></i>
      <div>
        <h5>Acesso seguro</h5>
        <p>Seus arquivos são mantidos seguros e acessíveis somente a você.</p>
      </div>
    </div>
    <div class="col-md-6 d-flex align-items-start mb-3" data-aos="fade-up" data-aos-duration="1700">
      <i class="bi bi-gift-fill text-warning display-6 me-3"></i>
      <div>
        <h5>Gratuito</h5>
        <p>Use a plataforma sem custo para armazenar seus materiais de estudo.</p>
      </div>
    </div>
    <div class="col-md-6 d-flex align-items-start mb-3" data-aos="fade-up" data-aos-duration="1800">
      <i class="bi bi-arrow-repeat text-info display-6 me-3"></i>
      <div>
        <h5>Atualizações frequentes</h5>
        <p>Melhorias contínuas para atender às necessidades dos estudantes.</p>
      </div>
    </div>
  </div>

  <h1 class="display-6 pt-5" data-aos="fade-up" data-aos-duration="1200">Como funciona?</h1>

  <p data-aos="fade-up" data-aos-duration="1400" class="mt-4">Os usuários podem fazer upload de artigos no formato <code>.md</code> (Markdown). A plataforma se encarrega de armazenar esses arquivos na pasta <code>resources/cursos</code> e os torna disponíveis imediatamente para acesso. Subiu um arquivo? Ele será listado automaticamente!</p>

  <p data-aos="fade-up" data-aos-duration="1500" class="mt-3"><strong>Nota:</strong> Esta é uma demonstração da funcionalidade, e o projeto ainda está em desenvolvimento. Infelizmente, algumas funcionalidades planejadas não foram implementadas por completo pelo desenvolvedor.</p>

  <h1 class="display-6 pt-5" data-aos="fade-up" data-aos-duration="1200">Monetização</h1>

  <p data-aos="fade-up" data-aos-duration="1400" class="mt-4">A plataforma sustenta-se por meio da exibição de anúncios em locais estratégicos da plataforma. O usuário poderá receber uma porcentagem de nossos lucros, desde que os artigos publicados atendam às diretrizes de monetização: é necessário ter 40 artigos postados por semana e, além disso, cada artigo deve alcançar um mínimo de 500 leituras.</p>
  <hr class="mt-3">
</div>

<style>
  .banner {
  position: relative;
  width: 100%;
  height: 300px;
  background: url('images/icons/fiap-background.1730889067.svg') center/cover no-repeat;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.banner::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(5px);
  z-index: 1;
}

.banner h1 {
  position: relative;
  z-index: 2;
  color: #fff;
  font-size: 2.5rem;
  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
}
</style>

@endsection
