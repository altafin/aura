@extends('layouts.portal.default')

@section('content')
    <div class="container-xl">
        <h1 class="app-page-title">Novo Cliente</h1>
        <hr class="mb-4">
        <form class="row g-3" action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-2">
                <label for="inputEmail4" class="form-label">Tipo</label>
                <select id="inputState" class="form-select">
                    <option selected>Escolha...</option>
                    <option>Pessoa Física</option>
                    <option>Pessoa Jurídica</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputPassword4" class="form-label">CPF</label>
                <input type="text" class="form-control" id="inputPassword4" name="cpf">
            </div>
            <div class="col-md-8">
                <label for="inputPassword4" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputPassword4" name="nome">
                @error('nome')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-2">
                <label for="inputAddress" class="form-label">CEP</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-1">
                <label for="inputAddress" class="form-label">Número</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-3">
                <label for="inputAddress" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-md-5">
                <label for="inputCity" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-5">
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-2">
                <label for="inputState" class="form-label">Estado</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="col-2">
                <label for="inputAddress" class="form-label">Telefone Celular</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-2">
                <label for="inputCity" class="form-label">Telefone Residencial</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-2">
                <label for="inputCity" class="form-label">Telefone Comercial</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-6">
                <label for="inputCity" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="inputCity">
            </div>

            <div class="col text-end">
                <button type="submit" class="btn app-btn-primary">Save Changes</button>
                <a class="btn app-btn-secondary" href="{{ route('client.index') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
