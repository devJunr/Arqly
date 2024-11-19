@extends('layouts.app')
@section('title','Configurações')
@section('content')
<h1 class="display-4 text-center p-4">Configurações</h1>
<div class="container text-white bg-dark d-flex flex-column">
    <section class="m-3">
        <input type="checkbox" id="trocarRodape" name="trocarRodape" value="op-01">
        <label for="trocarRodape">Substituir o rodapé pelo endereço da conexão atual</label><br>
    </section>
    
    <section class="m-3">
        <input type="checkbox" id="a" name="a" value="op-01">
        <label for="a">Ativar lembretes de uso (Quando esta opção estiver ativada, a aplicação utilizará notificações do sistema para informar que a senha foi copiada)</label><br>
    </section>

    <section class="m-3">
        <input type="checkbox" id="b" name="b" value="op-01">
        <label for="b">Desativar a opção de página inicial</label><br>

    </section>

</div> 
<div class="d-flex align-items-center justify-content-center m-5 gap-3">
    <button type="submit" class="btn btn-success">Salvar</button>
    <button type="submit" class="btn btn-danger">Cancelar</button>
</div>
@endsection