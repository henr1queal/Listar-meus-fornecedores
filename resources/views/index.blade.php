@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="row justify-content-center mt-5">
                    <div class="col-6 text-center">
                        <h1 class="mb-0">Formulário</h1>
                        <h4 class="mb-0">Preencha este formulário para se tornar um fornecedor visionário.</h4>
                    </div>
                    {{-- {{ $formulario->endereco; }} --}}
                </div>
            </div>
        </div>
        <form action="" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row g-3 mt-1">
                        <div class="col-2">
                            <input type="number" class="form-control form-control-sm" placeholder="Código"
                                aria-label="Codigo">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Tipo" aria-label="Tipo">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Sub-tipo"
                                aria-label="Sub-tipo">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Empresa"
                                aria-label="Empresa">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control form-control-sm" placeholder="Descritivo"
                                aria-label="Descritivo">
                        </div>
                        <div class="col-5">
                            <input type="url" class="form-control form-control-sm" placeholder="Site" aria-label="Site">
                        </div>
                        <div class="col-6">
                            <input type="email" class="form-control form-control-sm" placeholder="E-mail"
                                aria-label="Email">
                        </div>
                        <div class="col-3">
                            <input type="tel" class="form-control form-control-sm" placeholder="Contato"
                                aria-label="Contato">
                        </div>
                        <div class="col-3">
                            <input type="tel" class="form-control form-control-sm" placeholder="Celular"
                                aria-label="Celular">
                        </div>
                        <div class="col-3">
                            <input type="tel" class="form-control form-control-sm" placeholder="Telefone"
                                aria-label="Telefone">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Endereço"
                                aria-label="Endereco">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Bairro"
                                aria-label="Bairro">
                        </div>
                        <div class="col-1">
                            <input type="number" class="form-control form-control-sm" placeholder="Nº" aria-label="Numero">
                        </div>
                        <div class="col-12 text-center mt-3">
                            <button type="button" class="btn btn-success btn-sm">Enviar o formulário</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
