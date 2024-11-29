@extends('layouts.app')
@section('title','Nova Senha')
@section('content')
<div class="container d-flex justify-content-center align-items-center mt-5 mb-5">
    
    <div class="card shadow-lg p-4 border border-danger" style="max-width: 400px; width: 100%; background-color: transparent; color: #fff; ">
    <h1 class="text-center mb-3 p-1 display-4">Gerador de Senhas</h1>
        <form>
            <div class="mb-3">
                <label for="qtde" class="form-label">Quantidade de caracteres</label>
                <input type="number" class="form-control" id="qtde" placeholder="Digite um número" min="1">
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="incluir-maiusculas">
                    <label class="form-check-label" for="incluir-maiusculas">Incluir letras maiúsculas</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="incluir-minusculas">
                    <label class="form-check-label" for="incluir-minusculas">Incluir letras minúsculas</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="incluir-numeros">
                    <label class="form-check-label" for="incluir-numeros">Incluir números</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="incluir-simbolos">
                    <label class="form-check-label" for="incluir-simbolos">Incluir símbolos</label>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="button" id="btn-gerar" class="btn btn-danger">Gerar senha</button>
                <button type="button" id="btn-copiar" class="btn btn-outline-secondary">Copiar senha</button>
            </div>

            <div class="mt-4 text-center">
                <p id="senha-gerada" class="fs-5 text-break"></p>
            </div>
        </form>
    </div>
</div>
@endsection