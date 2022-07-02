@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center my-5">
            <div class="card text-dark bg-light mb-3 px-0 rounded" style="max-width: 25rem;">
                <div class="card-header">
                    <div class="col-8 text-center my-3 mx-auto">
                        <h1 class="mb-0">Cadastro</h1>
                        <h4 class="mb-0">Preencha para visualizar os cadastros de fornecedores.</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-lg-9 mt-0 mb-3 mx-auto">
                        <form action="" method="post">
                            @csrf
                            <div class="row g-3 mt-1 justify-content-center align-items-center">
                                <label for="inputPassword" class="col-10 text-center">E-mail</label>
                                <div class="col-12 text-center mt-1">
                                    <input type="email" class="form-control form-control-sm" aria-label="email_cadastro">
                                </div>
                                <label for="inputPassword" class="col-10 text-center">Senha</label>
                                <div class="col-12 text-center mt-1">
                                    <input type="password" class="form-control form-control-sm" aria-label="senha_cadastro">
                                </div>
                                <label for="inputPassword" class="col-10 text-center">Primeiro nome</label>
                                <div class="col-12 text-center mt-1">
                                    <input type="text" class="form-control form-control-sm" aria-label="nome_cadastro">
                                </div>
                                <label for="inputPassword" class="col-10 text-center">Cargo</label>
                                <div class="col-12 text-center mt-1">
                                    <input type="text" class="form-control form-control-sm" aria-label="cargo_cadastro">
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button type="button" class="btn btn-success btn-sm">Efetuar cadastro</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection