@extends('layouts.app')
@section('title', 'Configurações')
@section('content')
    <h1 class="display-4 text-center p-4">Configurações</h1>
    <div class="d-flex justify-content-center align-items-center" style="height: 70vh;">
        <div class="container text-white bg-dark rounded shadow" style="width: 400px; padding: 20px;">
            <section class="m-3 d-flex flex-column">
                <p class="display-5">Alterar Senha:</p>
                <form action="/alterar-senha" method="post">
                    <div class="form-group text-white mt-3">
                        <label for="">Senha Antiga*</label>
                        <input type="password" name="oldPassword" id="oldPassword" class="form-control bg-dark border border-primary text-white rounded-pill" placeholder="Senha atual" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Nova Antiga*</label>
                        <input type="password" name="newPassword" id="newPassword" class="form-control bg-dark border border-primary text-white rounded-pill " placeholder="Nova senha" required>
                    </div>
                    <section class="pt-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </section>
                </form>
            </section>
        </div>
    </div>
    <br>
@endsection
